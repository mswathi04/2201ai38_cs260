<?php
session_start();
include('includes/dbcon.php'); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendmail_verfy($name,$email,$verify_token){
    $mail = new PHPMailer(true);
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->SMTPAuth   = true; 

    $mail->Host       = 'smtp.gmail.com';                     
    $mail->Username   = 'swathi.m6879@gmail.com';                     
    $mail->Password   = 'rlmv rcdq okyu avtl';   

    $mail->SMTPSecure = "tls";            
    $mail->Port       = 587;                                    

    $mail->setFrom('swathi.m6879@gmail.com', $name);  
    $mail->addAddress($email);         

    $mail->isHTML(true);                                 
    $mail->Subject = "Activation Link for Online Registration for Faculty Application - IIT Patna";

    $email_template="
    <p>This is a system generated mail. Please do not reply to this email ID.</p>
    <br><br>
    <p><b>Dear $name</b></p>
    <br>
    <p><b>you have successfully Registered in the portal.</b></p>
    <br/><br/>
    <a href='http://localhost/verify_email.php?token=$verify_token'>Click here to activate your credentials </a>;
    ";

    $mail->Body    = $email_template;
    $mail->send();
    echo 'Message has been sent';
}

if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $cast=$_POST['cast'];
    $password=$_POST['password'];
    $re_password=$_POST['re_password'];
    $verify_token=md5(rand());
    $_SESSION['user_captcha_code']=$_POST['captcha'];
    $_SESSION['first_n']=$_POST['firstname'];
    $_SESSION['last_n']=$_POST['lastname'];

    // Email Exists or not
    $check_email_query="SELECT email FROM signup WHERE email='$email' LIMIT 1";
    $check_email_query_run=mysqli_query($con,$check_email_query);

    if($password!=$re_password){
        $_SESSION['password_not_match']="passwords doesnot match";
        header("Location: register.php");
    }
    else if(mysqli_num_rows($check_email_query_run)>0){
        $session['email_not_exist']="Email Id alredy exist";
        header("Location: register.php");
    }
    else{
        // Insert User/Registered User Data
        $query="INSERT INTO signup (firstname, lastname, email, cast,password,re_password, verify_token) VALUES('$firstname','$lastname','$email','$cast','$password','$re_password','$verify_token')";
        $query_run=mysqli_query($con,$query);

        if($query_run){
            sendmail_verfy("$firstname","$email","$verify_token");
            $_SESSION['status']="Registration Successfull. ! Please verify your Email Address.";
            header("Location: index.php");
        }
        else{
            $_SESSION['status']="Registration Failed";
            header("Location: register.php");
        }
    }
}
?>