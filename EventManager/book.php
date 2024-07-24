<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .container{
            margin-top: 100px;
        }
        img{
            height: 280px;
            width: 280px;
            border-radius: 60%;
        }
        body{
            background-color: black;
        }
        h1{
            color: white;
            text-align: center;
        }

    </style>
</head>
<body>
    <h1>Choose User Category</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="images/student.jpg" alt="student" class="img-fluid">
                <button class="btn btn-primary mt-3">Student</button>
            </div>
            <div class="col">
                <img src="images/faculty.jpeg" alt="faculty" class="img-fluid">
                <button class="btn btn-primary mt-2 ">Faculty</button>
            </div>
            <div class="col">
                <img src="images/Eventmanager.jpeg" alt="event manager" class="img-fluid">
                <button class="btn btn-primary mt-2">Event Manager</button>
            </div>
        </div>
    </div>
</body>
</html>