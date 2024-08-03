<!DOCTYPE html>
<html lang="eng">
    <head>
       
        <title>Rentals.com</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <?php
            session_start();
            session_destroy();
        ?>
        <div class="welcome">
            <h1>Welcome To HRentals.</h1>
        </div>
        <div class="container">
            <h2>User Login</h2>
            <div class="forms">
                <form action="check.php" method="post" class="login-form">
                    <h3>UserName</h3>
                    <input class="placeholder" type="text" name="username" placeholder="Enter Username" required>
                    <h3>Password</h3>
                    <input class="placeholder" type="password" name="password" placeholder="Enter Password" required><br>
                    <div class="type">
                        <h3 style="margin-right: 10px;">User Type</h3>
                    <select name="usertype" class="type" style="border-radius: 10px; width:100%; height:30px;">
                        <option value="lesser" >Lesser</option>
                        <option value="lender" >Lender</option>
                    </select>
                    </div>
                    <br>
                    <input class="button" type="submit" name="submit" value="Login">
                </form>
            </div>
            <div class="donot">
                <span>Don't have an account? </span><a href="register.php">Register</a>
            </div>
        </div>
        
    </body>
</html>