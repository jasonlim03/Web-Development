<?php
session_start();
include('database/connect.php');

if($_SESSION['id'] ==null){
    header("Location: loginform.php");
}
$id = $_SESSION['id'];
$loadProfileQuery = "SELECT * FROM tblusers WHERE id='$id'";
$result = mysqli_query($connection, $loadProfileQuery);
$row = mysqli_fetch_assoc($result); 
$count = mysqli_num_rows($result); 
if ($count == 1){
        echo $row['id'];
        echo $row['name'];
        echo $row['email'];
}

if (isset($_POST['btnUpdate'])){
    $id = $_SESSION['id'];
    $newname = $_POST['txtName'];
    $newemail = $_POST['txtEmail'];
    $newpassword = $_POST['txtPassword'];
    $query = "UPDATE `tblusers` SET `name`='$newname', `email`='$newemail', `password`='$newpassword' WHERE id='$id'";
    $run=mysqli_query($connection,$query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile - Online Fishery Market</title>
    <style>
        /* Styles for the page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        
        header {
            background-color: #333;
            padding: 20px;
            color: #fff;
        }
        
        h1, h2 {
            text-align: center;
        }
        
        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #333;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <header>
        <h1>Online Fishery Market</h1>
    </header>
    <h2>Manage Profile</h2>
    <form action="" method="post">
        Username: <input type="text" name="txtName"><br>
        Email Address: <input type="text" name="txtEmail"><br>
        Password: <input type="password" name="txtPassword"><br>
        <input type="submit" value="Update information" name="btnUpdate"><br>
        <br>
        <a href="userpage.php">Home</a>
    </form>
</body>
</html>
