<?php
session_start();
include('includes/dbcon.php');

if(isset($_POST['submit'])){
    $summary_journal_inter=$_POST['summary_journal_inter'];
    $summary_journal=$_POST['summary_journal'];
    $summary_conf_inter=$_POST['summary_conf_inter'];
    $summary_conf_national=$_POST['summary_conf_national'];
    $patent_publish=$_POST['patent_publish'];
    $summary_book=$_POST['summary_book'];
    $summary_book_chapter=$_POST['summary_book_chapter'];

    $author=$_POST['author'];
    $title=$_POST['title'];
    $journal=$_POST['journal'];
    $year=$_POST['year'];
    $impact=$_POST['impact'];
    $doi=$_POST['doi'];
    $status=$_POST['status'];
    $email_1=$_POST['email_1'];

    foreach($author as $key => $value){
        $query = "INSERT INTO page4_jour (author,title,journal,year,impact,doi,status,email_1) VALUES ('$author[$key]','$title[$key]','$journal[$key]','$year[$key]','$impact[$key]','$doi[$key]','$status[$key]','$email_1[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $pauthor=$_POST['pauthor'];
    $ptitle=$_POST['ptitle'];
    $p_country=$_POST['p_country'];
    $p_number=$_POST['p_number'];
    $pyear_filed=$_POST['pyear_filed'];
    $pyear_published=$_POST['pyear_published'];
    $pyear_issued=$_POST['pyear_issued'];
    $email_2=$_POST['email_2'];

    foreach($pauthor as $key => $value){
        $query = "INSERT INTO page4_patent (pauthor,ptitle,p_country,p_number,pyear_filed,pyear_published,pyear_issued,email_2) VALUES ('$pauthor[$key]','$ptitle[$key]','$p_country[$key]','$p_number[$key]','$pyear_filed[$key]','$pyear_published[$key]','$pyear_issued[$key]','$email_2[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $bauthor=$_POST['bauthor'];
    $btitle=$_POST['btitle'];
    $byear=$_POST['byear'];
    $bisbn=$_POST['bisbn'];
    $email_3=$_POST['email_3'];

    foreach($bauthor as $key => $value){
        $query = "INSERT INTO page4_book (bauthor,btitle,byear,bisbn,email_3) VALUES ('$bauthor[$key]','$btitle[$key]','$byear[$key]','$bisbn[$key]','$email_3[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $bc_author=$_POST['bc_author'];
    $bc_title=$_POST['bc_title'];
    $bc_year=$_POST['bc_year'];
    $bc_isbn=$_POST['bc_isbn'];
    $email_4=$_POST['email_4'];

    foreach($bc_author as $key => $value){
        $query = "INSERT INTO page4_book_chapter (bc_author,bc_title,bc_year,bc_isbn,email_4) VALUES ('$bc_author[$key]','$bc_title[$key]','$bc_year[$key]','$bc_isbn[$key]','$email_4[$key]')";
        $query_run=mysqli_query($con,$query);
    }

    $google_link=$_POST['google_link'];

    $email=$_POST['email'];

    

        // Insert User/Registered User Data
        $query="INSERT INTO page4 (summary_journal_inter, summary_journal, summary_conf_inter, summary_conf_national,patent_publish,summary_book, summary_book_chapter,google_link,email) VALUES('$summary_journal_inter','$summary_journal','$summary_conf_inter','$summary_conf_national','$patent_publish','$summary_book','$summary_book_chapter','$google_link','$email')";
        
        $query_run=mysqli_query($con,$query);



        $_SESSION['page4_10']=[
            'summary_journal_inter' => $summary_journal_inter,
            'summary_journal' => $summary_journal,
            'summary_conf_inter' => $summary_conf_inter,
            'summary_conf_national' => $summary_conf_national,
            'patent_publish' => $patent_publish,
            'summary_book' => $summary_book,
            'summary_book_chapter' => $summary_book_chapter,

            'author' => $author,
            'title' => $title,
            'journal' => $journal,
            'year' => $year,
            'impact' => $impact,
            'doi' => $doi,
            'status' => $status,
            'email_1' => $email_1,

            'pauthor' => $pauthor,
            'ptitle' => $ptitle,
            'p_country' => $p_country,
            'p_number' => $p_number,
            'pyear_filed' => $pyear_filed,
            'pyear_published' => $pyear_published,
            'pyear_issued' => $pyear_issued,
            'email_2' => $email_2,

            'bauthor' => $bauthor,
            'btitle' => $btitle,
            'byear' => $byear,
            'bisbn' => $bisbn,
            'email_3' => $email_3,

            'bc_author' => $bc_author,
            'bc_title' => $bc_title,
            'bc_year' => $bc_year,
            'bc_isbn' => $bc_isbn,
            'email_4' => $email_4,

            'google_link' => $google_link,
            'email' => $email,
        ];


        if($query_run){
            header("Location: page5.php");
        }
        else{
            header("Location: page4.php");
        }



}
?>