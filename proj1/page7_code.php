<?php
session_start();
include('includes/dbcon.php');

if(isset($_POST['submit'])){
    $research_statement=$_POST['research_statement'];
    $teaching_statement=$_POST['teaching_statement'];
    $rel_in=$_POST['rel_in'];
    $prof_serv=$_POST['prof_serv'];
    $jour_details=$_POST['jour_details'];
    $conf_details=$_POST['conf_details'];

    $email=$_POST['email'];

    

        // Insert User/Registered User Data
        $query="INSERT INTO page7 (research_statement, teaching_statement, rel_in, prof_serv,jour_details,conf_details,email) VALUES('$research_statement','$teaching_statement','$rel_in','$prof_serv','$jour_details','$conf_details','$email')";
        
        $query_run=mysqli_query($con,$query);

        $_SESSION['page7_10']=[
            'research_statement' => $research_statement,
            'teaching_statement' => $teaching_statement,
            'rel_in' => $rel_in,
            'prof_serv' => $prof_serv,
            'jour_details' => $jour_details,
            'conf_details' => $conf_details,
            'email' => $email,
        ];

        if($query_run){
            header("Location: page8.php");
        }
        else{
            header("Location: page7.php");
        }



}
?>