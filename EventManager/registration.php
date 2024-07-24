
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Registration</title>
    <style>
        body {
            background-color:black; /* Background color */
            margin: 0;
            padding: 0;
        }
        header {
            background-color: black; /* Header background color */
            padding: 20px 0;
            text-align: center;
            margin-bottom: 4px;
            display: flex;
            flex-direction: row;
        }
        #submit:hover{
            background-color:gray;
            color:black;
        }
        #div1 {
            /*background-color: purple;  Content background color */
            background-color:white;
            text-align: center;
            color:black;
            max-width: 600px;
       
            margin: auto;
            margin-top: 30px;
            font-family: Arial, sans-serif;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
           padding: 20px;
            border-radius:10px;
            border:5px solid darkmagenta;

        }
        h1 {
            font-size: 36px;
            margin: 0;
            color:darkmagenta;
           margin-left: 330px;
           
        }
        label {
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
            color: black;
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            color:darkmagenta;
        }
        input, select {
            width: 90%;
            height: 30px;
            font-size: 12px;
            margin-bottom: 12px;
            border-radius: 5px; 
            border: 1px solid #ccc; 
            padding: 5px; 
            background-color: lightpink;
        }
        button {
            background-color: black; 
            color: white;
            height: 50px;
            width: 150px;
            border-radius: 30px;
            text-align: center;
            border: 2px solid black; 
            cursor: pointer; 
            font-size: large;
            margin-top: 4px;
           
        }
        
        h2{
           margin-bottom: 20px;
           margin-top: 2px;
           font-size: 35px;
           color:darkmagenta;
           
         
        }
        .input-group {
            margin-bottom: 20px;
        }
        a{
            color:darkmagenta;
        }
        hr{
            color: darkmagenta;
        }
        p{
            color: white;
        }
    </style>
</head>
<body>
<header>
        <h1>Andhra pradhesh Digital Polling</h1>
        <img id='logo' src="logo.png" style="margin-left:auto; margin-right: 257px; width:62px; height:62px;">
        
    </header>
    <hr>
    <div class="container">
        <div id="div1">
            <div class="register">
            <h2 style='color:darkmagenta;'>Register</h2></div><hr>
            <form action="register.php" method="POST" >
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="input-group">
                    <label for="voterno">Voter Id No:</label>
                    <input type="text" name="voterno" id="Voterno" required>
                </div>
                <div class="input-group">
                    <label for="phonenumber">Phone Number:</label>
                    <input type="tel" name="phonenumber" id="phonenumber" required>
                </div>
                <div class="input-group">
                    <label for="aadhaar Number">aadhaar Number:</label>
                    <input type="tel" name="aadhaarNumber" id="aadhaarNumber" required>
                </div>
                <button type="submit" id="submit">Register</button><br>
                <P>
                Already a Voter
               <a href="index.php">Login here</a></p>
            </form>
        </div>
    </div>
</body>
</html>
