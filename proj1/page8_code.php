<?php
session_start();
include('includes/dbcon.php');

if(isset($_POST['submit'])){
    $email=$_POST['email'];

    $userfile7=$_FILES['userfile7']['name'];
    $tempname7=$_FILES['userfile7']['tmp_name'];
    $folder7="uploads/".$userfile7;

    $userfile=$_FILES['userfile']['name'];
    $tempname=$_FILES['userfile']['tmp_name'];
    $folder="uploads/".$userfile;
    
    $userfile1=$_FILES['userfile1']['name'];
    $tempname1=$_FILES['userfile1']['tmp_name'];
    $folder1="uploads/".$userfile1;

    $userfile2=$_FILES['userfile2']['name'];
    $tempname2=$_FILES['userfile2']['tmp_name'];
    $folder2="uploads/".$userfile2;

    $userfile3=$_FILES['userfile3']['name'];
    $tempname3=$_FILES['userfile3']['tmp_name'];
    $folder3="uploads/".$userfile3;

    $userfile4=$_FILES['userfile4']['name'];
    $tempname4=$_FILES['userfile4']['tmp_name'];
    $folder4="uploads/".$userfile4;

    $userfile9=$_FILES['userfile9']['name'];
    $tempname9=$_FILES['userfile9']['tmp_name'];
    $folder9="uploads/".$userfile9;

    $userfile10=$_FILES['userfile10']['name'];
    $tempname10=$_FILES['userfile10']['tmp_name'];
    $folder10="uploads/".$userfile10;

    $userfile8=$_FILES['userfile8']['name'];
    $tempname8=$_FILES['userfile8']['tmp_name'];
    $folder8="uploads/".$userfile8;

    $userfile6=$_FILES['userfile6']['name'];
    $tempname6=$_FILES['userfile6']['tmp_name'];
    $folder6="uploads/".$userfile6;

    $userfile5=$_FILES['userfile5']['name'];
    $tempname5=$_FILES['userfile5']['tmp_name'];
    $folder5="uploads/".$userfile5;

    if(move_uploaded_file($tempname1,$folder1) && move_uploaded_file($tempname2,$folder2) && move_uploaded_file($tempname,$folder) && move_uploaded_file($tempname3,$folder3) && move_uploaded_file($tempname4,$folder4) && move_uploaded_file($tempname5,$folder5) && move_uploaded_file($tempname6,$folder6) && move_uploaded_file($tempname7,$folder7) && move_uploaded_file($tempname8,$folder8) && move_uploaded_file($tempname9,$folder9) && move_uploaded_file($tempname10,$folder10)){
        // Insert User/Registered User Data
        $query="INSERT INTO page8 (email,userfile7,userfile,userfile1,userfile2,userfile3,userfile4,userfile9,userfile10,userfile8,userfile6,userfile5) VALUES('$email','$userfile7','$userfile','$userfile1','$userfile2','$userfile3','$userfile4','$userfile9','$userfile10','$userfile8','$userfile6','$userfile5')";
        $query_run=mysqli_query($con,$query);
    }
    else{
        header("Location: page8.php");
    }

    $ref_name=$_POST['ref_name'];
    $position=$_POST['position'];
    $association_referee=$_POST['association_referee'];
    $org=$_POST['org'];
    $email_2=$_POST['email_2'];
    $phone=$_POST['phone'];

    foreach($ref_name as $key => $value){
        $query = "INSERT INTO page8_ref  (ref_name,position,association_referee,org,email_2,phone) VALUES ('$ref_name[$key]','$position[$key]','$association_referee[$key]','$org[$key]','$email_2[$key]','$phone[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $_SESSION['page8_10']=[
        'userfile' => $userfile,
        'userfile1' => $userfile1,
        'userfile2' => $userfile2,
        'userfile3' => $userfile3,
        'userfile4' => $userfile4,
        'userfile5' => $userfile5,
        'userfile6' => $userfile6,
        'userfile7' => $userfile7,
        'userfile8' => $userfile8,
        'userfile9' => $userfile9,
        'userfile10' => $userfile10,
        'ref_name' => $ref_name,
        'position' => $position,
        'association_referee' => $association_referee,
        'org' => $org,
        'email_2' => $email_2,
        'phone' => $phone,
    ];

    if($query_run){
        header("Location: page9.php");
    }
    else{
        header("Location: page8.php");
    }
}
?>