<!DOCTYPE html>
<html>
    <head>
        <title>LenderPage</title>
        <link rel="stylesheet" href="lender.css">
    </head>
    <body>
        <?php
            session_start();
            if($_SESSION['username']==false){
                header("location:login.php");
            }
        $conn=new mysqli('localhost','root','','rent') or die(mysqli_error($conn));
        ?>
    <div class="nav-bar">
            <div class="logo">HRental.</div>
            <ul class="list">
                <li ><a href="#">Home</a></li>
                <li ><a href="#">About Us</a></li>
                <li ><a href="#">Contact Us </a></li>
                <li><a href="#"><?php echo $_SESSION['username'];?> Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="info">
        <a href="Lender.php"><input type="submit" name="message" value="Message" class="input"></a>
        <a href="lenderupload.php"><input type="submit" name="message" value="Upload property" class="input"></a>
        <a href="viewproperty.php"><input type="submit" name="message" value="View property" class="input"></a>
        <a href="update.php"><input type="submit" name="message" value="Update property" class="input"></a>
        <a href="booked.php"><input type="submit" name="message" value="Booked property" class="input"></a>
        </div>
    </body>