<?php
session_start();
include 'database/connect.php';
if(isset($_POST['btnLogin'])){
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];
    $query = "SELECT * FROM tblusers
                    WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connection, $query);
    //scenario 2
    $row = mysqli_fetch_assoc($result); //later we will use this info $row
    $count = mysqli_num_rows($result); //return 1 or 0
    if ($count == 1){
        //echo 'record found';
        $_SESSION['id'] = $row["id"];
        $_SESSION['username'] = $row["name"];
        $_SESSION['email'] = $row["email"];
        header("Location: userpage.php"); //redirect the user to userpage.php 
    } else {
        echo 'record not found, try again';
    }
}
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <h2>Login Page</h2>
        <form action="" method="post">
            <label for="txtEmail">Email:</label>
            <input type="text" name="txtEmail" id="txtEmail"><br>
            <label for="txtPassword">Password:</label>
            <input type="password" name="txtPassword" id="txtPassword"><br>
            <input type="submit" value="Login" name="btnLogin">
        </form>
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
