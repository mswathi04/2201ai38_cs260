<?php
session_start();
?>
<html>

<head>
    <title></title>
    <style type="text/css">
        @page {
            margin: 0.5in 0.5in 0.5in 0.5in;
        }

        .receipt {
            margin: 0 auto 1in auto;
            /*font-family:"verdana",monospace;*/
            border: solid #000;
            padding: 0 0.25in;
            width: 10in;
            min-height: 2.5in;
            height: auto;
            /*page-break-inside:avoid;
	        page-break-before:auto;
	        page-break-after:auto;*/
            /*word-wrap: break-word;*/
        }

        /* .receipt div, .receipt p, .receipt span {
	        page-break-before:avoid;
	        page-break-after:avoid;
	    } */

        .receipt div {
            margin: 0;
            margin-bottom: 0.1in;
            padding: 0;
            /*word-wrap: break-word;*/
            /*background-color: green;*/


        }

        .receipt span {
            display: inline-block;
            line-height: 2;
        }

        .receipt p,
        .receipt span {
            margin: 0;
            padding: 0;


        }

        .title {
            font-family: Arial, sans-serif;
            font-size: 1.5em;
            color: #a40a0b;
            font-weight: bold;
            width: 100%;
        }

        .label {
            font-weight: bold;
            color: #a40a0b;
            background-color: #f1f1d1;
            margin-bottom: 10px !important;
            padding-left: 5px !important;
            padding-right: 5px !important;
            border-radius: 5px;
            font-size: 1.1em;
        }

        .date,
        .payee,
        .phone,
        .signature {
            border-bottom: solid thin #444;
        }

        .payee,
        .signature {
            width: 2in;
        }

        .phone,
        .date {
            width: 1.25in;
        }

        .amount,
        .payer {
            font-style: italic;
            text-decoration: underline;
        }

        .tab {
            border-collapse: collapse;
            width: 100%;
            /*word-break: break-all;
	    	word-wrap: break-word;*/

            /*background-color: green;*/
            /*word-wrap: break-word!important;*/

            /*white-space: pre-line!important;*/
            /*overflow:auto!important;*/
        }

        .tab td {
            border: 1px solid #CCC !important;
            padding-left: 10px;
            /*background-color:#DDFFFF;*/

            word-wrap: break-word !important;
            /*white-space: pre-line!important;*/
            /*overflow:auto!important;*/
            /*background-color: red;*/

        }

        .receipt_left {
            float: left;
            width: 5.5in;
            /*word-wrap: break-word;*/
        }

        .receipt_right {
            float: right;
            width: 1.5in;
            /*word-wrap: break-word;*/
        }

        .receipt_left1 {
            float: left;
            width: 4.5in;
            /*word-wrap: break-word;*/
        }

        .receipt_right1 {
            float: right;
            width: 4.5in;
            /*word-wrap: break-word;*/
        }

        .receipt_right img {
            height: 1in;
            width: 0.8in;
            padding: 2px;
            border: 1px solid #CCC;
        }

        .receipt_center {
            /*float: left;*/
            width: auto;
            height: 120px;
            /*word-wrap: break-word;*/
        }

        th {
            text-align: left;
        }

        .tr_title {
            color: #0a5398;
        }
    </style>
</head>

