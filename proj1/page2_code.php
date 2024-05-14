<?php
session_start();
include('includes/dbcon.php');

if(isset($_POST['submit'])){
    $college_phd=$_POST['college_phd'];
    $stream=$_POST['stream'];
    $supervisor=$_POST['supervisor'];
    $yoj_phd=$_POST['yoj_phd'];
    $dod_phd=$_POST['dod_phd'];
    $doa_phd=$_POST['doa_phd'];
    $phd_title=$_POST['phd_title'];

    $pg_degree=$_POST['pg_degree'];
    $pg_college=$_POST['pg_college'];
    $pg_subjects=$_POST['pg_subjects'];
    $pg_yoj=$_POST['pg_yoj'];
    $pg_yog=$_POST['pg_yog'];
    $pg_duration=$_POST['pg_duration'];
    $pg_perce=$_POST['pg_perce'];
    $pg_rank=$_POST['pg_rank'];

    $ug_degree=$_POST['ug_degree'];
    $ug_college=$_POST['ug_college'];
    $ug_subjects=$_POST['ug_subjects'];
    $ug_yoj=$_POST['ug_yoj'];
    $ug_yog=$_POST['ug_yog'];
    $ug_duration=$_POST['ug_duration'];
    $ug_perce=$_POST['ug_perce'];
    $ug_rank=$_POST['ug_rank'];

    $email_3=$_POST['email_3'];

    $hsc_ssc=$_POST['hsc_ssc'];
    $school=$_POST['school'];
    $passing_year=$_POST['passing_year'];
    $s_perce=$_POST['s_perce'];
    $s_rank=$_POST['s_rank'];
    $email=$_POST['email'];

    foreach($hsc_ssc as $key => $value){
        $query = "INSERT INTO page2_school (hsc_ssc,school,passing_year,s_perce,s_rank,email) VALUES ('$hsc_ssc[$key]','$school[$key]','$passing_year[$key]','$s_perce[$key]','$s_rank[$key]','$email[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $add_degree=$_POST['add_degree'];
    $add_college=$_POST['add_college'];
    $add_subjects=$_POST['add_subjects'];
    $add_yoj=$_POST['add_yoj'];
    $add_yog=$_POST['add_yog'];
    $add_duration=$_POST['add_duration'];
    $add_perce=$_POST['add_perce'];
    $add_rank=$_POST['add_rank'];
    $email_2=$_POST['email_2'];

    foreach($add_degree as $key => $value){
        $query = "INSERT INTO page2_edu` (add_degree,add_college,add_subjects,add_yoj,add_yog,add_duration,add_perce,add_rank,email_2) VALUES ('$add_degree[$key]','$add_college[$key]','$add_subjects[$key]','$add_yoj[$key]','$add_yog[$key]','$add_duration[$key]','$add_perce[$key]','$add_rank[$key]','$email_2[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    

        // Insert User/Registered User Data
        $query="INSERT INTO page2`(college_phd, stream, supervisor, yoj_phd,dod_phd,doa_phd, phd_title,pg_degree,pg_college,pg_subjects,pg_yoj,pg_yog,pg_duration,pg_perce,pg_rank,ug_degree,ug_college,ug_subjects,ug_yoj,ug_yog,ug_duration,ug_perce,ug_rank,email_3) VALUES('$college_phd','$stream','$supervisor','$yoj_phd','$dod_phd','$doa_phd','$phd_title','$pg_degree','$pg_college','$pg_subjects','$pg_yoj','$pg_yog','$pg_duration','$pg_perce','$pg_rank','$ug_degree','$ug_college','$ug_subjects','$ug_yoj','$ug_yog','$ug_duration','$ug_perce','$ug_rank','$email_3')";
        
        $query_run=mysqli_query($con,$query);
    

                $_SESSION['page2_10']=[
                    'college_phd' => $college_phd,
                    'stream' => $stream,
                    'supervisor' => $supervisor,
                    'yoj_phd' => $yoj_phd,
                    'dod_phd' => $dod_phd,
                    'doa_phd' => $doa_phd,
                    'phd_title' => $phd_title,

                    'pg_degree' => $pg_degree,
                    'pg_college' => $pg_college,
                    'pg_subjects' => $pg_subjects,
                    'pg_yoj' => $pg_yoj,
                    'pg_yog' => $pg_yog,
                    'pg_duration' => $pg_duration,
                    'pg_perce' => $pg_perce,
                    'pg_rank' => $pg_rank,

                    'ug_degree' => $ug_degree,
                    'ug_college' => $ug_college,
                    'ug_subjects' => $ug_subjects,
                    'ug_yoj' => $ug_yoj,
                    'ug_yog' => $ug_yog,
                    'ug_duration' => $ug_duration,
                    'ug_perce' => $ug_perce,
                    'ug_rank' => $ug_rank,

                    'email_3' => $email_3,
                ];
        
        $_SESSION['page2_school_10']=[
            'hsc_ssc' => $hsc_ssc,
            'school' => $school,
            'passing_year' => $passing_year,
            's_perce' => $s_perce,
            's_rank' => $s_rank,
            'email' => $email,
        ];


        $_SESSION['page2_edu_10']=[
            'add_degree' => $add_degree,
            'add_college' => $add_college,
            'add_subjects' => $add_subjects,
            'add_yoj' => $add_yoj,
            'add_yog' => $add_yog,
            'add_duration' => $add_duration,
            'add_perce' => $add_perce,
            'add_rank' => $add_rank,
            'email_2' => $email_2,
        ];
        header("Location: page3.php");
        exit(0);
}
?>