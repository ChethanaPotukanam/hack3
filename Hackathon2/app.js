const express = require('express');
const bodyParser = require('body-parser');
const path = require('path');
const mongoose = require('mongoose');
const session = require('express-session');
const MongoStore = require('connect-mongo');

// MongoDB connection
mongoose.connect('mongodb://localhost:27017/eventmanage', {
    useNewUrlParser: true,
    useUnifiedTopology: true
});

const app = express();

// Middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.set('view engine', 'ejs');
app.use(express.static(path.join(__dirname, 'public')));

// Session setup
app.use(session({
    secret: 'your_secret_key',
    resave: false,
    saveUninitialized: false,
    store: MongoStore.create({ mongoUrl: 'mongodb://localhost:27017/eventmanage' })
}));

// User authentication middleware
function isAuthenticated(req, res, next) {
    if (req.session.user) {
        return next();
    } else {
        res.redirect('/login');
    }
}

// User data
const userData = {
    email: 'chethanapotukanam@gmail.com',
    password: 'your_password'  // Replace with your actual password
};

// Mongoose Schema and Model for Event
const eventSchema = new mongoose.Schema({
    eventName: String,
    date: { type: Date, required: true }
});

const Event = mongoose.model('Event', eventSchema);

// Routes
app.get('/', (req, res) => {
    res.render('index', { user: req.session.user });
});

app.get('/login', (req, res) => {
    res.render('login');
});

app.post('/login', (req, res) => {
    const { email, password } = req.body;
    if (email === userData.email && password === userData.password) {
        req.session.user = email;
        res.redirect('/eventLogin');
    } else {
        res.redirect('/events');  // Redirect to login if credentials are incorrect
    }
});

app.get('/student', (req, res) => {
    res.render('student');  // Make sure you have a student.ejs file in the views folder
});

app.get('/eventLogin', (req, res) => {
    res.render('eventLogin', { user: req.session.user });  // Make sure you have a student.ejs file in the views folder
});

app.get('/manage_events', isAuthenticated, async (req, res) => {
    try {
        const events = await Event.find({});
        res.render('manage_events', { events, user: req.session.user });
    } catch (err) {
        console.log(err);
        res.send('Error retrieving events.');
    }
});

app.get('/event-analysis', async (req, res) => {
    try {
        const events = await Event.find({});

        // Example data analysis: count events per month
        const eventCountByMonth = events.reduce((acc, event) => {
            const month = event.date.getMonth() + 1; // getMonth() returns 0-11
            acc[month] = (acc[month] || 0) + 1;
            return acc;
        }, {});

        res.render('event_analysis', { events, eventCountByMonth });
    } catch (err) {
        console.log(err);
        res.send('Error retrieving event data.');
    }
});

app.post('/add-event', isAuthenticated, async (req, res) => {
    const { eventName, date } = req.body;

    // Convert the date string into a JavaScript Date object
    let parsedDate;
    try {
        parsedDate = new Date(date);
        if (isNaN(parsedDate.getTime())) {
            throw new Error('Invalid date format');
        }
    } catch (err) {
        console.log('Date parsing error:', err);
        return res.send('Invalid date format.');
    }

    const newEvent = new Event({ eventName, date: parsedDate });
    try {
        await newEvent.save();
        res.redirect('/manage_events');
    } catch (err) {
        console.log('Error saving event:', err);
        res.send('Error saving event.');
    }
});

app.post('/delete-event/:id', isAuthenticated, async (req, res) => {
    if (req.session.user === 'chethanapotukanam@gmail.com') {
        try {
            await Event.findByIdAndDelete(req.params.id);
            res.redirect('/manage_events');
        } catch (err) {
            console.log(err);
            res.send('Error deleting event.');
        }
    } else {
        res.redirect('/manage_events');
    }
});

app.get('/events', async (req, res) => {
    try {
        const events = await Event.find({});
        res.render('events', { events, user: req.session.user }); // Pass 'user' to the view
    } catch (err) {
        console.log(err);
        res.send('Error retrieving events.');
    }
});

// Mongoose Schema and Model for Volunteers
const volunteerSchema = new mongoose.Schema({
    email: { type: String, required: true, unique: true },
    password: { type: String, required: true },
    partType: { type: String, required: true }
});

const Volunteer = mongoose.model('Volunteer', volunteerSchema);

app.post('/volunteer', async (req, res) => {
    const { email, password, partType } = req.body;

    const newVolunteer = new Volunteer({ email, password, partType });

    try {
        await newVolunteer.save();
        res.render('successpage');
    } catch (err) {
        console.log(err);
        res.send('Error registering volunteer');
    }
});

app.get('/volunteer', (req, res) => {
    res.render('volunteer');
});

app.post('/buy-event/:id', async (req, res) => {
    try {
        // Implement the logic for buying an event (e.g., marking it as bought, reducing stock, etc.)

        // After completing the buy logic, render the volunteer.ejs page
        res.render('volunteer');
    } catch (err) {
        console.log(err);
        res.send('Error processing the purchase.');
    }
});


app.get('/chart', (req, res) => {
    res.render('chartPage'); // Make sure 'chartPage' is the name of your EJS file without '.ejs'
});


// Add this route for logout
app.get('/logout', (req, res) => {
    req.session.destroy((err) => {
        if (err) {
            return res.redirect('/');
        }
        res.clearCookie('connect.sid');
        res.redirect('/');
    });
});

// Server
const PORT = process.env.PORT || 3002;
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
