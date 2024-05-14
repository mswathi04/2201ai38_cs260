<?php
session_start();
include('includes/dbcon.php');

if(isset($_POST['preview'])){

    $decl_status=$_POST['decl_status'];

    $email=$_POST['email'];

    

        // Insert User/Registered User Data
        $query="INSERT INTO page9 (decl_status,email) VALUES('$decl_status','$email')";
        
        $query_run=mysqli_query($con,$query);

        if($query_run){
            header("Location: page10.php");
        }
        else{
            header("Location: page9.php");
        }



}
?>