<body style="font-family:Arial,sans-serif;">

    <div class="receipt">
        <div class="receipt_center">
            <img src="images/logo.png" style="height: 85px; float: left;" />
            <p style="text-align: center; font-size: 1.7em;">भारतीय प्रौद्योगिकी संस्थान पटना <br />Indian Institute of Technology Patna</p>
            <p style="text-align: center; margin-top: 10px; background-color: #175395; line-height: 25px; color: #FFF; font-weight: bold;">Application for the Faculty Position</p>
        </div>
        <hr>
        <div class="title"><?= $_SESSION['page1_10']['fname']; ?> <?= $_SESSION['page1_10']['mname']; ?> <?= $_SESSION['page1_10']['lname']; ?></div>
        <div class="receipt_left">
            <p style="width:10in;">Advertisement Number : IITI/FACREC-CHE/2023/JULY/02</p>
            <p>Date of Application : <?= $_SESSION['page1_10']['doa']; ?></p>
            <p>Post Applied for : <?= $_SESSION['page1_10']['post']; ?></p>
            <p>Department : Chemical Engineering</p>
            <p>Application Number : <?= $_SESSION['page1_10']['ref_num']; ?></p>

        </div>
        <div class="receipt_right" style="margin-top: -30px;">

            <img src="<?="uploads/" . $_SESSION['page1_10']['userfile']?>" />

        </div>
        <div style="clear:both"></div>
        <div>
            <span class="label">1. Personal Details</span>

            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td><strong class="tr_title">First Name</strong></td>
                    <td><strong class="tr_title">Middle Name</strong></td>
                    <td><strong class="tr_title">Last Name</strong></td>
                </tr>
                <tr>
                    <td><?= $_SESSION['page1_10']['fname']; ?></td>
                    <td><?= $_SESSION['page1_10']['mname']; ?></td>
                    <td><?= $_SESSION['page1_10']['lname']; ?></td>
                </tr>
            </table>
            <br />


            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td><strong class="tr_title">Date of Birth</strong></td>
                    <!-- <td><strong class="tr_title">Age</strong></td> -->
                    <td><strong class="tr_title">Gender</strong></td>
                    <td><strong class="tr_title">Marital Status</strong></td>
                    <td><strong class="tr_title">Category</strong></td>
                    <td><strong class="tr_title">Nationality</strong></td>
                    <td><strong class="tr_title">ID Proof</strong></td>

                </tr>
                <tr>
                    <td><?= $_SESSION['page1_10']['dob']; ?></td>
                    <!-- <td></td> -->
                    <td><?= $_SESSION['page1_10']['gender']; ?></td>
                    <td><?= $_SESSION['page1_10']['mstatus']; ?></td>
                    <td><?= $_SESSION['page1_10']['cast']; ?></td>
                    <td><?= $_SESSION['page1_10']['nationality']; ?></td>
                    <td><?= $_SESSION['page1_10']['id_proof']; ?></td>
                </tr>
                <tr>
                    <td><strong>Father's Name</strong></td>
                    <td colspan="6"><?= $_SESSION['page1_10']['father_name']; ?></td>

                </tr>
            </table>
            <br />

            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td width="50%"><strong class="tr_title">Current Address </strong></td>
                    <td width="50%"><strong class="tr_title">Permanent Address </strong></td>

                </tr>

                <tr>
                    <td><?= $_SESSION['page1_10']['cadd']; ?></td>
                    <td><?= $_SESSION['page1_10']['padd']; ?></td>

                </tr>
                <tr>
                    <td><?= $_SESSION['page1_10']['cadd1']; ?></td>
                    <td><?= $_SESSION['page1_10']['padd1']; ?></td>

                </tr>
                <tr>
                    <td><?= $_SESSION['page1_10']['cadd2']; ?></td>
                    <td><?= $_SESSION['page1_10']['padd2']; ?></td>

                </tr>
                <tr>
                    <td><?= $_SESSION['page1_10']['cadd3']; ?></td>
                    <td><?= $_SESSION['page1_10']['padd3']; ?></td>

                </tr>
                <tr>
                    <td><?= $_SESSION['page1_10']['cadd4']; ?></td>
                    <td><?= $_SESSION['page1_10']['padd4']; ?></td>

                </tr>
            </table>
            <br />

            <span class="label"></span>
            <table class="tab">
                <!-- <tr>
			<td colspan="2"><strong>Mobile & Email</strong></td>
			
		</tr> -->
                <tr>
                    <td style="background-color:#f1f1f1;"><strong class="tr_title">Mobile</strong></td>
                    <td><?= $_SESSION['page1_10']['mobile']; ?></td>
                </tr>

                <tr>
                    <td style="background-color:#f1f1f1;"><strong class="tr_title">Alternate Mobile</strong></td>
                    <td><?= $_SESSION['page1_10']['mobile_2']; ?></td>
                </tr>

                <tr>
                    <td style="background-color:#f1f1f1;"><strong class="tr_title">Landline Phone No.</strong></td>
                    <td><?= $_SESSION['page1_10']['landline']; ?></td>
                </tr>

                <tr>
                    <td style="background-color:#f1f1f1;"><strong class="tr_title">E-mail</strong></td>
                    <td><?= $_SESSION['page1_10']['email']; ?></td>
                </tr>

                <tr>
                    <td style="background-color:#f1f1f1;"><strong class="tr_title">Alternate E-mail</strong></td>
                    <td><?= $_SESSION['page1_10']['email_2']; ?></td>
                </tr>






            </table>
            <br />

            <span class="label">2. Educational Qualifications</span>
            <table class="tab">

                <tr style="background-color:#f1f1f1;">
                    <td colspan="6" class="tr_title"><strong>(A) Ph. D. Details</strong></td>
                </tr>

                <tr>
                    <td width="30%"><strong>University/<br />Institute</strong></td>
                    <td width="12%"><strong>Department</strong></td>
                    <td width="17%"><strong>Name of Ph. D. <br />Supervisor</strong></td>
                    <td width="10%"><strong>Year of <br />Joining</strong></td>
                    <td width="15%"><strong>Date of <br />successful <br />thesis Defence</strong></td>
                    <td width="15%"><strong>Date of <br />Award</strong></td>
                </tr>

                <tr>
                    <td><?= $_SESSION['page2_10']['college_phd'];?></td>
                    <td><?= $_SESSION['page2_10']['stream'];?></td>
                    <td><?= $_SESSION['page2_10']['supervisor'];?></td>
                    <td><?= $_SESSION['page2_10']['yoj_phd'];?></td>
                    <td><?= $_SESSION['page2_10']['dod_phd'];?></td>
                    <td><?= $_SESSION['page2_10']['doa_phd'];?></td>


                </tr>

                <tr>
                    <td><strong>Title of Ph. D. Thesis</strong></td>
                    <td colspan="5"><?= $_SESSION['page2_10']['phd_title'];?></td>
                </tr>

            </table>
            <br />

            <table class="tab">

                <tr style="background-color:#f1f1f1;">
                    <td colspan="8" class="tr_title"><strong>(B) Academic Details - PG</strong></td>
                </tr>


                <tr>
                    <td width="10%"><strong>Degree</strong></td>
                    <td width="25%"><strong>University/<br />Institute</strong></td>
                    <td width="20%"><strong>Subjects</strong></td>
                    <td width="10%"><strong>Year of <br />Joining</strong></td>
                    <td width="12%"><strong>Year of <br />Graduation</strong></td>
                    <td width="10%"><strong>Duration <br />(in years)</strong></td>
                    <td width="30%"><strong>Percentage/CGPA </strong></td>
                    <td width="30%"><strong>Division/Class </strong></td>



                </tr>
                <tr>
                    <td><?= $_SESSION['page2_10']['pg_degree'];?></td>
                    <td><?= $_SESSION['page2_10']['pg_college'];?></td>
                    <td><?= $_SESSION['page2_10']['pg_subjects'];?></td>
                    <td><?= $_SESSION['page2_10']['pg_yoj'];?></td>
                    <td><?= $_SESSION['page2_10']['pg_yog'];?></td>
                    <td><?= $_SESSION['page2_10']['pg_duration'];?></td>
                    <td><?= $_SESSION['page2_10']['pg_perce'];?></td>
                    <td><?= $_SESSION['page2_10']['pg_rank'];?></td>


                </tr>
            </table>
            <br />

            <table class="tab">

                <tr style="background-color:#f1f1f1;">
                    <td colspan="8" class="tr_title"><strong>(C) Academic Details - UG</strong></td>
                </tr>

                <tr>
                    <td width="10%"><strong>Degree</strong></td>
                    <td width="25%"><strong>University/<br />Institute</strong></td>
                    <td width="20%"><strong>Subjects</strong></td>
                    <td width="10%"><strong>Year of <br />Joining</strong></td>
                    <td width="12%"><strong>Year of <br />Graduation</strong></td>
                    <td width="10%"><strong>Duration <br />(in years)</strong></td>
                    <td width="30%"><strong>Percentage/CGPA </strong></td>
                    <td width="30%"><strong>Division/Class </strong></td>



                </tr>
                <tr>
                    <td><?= $_SESSION['page2_10']['ug_degree'];?></td>
                    <td><?= $_SESSION['page2_10']['ug_college'];?></td>
                    <td><?= $_SESSION['page2_10']['ug_subjects'];?></td>
                    <td><?= $_SESSION['page2_10']['ug_yoj'];?></td>
                    <td><?= $_SESSION['page2_10']['ug_yog'];?></td>
                    <td><?= $_SESSION['page2_10']['ug_duration'];?></td>
                    <td><?= $_SESSION['page2_10']['ug_perce'];?></td>
                    <td><?= $_SESSION['page2_10']['ug_rank'];?></td>


                </tr>
            </table>
            <br />

            <table class="tab">

                <tr style="background-color:#f1f1f1;">
                    <td colspan="8" class="tr_title"><strong>(D) Academic Details - School</strong></td>
                </tr>

                <tr>
                    <td width="20%"><strong>10th/12th/HSC/Diploma</strong></td>
                    <td width="20%"><strong>School</strong></td>
                    <td width="15%"><strong>Year of Passing</strong></td>
                    <td width="15%"><strong>Percentage/CGPA</strong></td>
                    <td width="15%"><strong>Division/Class</strong></td>



                </tr>
                <?php foreach($_SESSION['page2_school_10']['hsc_ssc'] as $key=> $value) {?>
                <tr>
                    <td><?= $_SESSION['page2_school_10']['hsc_ssc'][$key];?></td>
                    <td><?= $_SESSION['page2_school_10']['school'][$key];?>.</td>
                    <td><?= $_SESSION['page2_school_10']['passing_year'][$key];?></td>
                    <!-- <td></td> -->
                    <td><?= $_SESSION['page2_school_10']['s_perce'][$key];?></td>
                    <td><?= $_SESSION['page2_school_10']['email'][$key];?></td>

                </tr>
                    <?php } ?>
            </table>
            <br />
            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="8" class="tr_title"><strong>(E) Additional Educational Qualifications (If any) </strong></td>
                </tr>

                <tr>
                    <td width="10%"><strong>Degree</strong></td>
                    <td width="25%"><strong>University/<br />Institute</strong></td>
                    <td width="20%"><strong>Subjects</strong></td>
                    <td width="10%"><strong>Year of <br />Joining</strong></td>
                    <td width="12%"><strong>Year of <br />Graduation</strong></td>
                    <td width="10%"><strong>Duration <br />(in years)</strong></td>
                    <td width="30%"><strong>Percentage/CGPA </strong></td>
                    <td width="30%"><strong>Division/Class </strong></td>
                </tr>

                <?php foreach($_SESSION['page2_school_10']['hsc_ssc'] as $key=> $value) {?>
                <tr>
                    <td><?= $_SESSION['page2_edu_10']['add_degree'][$key];?></td>
                    <td><?= $_SESSION['page2_edu_10']['add_college'][$key];?></td>
                    <td><?= $_SESSION['page2_edu_10']['add_subjects'][$key];?></td>
                    <td><?= $_SESSION['page2_edu_10']['add_yoj'][$key];?></td>
                    <td><?= $_SESSION['page2_edu_10']['add_yog'][$key];?>
                    <td><?= $_SESSION['page2_edu_10']['add_duration'][$key];?></td>
                    <td><?= $_SESSION['page2_edu_10']['add_perce'][$key];?></td>
                    <td><?= $_SESSION['page2_edu_10']['add_rank'][$key];?></td>
                </tr>
                <?php } ?>
            </table>
            <br />

            <span class="label">3. Employment Details </span>

            <table class="tab">

                <tr style="background-color:#f1f1f1;">
                    <td colspan="5" class="tr_title"><strong>(A) Present Employment</strong></td>
                </tr>


                <tr>
                    <td width="20"><strong>Position </strong></td>
                    <td width="30"><strong>Organization/Institution</strong></td>
                    <td width="15"><strong>Date of <br />Joining</strong></td>
                    <td width="15"><strong>Date of <br />Leaving </strong></td>
                    <td width="15"><strong>Duration <br />(in years)</strong></td>
                </tr>
                <tr>
                    <td><?= $_SESSION['page3_10']['pres_emp_position'];?></td>
                    <td><?= $_SESSION['page3_10']['pres_emp_employer'];?></td>
                    <td><?= $_SESSION['page3_10']['pres_emp_doj'];?></td>
                    <td><?= $_SESSION['page3_10']['pres_emp_dol'];?></td>
                    <td><?= $_SESSION['page3_10']['pres_emp_duration'];?></td>
                </tr>
            </table>
            <br />

            <span class="label"> </span>
            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="5" class="tr_title"><strong>(B) Employment History (After PhD )</strong></td>
                </tr>

                <tr>
                    <td width="20"><strong>Position </strong></td>
                    <td width="30"><strong>Organization/Institution</strong></td>
                    <td width="15"><strong>Date of <br />Joining</strong></td>
                    <td width="15"><strong>Date of <br />Leaving </strong></td>
                    <td width="15"><strong>Duration <br />(in years)</strong></td>
                </tr>

                <?php foreach($_SESSION['page3_10']['position'] as $key=> $value) {?>
                <tr>
                    <td><?= $_SESSION['page3_10']['position'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['doj'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['dol'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['exp_duration'][$key];?></td>
                    <!-- <td>Iusto quia cumque ex sed occaecati molestiae debitis sequi odio.</td> -->
                    <td><?= $_SESSION['page3_10']['email_1'][$key];?></td>
                </tr>
                <?php } ?>

                <tr>
                <tr>
                    <td colspan="5"> <strong style="color:red;"></strong></td>
                </tr>


                </tr>
            </table>
            <br />

            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="8" class="tr_title"><strong>(C) Teaching Experience (After PhD)</strong></td>
                </tr>

                <tr>
                    <!-- <td><strong>S. No.</strong></td> -->
                    <td width="25%"><strong>Position</strong></td>
                    <td width="30%"><strong>Employer</strong></td>
                    <td width="30%"><strong>Course Taught</strong></td>
                    <td width="30%"><strong>UG/PG</strong></td>
                    <td width="30%"><strong>No. of Students</strong></td>
                    <td width="10%"><strong>Date of <br />Joining</strong></td>
                    <td width="10%"><strong>Date of <br />Leaving</strong></td>
                    <td width="10%"><strong>Duration</strong></td>
                </tr>

                <?php foreach($_SESSION['page3_10']['position'] as $key=> $value) {?>
                <tr>
                    <!-- <td></td> -->
                    <td><?= $_SESSION['page3_10']['te_position'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['te_employer'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['te_course'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['te_ug_pg'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['te_no_stu'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['te_doj'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['te_dol'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['te_duration'][$key];?></td>
                </tr>
                <?php } ?>

            </table>
            <br />

            <table class="tab">
                <tr style="background-color:#f1f1f1">
                    <td colspan="6" class="tr_title"><strong>(D) Research Experience </strong></td>
                </tr>

                <tr>
                    <!-- <td><strong>S. No.</strong></td> -->
                    <td width="20%"><strong>Position</strong></td>
                    <td width="20%"><strong>Institute</strong></td>
                    <td width="20%"><strong>Supervisor</strong></td>
                    <td width="10%"><strong>Date of <br />Joining</strong></td>
                    <td width="10%"><strong>Date of <br />Leaving</strong></td>
                    <td width="10%"><strong>Duration</strong></td>
                </tr>

                <?php foreach($_SESSION['page3_10']['position'] as $key=> $value) {?>
                <tr>
                    <!-- <td></td> -->
                    <td><?= $_SESSION['page3_10']['r_exp_position'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['r_exp_institute'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['r_exp_supervisor'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['r_exp_doj'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['r_exp_dol'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['r_exp_duration'][$key];?></td>
                </tr>
                <?php } ?>
            </table>
            <br />

            <table class="tab">
                <tr style="background-color:#f1f1f1">
                    <td colspan="5"><strong class="tr_title">(E) Industrial Experience </strong></td>
                </tr>

                <tr>
                    <!-- <td><strong>S. No.</strong></td> -->
                    <td width="20%"><strong>Organization</strong></td>
                    <td width="20%"><strong>Work Profile</strong></td>
                    <td width="10%"><strong>Date of <br />Joining</strong></td>
                    <td width="10%"><strong>Date of <br />Leaving</strong></td>
                    <td width="10%"><strong>Duration</strong></td>
                </tr>

                <?php foreach($_SESSION['page3_10']['position'] as $key=> $value) {?>
                <tr>
                    <!-- <td></td> -->
                    <td><?= $_SESSION['page3_10']['org'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['work'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['ind_doj'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['ind_dol'][$key];?></td>
                    <td><?= $_SESSION['page3_10']['period'][$key];?></td>
                </tr>
                <?php } ?>
            </table>
            <br />

            <span class="label">4. Area(s) of Specialization and Current Area(s) of Research</span>
            <table class="tab">
                <!-- <tr style="background-color:#f1f1f1"> 
				<td><strong class="tr_title">4. Area(s) of Specialization & Current Area(s) of Research</strong></td>
			</tr> -->
                <tr>
                    <td width="25%" style="background-color: #f1f1f1;"><strong class="tr_title">Area(s) of Specialization</strong></td>
                    <td><?= $_SESSION['page3_10']['area_spl'];?></td>
                </tr>

                <tr>
                    <td width="25%" style="background-color: #f1f1f1;"><strong class="tr_title">Current Area(s) of Research</strong></td>
                    <td><?= $_SESSION['page3_10']['area_rese'];?></td>
                </tr>


            </table>
            <br />


            <span class="label">5. Summary of Publications</span>
            <table class="tab">



                <tr>
                    <td width="50%"><strong>Number of International Journal Papers </strong></td>
                    <td><?= $_SESSION['page4_10']['summary_journal_inter'];?></td>
                </tr>

                <tr>
                    <td width="50%"><strong>Number of National Journal Papers </strong></td>
                    <td><?= $_SESSION['page4_10']['summary_journal'];?></td>
                </tr>

                <tr>
                    <td><strong> Number of International Conference Papers </strong></td>
                    <td><?= $_SESSION['page4_10']['summary_conf_inter'];?></td>
                </tr>

                <tr>
                    <td><strong> Number of National Conference Papers </strong></td>
                    <td><?= $_SESSION['page4_10']['summary_conf_national'];?> </td>
                </tr>

                <tr>
                    <td><strong> Number of Patent(s) </strong></td>
                    <td><?= $_SESSION['page4_10']['patent_publish'];?></td>
                </tr>

                <tr>
                    <td><strong> Number of Book(s) </strong></td>
                    <td><?= $_SESSION['page4_10']['summary_book'];?></td>
                </tr>

                <tr>
                    <td><strong>Number of Book Chapter(s) </strong></td>
                    <td><?= $_SESSION['page4_10']['summary_book_chapter'];?></td>
                </tr>


            </table>
            <br />


            <span class="label">6. List of 10 Best Research Publications (Journal/Conference)</span>
            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="8"><strong class="tr_title">(A) Journals(s)</strong></td>
                </tr>
                <tr>
                    <td width="5%"><strong>S. No.</strong></td>
                    <td width="25%"><strong>Author(s) </strong></td>
                    <td width="30%"><strong>Title</strong></td>
                    <td width="25%"><strong>Name of Journal</strong></td>
                    <td width="10%"><strong>Year, Vol., Page</strong></td>
                    <td width="5%"><strong>Impact Factor</strong></td>
                    <td width="1%"><strong>DOI</strong></td>
                    <td width="5%"><strong>Status</strong></td>
                </tr>
                <?php 
                $x=0;
                foreach($_SESSION['page4_10']['author'] as $key=> $value) {$x=$x+1;?>
                <tr>
                    <td><?= $x ?></td>
                    <td><?= $_SESSION['page4_10']['author'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['title'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['journal'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['year'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['impact'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['doi'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['status'][$key];?></td>
                </tr>
                <?php } ?>
            </table>
            <br />

            <!-- <table class="tab">
			<tr style="background-color:#f1f1f1;">
				<td colspan="3"><strong class="tr_title">(B) Conference(s)</strong></td>
			</tr>
			<tr>
				<td width="20%"><strong>Name of the Conference </strong></td>
				<td width="20%"><strong>Title of Paper</strong></td>
				<td width="10%"><strong>Year</strong></td>
			</tr>
					</table>
		<br />	 -->

            <span class="label">7. List of Patent(s), Book(s), Book Chapter(s)</span>
            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="8"><strong class="tr_title">(A) Patent(s)</strong></td>
                </tr>
                <tr>
                    <td width="5%"><strong>S. No.</strong></td>
                    <td width="20%"><strong>Inventor(s) </strong></td>
                    <td width="20%"><strong>Title of Patent</strong></td>
                    <td width="15%"><strong>Country of<br /> Patent</strong></td>
                    <td width="10%"><strong>Patent <br />Number</strong></td>
                    <td width="10%"><strong>Date of <br />Filing</strong></td>
                    <td width="10%"><strong>Date of <br />Published</strong></td>
                    <td width="10%"><strong>Status<br />Filed/Published</strong></td>
                </tr>
                <?php 
                $x=0;
                foreach($_SESSION['page4_10']['pauthor'] as $key=> $value) {$x=$x+1;?>
                <tr>
                    <td><?= $x ?></td>
                    <td><?= $_SESSION['page4_10']['pauthor'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['ptitle'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['p_country'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['p_number'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['pyear_filed'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['pyear_published'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['pyear_issued'][$key];?></td>
                </tr>
                <?php } ?>
            </table>
            <br />

            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="5"><strong class="tr_title">(B) Book(s)</strong></td>
                </tr>
                <tr>
                    <td width="5%"><strong>S. No.</strong></td>
                    <td width="30%"><strong>Author(s) </strong></td>
                    <td width="40%"><strong>Title of the Book</strong></td>
                    <td width="20%"><strong>Year of Publication</strong></td>
                    <td width="10%"><strong>ISBN</strong></td>

                </tr>
                <?php 
                $x=0;
                foreach($_SESSION['page4_10']['bauthor'] as $key=> $value) {$x=$x+1;?>
                <tr>
                    <td><?= $x ?></td>
                    <td><?= $_SESSION['page4_10']['bauthor'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['btitle'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['byear'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['bisbn'][$key];?></td>

                </tr>
                <?php } ?>
            </table>
            <br />

            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="5"><strong class="tr_title">(C) Book Chapter(s)</strong></td>
                </tr>
                <tr>
                    <td width="5%"><strong>S. No.</strong></td>
                    <td width="30%"><strong>Author(s) </strong></td>
                    <td width="40%"><strong>Title of the Book Chapter</strong></td>
                    <td width="20%"><strong>Year of Publication</strong></td>
                    <td width="10%"><strong>ISBN</strong></td>

                </tr>
                <?php 
                $x=0;
                foreach($_SESSION['page4_10']['bc_author'] as $key=> $value) {$x=$x+1;?>
                <tr>
                    <td><?= $x ?></td>
                    <td><?= $_SESSION['page4_10']['bc_author'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['bc_title'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['bc_year'][$key];?></td>
                    <td><?= $_SESSION['page4_10']['bc_isbn'][$key];?></td>

                </tr>
                <?php } ?>
            </table>
            <br />

            <span class="label">8. Google Scholar Link </span>
            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="6"><strong class="tr_title">URL</strong></td>
                </tr>
                <tr>
                    <td width="12%"><a href="Unde quod et." target="_blank"><?= $_SESSION['page4_10']['google_link'];?></a></td>
                </tr>

            </table>
            <br />

            <span class="label">9. Membership of Professional Societies </span>
            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="3"><strong class="tr_title">Details</strong></td>
                </tr>

                <tr>
                    <td width="3%"><strong>S. No.</strong></td>
                    <td width="20%"><strong>Name of the Professional Society</strong></td>
                    <td width="20%"><strong>Membership Status (Lifetime/Annual)</strong></td>
                </tr>

                <?php 
                $x=0;
                foreach($_SESSION['page5_10']['mname'] as $key=> $value) {$x=$x+1;?>
                <tr>
                    <td><?= $x ?></td>
                    <td><?= $_SESSION['page5_10']['mname'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['mstatus'][$key];?></td>
                </tr>
                <?php } ?>
            </table>
            <br />

            <span class="label">10. Professional Training </span>
            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="5"><strong class="tr_title">Details</strong></td>
                </tr>

                <tr>
                    <td width="5%"><strong>S. No.</strong></td>
                    <td width="20%"><strong>Type of Training Received</strong></td>
                    <td width="20%"><strong>Organisation</strong></td>
                    <td width="10%"><strong>Year</strong></td>
                    <td width="10%"><strong>Duration</strong></td>
                </tr>

                <?php 
                $x=0;
                foreach($_SESSION['page5_10']['trg'] as $key=> $value) {$x=$x+1;?>
                <tr>
                    <td><?= $x ?></td>
                    <td><?= $_SESSION['page5_10']['trg'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['porg'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['pyear'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['pduration'][$key];?></td>
                </tr>
                <?php } ?>
            </table>
            <br />

            <span class="label">11. Award(s) and Recognition(s) </span>
            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="4"><strong class="tr_title">Details</strong></td>
                </tr>

                <tr>
                    <td width="5%"><strong>S. No.</strong></td>
                    <td width="20%"><strong>Name of Award</strong></td>
                    <td width="20%"><strong>Awarded By</strong></td>
                    <td width="10%"><strong>Year</strong></td>
                </tr>

                <?php 
                $x=0;
                foreach($_SESSION['page5_10']['award_nature'] as $key=> $value) {$x=$x+1;?>
                <tr>
                    <td>1</td>
                    <td><?= $_SESSION['page5_10']['award_nature'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['award_org'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['award_year'][$key];?></td>
                </tr>
                <?php } ?>
            </table>
            <br />

            <span class="label">12. Research Supervision</span>
            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="6"><strong class="tr_title">(A) PhD Thesis Supervision</strong></td>
                </tr>
                <tr>
                    <td width="5%"><strong>S. No.</strong></td>
                    <td width="25%"><strong>Name of Student/Research Scholar</strong></td>
                    <td width="30%"><strong>Title of Thesis</strong></td>
                    <td width="10%"><strong>Role</strong></td>
                    <td width="10%"><strong>Ongoing/Completed</strong></td>
                    <td width="10%"><strong>Ongoing Since/ Year of Completion</strong></td>
                </tr>

                <?php 
                $x=0;
                foreach($_SESSION['page6_10']['phd_scholar'] as $key=> $value) {$x=$x+1;?>
                <tr>
                    <td><?= $x ?></td>
                    <td><?= $_SESSION['page6_10']['phd_scholar'][$key];?></td>
                    <td><?= $_SESSION['page6_10']['phd_thesis'][$key];?></td>
                    <td><?= $_SESSION['page6_10']['phd_role'][$key];?></td>
                    <td><?= $_SESSION['page6_10']['phd_ths_status'][$key];?></td>
                    <td><?= $_SESSION['page6_10']['phd_ths_year'][$key];?></td>
                </tr>
                <?php } ?>
            </table>
            <br />

            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="6"><strong class="tr_title">(B) M.Tech/M.E./Master's Thesis Supervision</strong></td>
                </tr>

                <tr>
                    <td width="5%"><strong>S. No.</strong></td>
                    <td width="25%"><strong>Name of Student/Research Scholar</strong></td>
                    <td width="30%"><strong>Title of Thesis</strong></td>
                    <td width="10%"><strong>Role</strong></td>
                    <td width="10%"><strong>Ongoing/Completed</strong></td>
                    <td width="10%"><strong>Ongoing Since/ Year of Completion</strong></td>
                </tr>

                <?php 
                $x=0;
                foreach($_SESSION['page6_10']['pg_scholar'] as $key=> $value) {$x=$x+1;?>
                <tr>
                    <td>1</td>
                    <td><?= $_SESSION['page6_10']['pg_scholar'][$key];?></td>
                    <td><?= $_SESSION['page6_10']['pg_thesis'][$key];?></td>
                    <td><?= $_SESSION['page6_10']['pg_role'][$key];?></td>
                    <td><?= $_SESSION['page6_10']['pg_status'][$key];?></td>
                    <td><?= $_SESSION['page6_10']['pg_ths_year'][$key];?></td>
                </tr>
                <?php } ?>

            </table>
            <br />

            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="6"><strong class="tr_title">(C) B.Tech/B.E./Bachelor's Project Supervision</strong></td>
                </tr>

                <tr>
                    <td width="5%"><strong>S. No.</strong></td>
                    <td width="25%"><strong>Name of Student</strong></td>
                    <td width="30%"><strong>Title of Project</strong></td>
                    <td width="10%"><strong>Role</strong></td>
                    <td width="10%"><strong>Ongoing/Completed</strong></td>
                    <td width="10%"><strong>Ongoing Since/ Year of Completion</strong></td>
                </tr>

                <?php 
                $x=0;
                foreach($_SESSION['page6_10']['ug_scholar'] as $key=> $value) {$x=$x+1;?>
                <tr>
                    <td><?= $x ?></td>
                    <td><?= $_SESSION['page6_10']['ug_scholar'][$key];?></td>
                    <td><?= $_SESSION['page6_10']['ug_thesis'][$key];?></td>
                    <td><?= $_SESSION['page6_10']['ug_role'][$key];?></td>
                    <td><?= $_SESSION['page6_10']['ug_status'][$key];?></td>
                    <td><?= $_SESSION['page6_10']['ug_ths_year'][$key];?></td>
                </tr>
                <?php } ?>

            </table>
            <br />

            <span class="label">13. Sponsored Projects/ Consultancy Details </span>
            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="7"><strong class="tr_title">(A) Sponsored Projects</strong></td>
                </tr>

                <tr>
                    <td width="5%"><strong>S. No.</strong></td>
                    <td width="20%"><strong>Sponsoring Agency</strong></td>
                    <td width="20%"><strong>Title of Project</strong></td>
                    <td width="10%"><strong>Sanctioned Amount</strong></td>
                    <td width="10%"><strong>Period</strong></td>
                    <td width="10%"><strong>Role</strong></td>
                    <td width="10%"><strong>Status</strong></td>
                </tr>

                <?php 
                $x=0;
                foreach($_SESSION['page4_10']['bc_author'] as $key=> $value) {$x=$x+1;?>
                <tr>
                    <td><?= $x ?></td>
                    <td><?= $_SESSION['page5_10']['agency'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['stitle'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['samount'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['speriod'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['s_role'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['s_status'][$key];?></td>
                </tr>
                <?php } ?>
            </table>
            <br />


            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="7"><strong class="tr_title">(B) Consultancy Projects</strong></td>
                </tr>

                <tr>
                    <td width="5%"><strong>S. No.</strong></td>
                    <td width="20%"><strong>Organization</strong></td>
                    <td width="20%"><strong>Title of Project</strong></td>
                    <td width="15%"><strong>Amount of Grant</strong></td>
                    <td width="15%"><strong>Period</strong></td>
                    <td width="15%"><strong>Role</strong></td>
                    <td width="15%"><strong>Status</strong></td>
                </tr>

                <?php 
                $x=0;
                foreach($_SESSION['page5_10']['c_org'] as $key=> $value) {$x=$x+1;?>
                <tr>
                    <td><?= $x ?></td>
                    <td><?= $_SESSION['page5_10']['c_org'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['ctitle'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['camount'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['cperiod'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['c_role'][$key];?></td>
                    <td><?= $_SESSION['page5_10']['c_status'][$key];?></td>
                </tr>
                <?php } ?>
            </table>
            <br />


            <span class="label">14. Significant research contribution and future plans</span>
            <table class="tab">
                <tr>
                    <td style="text-align:justify;">
                        <p><?= $_SESSION['page7_10']['research_statement'];?></p>

                        <p> </p>

                        <p> </p>
                    </td>
                </tr>

            </table>
            <br />

            <span class="label">15. Significant teaching contribution and future plans</span>

            <table class="tab">

                <tr>
                    <td style="text-align:justify;">
                        <p><?= $_SESSION['page7_10']['teaching_statement'];?></p>

                        <p> </p>

                        <p> </p>
                    </td>
                </tr>
            </table>
            <br />

            <span class="label">16. Any other relevant information</span>

            <table class="tab">
                <tr>
                    <td>
                        <p><?= $_SESSION['page7_10']['rel_in'];?></p>

                        <p> </p>

                        <p> </p>
                    </td>
                </tr>
            </table>
            <br />

            <span class="label">17. Professional Service as Reviewer/Editor etc.</span>
            <table class="tab">
                <tr>
                    <td>
                        <p><?= $_SESSION['page7_10']['prof_serv'];?></p>

                        <p> </p>

                        <p> </p>
                    </td>
                </tr>
            </table>
            <br />

            <span class="label">18. Detailed List of Journal Publications<br />(Including Sr. No., Author's Names, Paper Title, Volume, Issue, Year, Page Nos., Impact Factor (if any), DOI, Status [Published/Accepted])</span>
            <table class="tab">
                <tr>
                    <td>
                        <p><?= $_SESSION['page7_10']['jour_details'];?></p>

                        <p> </p>

                        <p> </p>
                    </td>
                </tr>
            </table>
            <br />

            <span class="label">19. Detailed List of Conference Publications<br />(Including Sr. No., Author's Names, Paper Title, Name of the conference, Year, Page Nos., DOI [If any])</span>
            <table class="tab">
                <tr>
                    <td>
                        <p><?= $_SESSION['page7_10']['conf_details'];?></p>

                        <p> </p>

                        <p> </p>
                    </td>
                </tr>
            </table>
            <br />

            <span class="label">20. Reprints of 5 Best Research Papers-Attached </span>

            <br />
            <br />

            <span class="label">21. Check List of the documents attached with the online application </span><br />

            1. PHD Certificate<br />
            2. PG Certificate<br />
            3. UG Certificate<br />
            4. 12th/HSC/Diploma<br />
            5. 10th/SSC Certificate<br />
            6. 10 Years Post phd Experience Certificate <br />
            7. Any other relevant documents ( Experience Certificate, Award Certificate, etc.)
            <br />
            <br />


            <span class="label">22. Referees</span>
            <table class="tab">
                <tr style="background-color:#f1f1f1;">
                    <td colspan="6"><strong class="tr_title">Details of Referees</strong></td>
                </tr>

                <tr>
                    <!-- <td><strong>S. No.</strong></td> -->
                    <td width="20%"><strong>Name</strong></td>
                    <td width="20%"><strong>Position</strong></td>
                    <td width="15%"><strong>Association with Referee</strong></td>
                    <td width="15%"><strong>Institution/<br />Organization</strong></td>
                    <td width="15%"><strong>E-mail</strong></td>
                    <td width="15%"><strong>Contact No.</strong></td>
                </tr>

                <?php
                foreach($_SESSION['page8_10']['ref_name'] as $key=> $value) {?>
                <tr>
                    <!-- <td></td> -->
                    <td><?= $_SESSION['page8_10']['ref_name'][$key];?></td>
                    <td><?= $_SESSION['page8_10']['position'][$key];?></td>
                    <td><?= $_SESSION['page8_10']['association_referee'][$key];?></td>
                    <td><?= $_SESSION['page8_10']['org'][$key];?></td>
                    <td><?= $_SESSION['page8_10']['email_2'][$key];?></td>
                    <td><?= $_SESSION['page8_10']['phone'][$key];?></td>
                </tr>
                <?php } ?>
            </table>
            <br />




            <span class="label">23. Final Declaration</span>

            <table class="tab">

                <td> I hereby declare that I have carefully read and understood the instructions and particulars mentioned in the advertisment and this application form. I further declare that all the entries along with the attachments uploaded in this form are true to the best of my knowledge and belief</td>
            </table>
            <br />

            <img src="<?="uploads/" . $_SESSION['page8_10']['userfile5']?>" style="height:50; " /><br />
            Signature of Applicant

        </div>


        <div id="non_print_area">
            <button onclick="window.location.href='page9.php'">Back </button>
            <button onclick="window.print();">Print Application</button> <br />
        </div>
    </div>


    <style>
        @media print {
            #non_print_area {
                display: none !important;
            }
        }
    </style>
</body>

</html>