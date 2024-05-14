<?php
session_start();
include('includes/dbcon.php');

if(isset($_POST['login_now_btn']))
{
    if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password'])))
    {
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['password']);

        $login_query="SELECT * FROM signup WHERE email='$email' AND password='$password' Limit 1 ";
        $login_query_run=mysqli_query($con,$login_query);

        if(mysqli_num_rows($login_query_run)>0)
        {
            $row=mysqli_fetch_array($login_query_run);

            // echo $row['verify_token'];
            
            if($row['verify_status']=="1")
            {
                $_SESSION['authenticated']=TRUE;
                $_SESSION['auth_user']=[
                    'username' => $row['firstname'],
                    'email' => $row['email'],
                    'cast' => $row['cast'],
                ];
                $_SESSION['status'] = "You are logged in successfully";
                header("Location: page1.php");
                exit(0);
            }
            else
            {
                $_SESSION['status'] = "please verify your email address to login.";
                header("Location: index.php");
                exit(0);
            }
        }
        else
        {
            $_SESSION['status']="Invalid Email or Password";
            header("Location: index.php");
            exit(0);
        }
    }
    else
    {
        $_SESSION['status']="All fields are Mandetory";
        header("Location: index.php");
        exit(0);
    }
    $email=$_POST['email'];
    $password=$_POST['password'];
}

?>