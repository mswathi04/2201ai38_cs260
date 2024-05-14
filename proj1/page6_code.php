<?php
session_start();
include('includes/dbcon.php');

if(isset($_POST['submit'])){
    $phd_scholar=$_POST['phd_scholar'];
    $phd_thesis=$_POST['phd_thesis'];
    $phd_role=$_POST['phd_role'];
    $phd_ths_status=$_POST['phd_ths_status'];
    $phd_ths_year=$_POST['phd_ths_year'];
    $email_1=$_POST['email_1'];

    foreach($phd_scholar as $key => $value){
        $query = "INSERT INTO page6_thesis_sup (phd_scholar,phd_thesis,phd_role,phd_ths_status,phd_ths_year,email_1) VALUES ('$phd_scholar[$key]','$phd_thesis[$key]','$phd_role[$key]','$phd_ths_status[$key]','$phd_ths_year[$key]','$email_1[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $pg_scholar=$_POST['pg_scholar'];
    $pg_thesis=$_POST['pg_thesis'];
    $pg_role=$_POST['pg_role'];
    $pg_status=$_POST['pg_status'];
    $pg_ths_year=$_POST['pg_ths_year'];
    $email_2=$_POST['email_2'];

    foreach($pg_scholar as $key => $value){
        $query = "INSERT INTO page6_pg_thesis_sup (pg_scholar,pg_thesis,pg_role,pg_status,pg_ths_year,email_2) VALUES ('$pg_scholar[$key]','$pg_thesis[$key]','$pg_role[$key]','$pg_status[$key]','$pg_ths_year[$key]','$email_2[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $ug_scholar=$_POST['ug_scholar'];
    $ug_thesis=$_POST['ug_thesis'];
    $ug_role=$_POST['ug_role'];
    $ug_status=$_POST['ug_status'];
    $ug_ths_year=$_POST['ug_ths_year'];
    $email_3=$_POST['email_3'];

    foreach($ug_scholar as $key => $value){
        $query = "INSERT INTO page6_ug_thesis_sup (ug_scholar,ug_thesis,ug_role,ug_status,ug_ths_year,email_3) VALUES ('$ug_scholar[$key]','$ug_thesis[$key]','$ug_role[$key]','$ug_status[$key]','$ug_ths_year[$key]','$email_3[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $_SESSION['page6_10']=[
        'phd_scholar' => $phd_scholar,
        'phd_thesis' => $phd_thesis,
        'phd_role' => $phd_role,
        'phd_ths_status' => $phd_ths_status,
        'phd_ths_year' => $phd_ths_year,
        'email_1' => $email_1,

        'pg_scholar' => $pg_scholar,
        'pg_thesis' => $pg_thesis,
        'pg_role' => $pg_role,
        'pg_status' => $pg_status,
        'pg_ths_year' => $pg_ths_year,
        'email_2' => $email_2,

        'ug_scholar' => $ug_scholar,
        'ug_thesis' => $ug_thesis,
        'ug_role' => $ug_role,
        'ug_status' => $ug_status,
        'ug_ths_year' => $ug_ths_year,
        'email_3' => $email_3,
    ];

        if($query_run){
            header("Location: page7.php");
        }
        else{
            header("Location: page6.php");
        }



}
?>