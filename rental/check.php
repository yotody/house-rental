<?php
    session_start();
    $conn=new mysqli('localhost','root','','rent') or die("NO SERVER");

    if(isset($_POST['submit'])){

        $username=$_POST['username'];
        $password=$_POST['password'];
        $usertype=$_POST['usertype'];

        if($usertype=="lesser"){
            $sql="SELECT *FROM `lesser_user` where `username`='$username' and `password`='$password'";
            $result= $conn->query($sql);
    
            if($result-> num_rows >0){
                $_SESSION['username']=$username;
                header("location:home.php");
            }
            else{
                $_SESSION['username']=1;
                header("location:incorrect.php");
                }
            }
        }

        if($usertype=="lender"){
            $sql="SELECT *FROM `lender_user` where `username`='$username' and `password`='$password'";
            $result=$conn->query($sql);

            if($result-> num_rows>0){
                $_SESSION['username']=$username;
                header("location:Lender.php");
            }
            else{
                header("location:incorrect.php");
            }
        }
?>