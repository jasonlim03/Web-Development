<?php
    //Step 1 - Connect to database
    include 'database/connect.php';
    //Step 2 - retrieve all user input from your form
    if(isset($_POST['btnRegister'])){
        $username = $_POST['txtName'];
        $email = $_POST['txtEmail'];
        $password = $_POST['txtPassword'];
        //step 3 - query
        $query = "INSERT INTO `tblusers`(`name`, `email`, `password`) VALUES ('$username','$email','$password')";
        //step 4 - execute query
        if(mysqli_query($connection,$query)){
            echo "Thank you for registering";
        } else {
            echo "Sorry, please try again";
        }
    }
    //last step - close connection
    mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        /* Styles for the page */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #222;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        .container {
            margin: 20px auto;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        input[type="password"] {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #222;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        p {
            margin-top: 10px;
        }

        p a {
            color: #222;
            text-decoration: none;
        }

        footer {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        footer nav ul {
            list-style: none;
            padding: 0;
            margin-top: 10px;
        }

        footer nav ul li {
            display: inline;
            margin-right: 10px;
        }

        footer nav ul li a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        <h1>Online Fishery Market</h1>
    </header>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="" method="post">
            <label for="txtName">Username:</label>
            <input type="text" name="txtName" id="txtName"><br>
            <label for="txtEmail">Email Address:</label>
            <input type="text" name="txtEmail" id="txtEmail"><br>
            <label for="txtPassword">Password:</label>
            <input type="password" name="txtPassword" id="txtPassword"><br>
            <input type="submit" value="Register" name="btnRegister">
        </form>
        <br>
        <p>Already have an account? Click <a href="login.php">Here</a> to login.</p>
    </div>
    <footer>
        <div class="container">
            <p>&copy; 2023 Online Fishery Market</p>
            <nav>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>
