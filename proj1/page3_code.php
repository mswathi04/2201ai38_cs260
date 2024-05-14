<?php
session_start();
include('includes/dbcon.php');

if(isset($_POST['submit'])){
    $pres_emp_position=$_POST['pres_emp_position'];
    $pres_emp_employer=$_POST['pres_emp_employer'];
    $pres_status=$_POST['pres_status'];
    $pres_emp_doj=$_POST['pres_emp_doj'];
    $pres_emp_dol=$_POST['pres_emp_dol'];
    $pres_emp_duration=$_POST['pres_emp_duration'];

    $position=$_POST['position'];
    $employer=$_POST['employer'];
    $doj=$_POST['doj'];
    $dol=$_POST['dol'];
    $exp_duration=$_POST['exp_duration'];
    $email_1=$_POST['email_1'];

    foreach($position as $key => $value){
        $query = "INSERT INTO page3_exp (position,employer,doj,dol,exp_duration,email_1) VALUES ('$position[$key]','$employer[$key]','$doj[$key]','$dol[$key]','$exp_duration[$key]','$email_1[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $te_position=$_POST['te_position'];
    $te_employer=$_POST['te_employer'];
    $te_course=$_POST['te_course'];
    $te_ug_pg=$_POST['te_ug_pg'];
    $te_no_stu=$_POST['te_no_stu'];
    $te_doj=$_POST['te_doj'];
    $te_dol=$_POST['te_dol'];
    $te_duration=$_POST['te_duration'];
    $email_2=$_POST['email_2'];

    foreach($te_position as $key => $value){
        $query = "INSERT INTO page3_t_exp (te_position,te_employer,te_course,te_ug_pg,te_no_stu,te_doj,te_dol,te_duration,email_2) VALUES ('$te_position[$key]','$te_employer[$key]','$te_course[$key]','$te_ug_pg[$key]','$te_no_stu[$key]','$te_doj[$key]','$te_dol[$key]','$te_duration[$key]','$email_2[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $r_exp_position=$_POST['r_exp_position'];
    $r_exp_institute=$_POST['r_exp_institute'];
    $r_exp_supervisor=$_POST['r_exp_supervisor'];
    $r_exp_doj=$_POST['r_exp_doj'];
    $r_exp_dol=$_POST['r_exp_dol'];
    $r_exp_duration=$_POST['r_exp_duration'];
    $email_3=$_POST['email_3'];

    foreach($r_exp_position as $key => $value){
        $query = "INSERT INTO page3_r_exp (r_exp_position,r_exp_institute,r_exp_supervisor,r_exp_doj,r_exp_dol,r_exp_duration,email_3) VALUES ('$r_exp_position[$key]','$r_exp_institute[$key]','$r_exp_supervisor[$key]','$r_exp_doj[$key]','$r_exp_dol[$key]','$r_exp_duration[$key]','$email_3[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $org=$_POST['org'];
    $work=$_POST['work'];
    $ind_doj=$_POST['ind_doj'];
    $ind_dol=$_POST['ind_dol'];
    $period=$_POST['period'];
    $email_4=$_POST['email_4'];

    foreach($org as $key => $value){
        $query = "INSERT INTO page3_ind_exp (org,work,ind_doj,ind_dol,period,email_4) VALUES ('$org[$key]','$work[$key]','$ind_doj[$key]','$ind_dol[$key]','$period[$key]','$email_4[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $area_spl=$_POST['area_spl'];
    $area_rese=$_POST['area_rese'];

    $email=$_POST['email'];
    
        // Insert User/Registered User Data
        $query="INSERT INTO page3 (pres_emp_position, pres_emp_employer, pres_status, pres_emp_doj,pres_emp_dol,pres_emp_duration, area_spl,area_rese,email) VALUES('$pres_emp_position','$pres_emp_employer','$pres_status','$pres_emp_doj','$pres_emp_dol','$pres_emp_duration','$area_spl','$area_rese','$email')";
        
        $query_run=mysqli_query($con,$query);

        $_SESSION['page3_10']=[
            'pres_emp_position' => $pres_emp_position,
            'pres_emp_employer' => $pres_emp_employer,
            'pres_status' => $pres_status,
            'pres_emp_doj' => $pres_emp_doj,
            'pres_emp_dol' => $pres_emp_dol,
            'pres_emp_duration' => $pres_emp_duration,

            'position' => $position,
            'employer' => $employer,
            'doj' => $doj,
            'dol' => $dol,
            'exp_duration' => $exp_duration,
            'email_1' => $email_1,

            'te_position' => $te_position,
            'te_employer' => $te_employer,
            'te_course' => $te_course,
            'te_ug_pg' => $te_ug_pg,
            'te_no_stu' => $te_no_stu,
            'te_doj' => $te_doj,
            'te_dol' => $te_dol,
            'te_duration' => $te_duration,
            'email_2' => $email_2,

            'r_exp_position' => $r_exp_position,
            'r_exp_institute' => $r_exp_institute,
            'r_exp_supervisor' => $r_exp_supervisor,
            'r_exp_doj' => $r_exp_doj,
            'r_exp_dol' => $r_exp_dol,
            'r_exp_duration' => $r_exp_duration,
            'email_3' => $email_3,

            'org' => $org,
            'work' => $work,
            'ind_doj' => $ind_doj,
            'ind_dol' => $ind_dol,
            'period' => $period,
            'email_4' => $email_4,

            'area_spl' => $area_spl,
            'area_rese' => $area_rese,
            'email' => $email,
        ];
        if($query_run){
            header("Location: page4.php");
        }
        else{
            header("Location: page3.php");
        }
}
?>