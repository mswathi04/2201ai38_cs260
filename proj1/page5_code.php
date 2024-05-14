<?php
session_start();
include('includes/dbcon.php');

if(isset($_POST['submit'])){
    $mname=$_POST['mname'];
    $mstatus=$_POST['mstatus'];
    $email_1=$_POST['email_1'];

    foreach($mname as $key => $value){
        $query = "INSERT INTO page5_membership (mname,mstatus,email_1) VALUES ('$mname[$key]','$mstatus[$key]','$email_1[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $trg=$_POST['trg'];
    $porg=$_POST['porg'];
    $pyear=$_POST['pyear'];
    $pduration=$_POST['pduration'];
    $email_2=$_POST['email_2'];

    foreach($trg as $key => $value){
        $query = "INSERT INTO page5_prof_trg (trg,porg,pyear,pduration,email_2) VALUES ('$trg[$key]','$porg[$key]','$pyear[$key]','$ppduration[$key]','$email_2[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $award_nature=$_POST['award_nature'];
    $award_org=$_POST['award_org'];
    $award_year=$_POST['award_year'];
    $email_3=$_POST['email_3'];

    foreach($award_nature as $key => $value){
        $query = "INSERT INTO page5_award (award_nature,award_org,award_year,email_3) VALUES ('$award_nature[$key]','$award_org[$key]','$award_year[$key]','$email_3[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $agency=$_POST['agency'];
    $stitle=$_POST['stitle'];
    $samount=$_POST['samount'];
    $speriod=$_POST['speriod'];
    $s_role=$_POST['s_role'];
    $s_status=$_POST['s_status'];
    $email_4=$_POST['email_4'];

    foreach($agency as $key => $value){
        $query = "INSERT INTO page5_s_proj (agency,stitle,samount,speriod,s_role,s_status,email_4) VALUES ('$agency[$key]','$stitle[$key]','$samount[$key]','$speriod[$key]','$s_role[$key]','$s_status[$key]','$email_4[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $c_org=$_POST['c_org'];
    $ctitle=$_POST['ctitle'];
    $camount=$_POST['camount'];
    $cperiod=$_POST['cperiod'];
    $c_role=$_POST['c_role'];
    $c_status=$_POST['c_status'];
    $email_5=$_POST['email_5'];

    foreach($c_org as $key => $value){
        $query = "INSERT INTO page5_consultancy (c_org,ctitle,camount,cperiod,c_role,c_status,email_5) VALUES ('$c_org[$key]','$ctitle[$key]','$camount[$key]','$cperiod[$key]','$c_role[$key]','$c_status[$key]','$email_5[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $_SESSION['page5_10']=[
        'mname' => $mname,
        'mstatus' => $mstatus,
        'email_1' => $email_1,

        'trg' => $trg,
        'porg' => $porg,
        'pyear' => $pyear,
        'pduration' => $pduration,
        'email_2' => $email_2,

        'award_nature' => $award_nature,
        'award_org' => $award_org,
        'award_year' => $award_year,
        'email_3' => $email_3,

        'agency' => $agency,
        'stitle' => $stitle,
        'samount' => $samount,
        'speriod' => $speriod,
        's_role' => $s_role,
        's_status' => $s_status,
        'email_4' => $email_4,

        'c_org' => $c_org,
        'ctitle' => $ctitle,
        'camount' => $camount,
        'cperiod' => $cperiod,
        'c_role' => $c_role,
        'c_status' => $c_status,
        'email_5' => $email_5,
    ];

        if($query_run){
            header("Location: page6.php");
        }
        else{
            header("Location: page5.php");
        }



}
?>