<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>Rentals.com</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
       
        <div class="welcome">
            <h1>Welcome To HRentals.</h1>
        </div>
        <div class="container">
            <h2>User Register</h2>
            <div class="forms">
                <form action="register.php" method="post" class="register-form">
                    <div class="name-info">
                        <h3 style="align-items: baseline;margin-right: 10px;">Name</h3>
                        <input class="placeholder" type="text" name="firstname" placeholder="First name" required>
                        <input class="placeholder" type="text" name="lastname" placeholder="Last name" required style="margin-left: 10px;">
                    </div>

                    <div class="contact-info">
                        <h3 style="margin-right: 10px;">Email</h3>
                        <input class="placeholder" type="text" name="email" placeholder="Email" required>
                        <h3 style="margin-left: 15px; margin-right: 10px;">Phone</h3>
                        <input class="placeholder" type="text" name="phonenumber" placeholder="phone number" required>
                    </div>
                   
                    <div class="username-info" style="display: flex; align-items:baseline; margin-bottom: 15px;">
                        <h3 style="margin-right: 5px;">Username</h3>
                        <input class="placeholder" type="text" name="username" placeholder="Username" required>
                    </div>
                   
                    <div class="password-info">
                        <h3 style="margin-right: 10px;">Password</h3>
                        <input class="placeholder" type="password" name="newpassword" placeholder="Enter New Password" required style="margin-right: 20px ;">
                        <input class="placeholder" type="password" name="confirmpassword" placeholder="Confirm Password" required>
                    </div>
                    <br>
                    <div class="type" style="display: flex; align-items:baseline;">
                        <h3 style="margin-right: 10px;">User Type</h3>
                    <select name="usertype" class="type" style="border-radius: 10px; width:200px; height:30px;">
                        <option value="lesser" >Lesser</option>
                        <option value="lender" >Lender</option>
                    </select>
                    </div>
                   
                    <br>
                    <input class="button" type="submit" name="submit" value="Register">
                    
                </form>
            </div>
            <div class="already">
                <span>Already have an account? </span><a href="login.php">Login</a>
            </div>
        </div>
    </body>
</html>


<?php  
    $conn= new mysqli('localhost','root','','rent')or die("No Server");
    $firstname="";
    $lastname="";
    $email="";
    $phone="";
    $username="";
    $password="";
    $confirm="";
    $email_error="";
    $phone_error="";
    $username_error="";
    $password_error="";
    $confirm_error="";

    if(isset($_POST['submit'])){
        $check=true;
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $phone=$_POST['phonenumber'];
        $username=$_POST['username'];
        $password=$_POST['newpassword'];
        $confirm=$_POST['confirmpassword'];
        $usertype=$_POST['usertype'];

        if(strpos($email, '@')==false || strpos($email,'.com')==false){
            $email_error="INVALID EMAIL FORMAT";
            $check=false;
        }
        if(strlen($phone)<6 || is_numeric($phone)==false){
            $phone_error="INCORRECT PHONE FORMAT";
            $check=false;
        }
        if(strlen($username)>20){
            $username_error="LENGTH SHOULD BE LESSTHAN 20!!!!";
            $check=false;
        }
        if($password!=$confirm){
            $comfirm_error="PASSWORD DOSEN'T MATCH!!!";
            $check=false;
        }
        if(strlen($password)<6){
            $password_error="PASSWORD LENGTH SHOULD BE AT LEAST 6!!!!";
        }
        if($check){
            if($usertype=="lesser"){
                $sql="INSERT INTO  lesser_user(firstname, lastname, email, phone, username,`password`,usertype) values('$firstname','$lastname','$email','$phone','$username','$password','$usertype') ";
                $conn->query($sql);
                echo "ACCOUNT CREATED SUCCESFULLY, PROCEED TO LOGIN PAGE TO SIGN IN.";
            }
            if($usertype=="lender"){
                $sql="INSERT INTO  lender_user(firstname, lastname, email, phone, username, `password`,usertype) values('$firstname','$lastname','$email','$phone','$username','$password','$usertype') ";
                $conn->query($sql);
                echo "ACCOUNT CREATED SUCCESFULLY, PROCEED TO LOGIN PAGE TO SIGN IN.";

            }
            
        }


    }

?>