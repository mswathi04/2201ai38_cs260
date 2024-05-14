<?php
session_start();
include('includes/dbcon.php');

if(isset($_POST['submit'])){
    $adv_num=$_POST['adv_num'];
    $doa=$_POST['doa'];
    $ref_num=$_POST['ref_num'];
    $post=$_POST['post'];
    $dept=$_POST['dept'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $nationality=$_POST['nationality'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $mstatus=$_POST['mstatus'];
    $cast=$_POST['cast'];
    $id_proof=$_POST['id_proof'];
    $father_name=$_POST['father_name'];
    $cadd=$_POST['cadd'];
    $cadd1=$_POST['cadd1'];
    $cadd2=$_POST['cadd2'];
    $cadd3=$_POST['cadd3'];
    $cadd4=$_POST['cadd4'];
    $padd=$_POST['padd'];
    $padd1=$_POST['padd1'];
    $padd2=$_POST['padd2'];
    $padd3=$_POST['padd3'];
    $padd4=$_POST['padd4'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $mobile_2=$_POST['mobile_2'];
    $email_2=$_POST['email_2'];
    $landline=$_POST['landline'];

    $userfile1=$_FILES['userfile1']['name'];
    $tempname1=$_FILES['userfile1']['tmp_name'];
    $folder1="uploads/".$userfile1;
    
    $userfile2=$_FILES['userfile2']['name'];
    $tempname2=$_FILES['userfile2']['tmp_name'];
    $folder2="uploads/".$userfile2;
    
    $userfile=$_FILES['userfile']['name'];
    $tempname=$_FILES['userfile']['tmp_name'];
    $folder="uploads/".$userfile;

    if(move_uploaded_file($tempname1,$folder1) && move_uploaded_file($tempname2,$folder2) && move_uploaded_file($tempname,$folder)){
        // Insert User/Registered User Data
        $query="INSERT INTO page1(adv_num, doa, ref_num, post,dept,fname, mname,lname,nationality,dob,gender,mstatus,cast,id_proof,father_name,cadd,cadd1,cadd2,cadd3,cadd4,padd,padd1,padd2,padd3,padd4,mobile,email,mobile_2,email_2,landline,userfile1,userfile2,userfile) VALUES('$adv_num','$doa','$ref_num','$post','$dept','$fname','$mname','$lname','$nationality','$dob','$gender','$mstatus','$cast','$id_proof','$father_name','$cadd','$cadd1','$cadd2','$cadd3','$cadd4','$padd','$padd1','$padd2','$padd3','$padd4','$mobile','$email','$mobile_2','$email_2','$landline','$userfile1','$userfile2','$userfile')";
        $query_run=mysqli_query($con,$query);
    }
    else{
        header("Location: page1.php");
    }

    $login_query="SELECT * FROM page1 WHERE email='$email' Limit 1 ";
    $login_query_run=mysqli_query($con,$login_query);

    if(mysqli_num_rows($login_query_run)>0)
    {
        $row=mysqli_fetch_array($login_query_run);

        // echo $row['verify_token'];
        if($row['fname']==$fname){
            $_SESSION['page1_10']=[
                'adv_num' => $row['adv_num'],
                'doa' => $row['doa'],
                'ref_num' => $row['ref_num'],
                'post' => $row['post'],
                'dept' => $row['dept'],
                'fname' => $row['fname'],
                'mname' => $row['mname'],
                'lname' => $row['lname'],
                'nationality' => $row['nationality'],
                'dob' => $row['dob'],
                'gender' => $row['gender'],
                'mstatus' => $row['mstatus'],
                'cast' => $row['cast'],
                'id_proof' => $row['id_proof'],
                'father_name' => $row['father_name'],
                'cadd' => $row['cadd'],
                'cadd1' => $row['cadd1'],
                'cadd2' => $row['cadd2'],
                'cadd3' => $row['cadd3'],
                'cadd4' => $row['cadd4'],
                'padd' => $row['padd'],
                'padd1' => $row['padd1'],
                'padd2' => $row['padd2'],
                'padd3' => $row['padd3'],
                'padd4' => $row['padd4'],
                'mobile' => $row['mobile'],
                'email' => $row['email'],
                'mobile_2' => $row['mobile_2'],
                'email_2' => $row['email_2'],
                'landline' => $row['landline'],
                'userfile1' => $row['userfile1'],
                'userfile2' => $row['userfile2'],
                'userfile' => $row['userfile'],
            ];
            header("Location: page2.php");
            exit(0);
        }
    }
}

if(isset($_POST['change_password']))
{
    $email = mysqli_real_escape_string($con,$_POST['email_id']);
    $password=mysqli_real_escape_string($con,$_POST['cr_password']);
    $new_password = mysqli_real_escape_string($con,$_POST['n_password']);
    $confirm_password = mysqli_real_escape_string($con,$_POST['cn_password']);

        if(!empty($new_password) && !empty($confirm_password))
        {
            $login_query="SELECT * FROM signup WHERE email='$email' AND password='$password' Limit 1 ";
            $login_query_run=mysqli_query($con,$login_query);

            if(mysqli_num_rows($login_query_run)>0)
            {
                $row=mysqli_fetch_array($login_query_run);

                if($new_password == $confirm_password)
                {
                    $update_password="UPDATE signup SET password='$new_password', re_password='$new_password' WHERE email='$email' LIMIT 1";
                    $update_password_run = mysqli_query($con,$update_password);

                    if($update_password_run)
                    {
                        $_SESSION['status'] = "Password Changed Successfully. Please Login to the Portal";
                        header("Location: page1.php");
                        exit(0);
                    }
                    else
                    {
                        $_SESSION['status']="Did not update password something went wrong.!";
                        header("Location: page1.php");
                        exit(0);
                    }
                }
                else
                {
                    $_SESSION['status']="Password and Confirm Password does not match";
                    header("Location: page1.php");
                    exit(0);
                }
        }
        else
        {
            $_SESSION['status']="All Fields are Mandetory";
            header("Location: page1.php");
            exit(0);
        }
    }
    else
    {
        $_SESSION['status']="Invalid Password";
        header("Location: page1.php");
        exit(0);
    }
}
?>