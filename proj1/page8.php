<?php
session_start();
$page_title = "Rel Info";
include('includes/header.php');
?>

<style type="text/css">
  body {
    padding-top: 30px;
  }

  .form-control {
    margin-bottom: 10px;
  }

  .floating-box {
    display: inline-block;
    width: 150px;
    height: 75px;
    margin: 10px;
    border: 3px solid #73AD21;
  }
</style>
<style type="text/css">
  body {
    padding-top: 30px;
  }

  .form-control {
    margin-bottom: 10px;
  }

  label {
    /*padding: 10 !important;*/
    text-align: left !important;
    margin-top: -5px;
    font-family: 'Noto Serif', serif;
  }

  hr {
    border-top: 1px solid #025198 !important;
    border-style: dashed !important;
    border-width: 1.2px;
  }

  .panel-heading {
    font-size: 1.3em;
    font-family: 'Oswald', sans-serif !important;
    letter-spacing: .5px;
  }

  .panel-info .panel-heading {
    font-size: 1.1em;
    font-family: 'Oswald', sans-serif !important;
    padding-top: 5px;
    padding-bottom: 5px;
  }

  .panel-danger .panel-heading {
    font-size: 1.1em;
    font-family: 'Oswald', sans-serif !important;
    padding-top: 5px;
    padding-bottom: 5px;
  }

  .btn-primary {
    padding: 9px;
  }

  .Acae_data {
    font-size: 1.1em;
    font-weight: bold;
    color: #414002;
  }


  .upload_crerti {
    font-size: 1.1em;
    font-weight: bold;
    color: red;
    text-align: center;
  }

  .update_crerti {
    font-size: 1.1em;
    font-weight: bold;
    color: green;
    text-align: center;
  }

  p {
    padding-top: 10px;
  }
</style>

<!-- all bootstrap buttons classes -->
<!-- 
  class="btn btn-sm, btn-lg, "
  color - btn-success, btn-primary, btn-default, btn-danger, btn-info, btn-warning
-->



<a href='includes/layout.php'></a>

<div class="container">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 well">


      <fieldset>

        <legend>
          <div class="row">
            <div class="col-md-10">
              <h4>Welcome : <font color="#025198"><strong><?= $_SESSION['auth_user']['username']; ?></strong></font>
              </h4>
            </div>
            <div class="col-md-2">
              <a href="index.php" class="btn btn-sm btn-success  pull-right">Logout</a>
            </div>
          </div>


        </legend>
      </fieldset>



      <!-- publication file upload           -->

      <form class="form-horizontal" action="page8_code.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="email" value="<?= $_SESSION['auth_user']['email']; ?>">


        <!-- Reprints of 5 Best Research Papers  -->

        <h4 style="text-align:center; font-weight: bold; color: #6739bb;">20. Reprints of 5 Best Research Papers *</h4>
        <div class="row">


          <div class="col-md-12">
            <div class="panel panel-info">
              <div class="panel-heading">Upload 5 Best Research Papers in a single PDF &lt; 6MB
                <a href="#" class="btn-sm btn-info pull-right" id="viewResearchPapers" style="display: none;" target="_blank">View Uploaded File</a>
              </div>
              <br />
              <br />
              <div class="panel-body">
                <div class="col-md-5">
                  <p class="upload_crerti">Upload 5 best papers</p>
                </div>
                <div class="col-md-7">
                  <input id="full_5_paper" name="userfile7" type="file" class="form-control input-md" required="">
                </div>
              </div>
            </div>
          </div>

          <script>
            // Function to handle file selection for 5 research papers upload
            document.getElementById('full_5_paper').addEventListener('change', function() {
              var file = this.files[0];
              if (file) {
                var viewResearchPapersLink = document.getElementById('viewResearchPapers');
                viewResearchPapersLink.setAttribute('href', URL.createObjectURL(file));
                viewResearchPapersLink.style.display = 'inline-block';
              }
            });
          </script>


        </div>



        <!-- certificate file code start -->
        <h4 style="text-align:center; font-weight: bold; color: #6739bb;">21. Check List of the documents attached with the online application *</h4>

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-success">
              <div class="panel-heading">Check List of the documents attached with the online application (Documents should be uploaded in PDF format only):
                <br />
                <small style="color: red;">Uploaded PDF files will not be displayed as part of the printed form.</small>
              </div>
              <div class="panel-body">
                <div class="row">

                  <!-- <form action="https://ofa.iiti.ac.in/facrec_che_2023_july_02/submission_complete/upload" method="post" enctype="multipart/form-data"> -->
                  <input type="hidden" name="ci_csrf_token" value="" />

                  <!-- phd certificate  -->

                  <div class="col-md-4">
                    <div class="panel panel-danger">
                      <div class="panel-heading">
                        PHD Certificate *
                        <a href="#" class="btn-sm btn-danger pull-right" id="viewPHDCertificate" style="display: none;" target="_blank">View Uploaded File</a>
                      </div>
                      <div class="panel-body">
                        <p class="upload_crerti">Upload PHD Certificate</p>
                        <input id="phd" name="userfile" type="file" class="form-control input-md" required="">
                      </div>
                    </div>
                  </div>

                  <script>
                    // Function to handle file selection for PHD certificate upload
                    document.getElementById('phd').addEventListener('change', function() {
                      var file = this.files[0];
                      if (file) {
                        var viewPHDCertificateLink = document.getElementById('viewPHDCertificate');
                        viewPHDCertificateLink.setAttribute('href', URL.createObjectURL(file));
                        viewPHDCertificateLink.style.display = 'inline-block';
                      }
                    });
                  </script>




                  <!-- Master certificate  -->



                  <div class="col-md-4">
                    <div class="panel panel-danger">
                      <div class="panel-heading">
                        PG Documents *
                        <a href="#" class="btn-sm btn-danger pull-right" id="viewPGDocuments" style="display: none;" target="_blank">View Uploaded File</a>
                      </div>
                      <div class="panel-body">
                        <p class="upload_crerti">Upload All semester/year-Marksheets and degree certificate</p>
                        <input id="post_gr" name="userfile1" type="file" class="form-control input-md">
                      </div>
                    </div>
                  </div>

                  <script>
                    // Function to handle file selection for PG documents upload
                    document.getElementById('post_gr').addEventListener('change', function() {
                      var file = this.files[0];
                      if (file) {
                        var viewPGDocumentsLink = document.getElementById('viewPGDocuments');
                        viewPGDocumentsLink.setAttribute('href', URL.createObjectURL(file));
                        viewPGDocumentsLink.style.display = 'inline-block';
                      }
                    });
                  </script>





                  <!-- Bachelor certificate  -->



                  <div class="col-md-4">
                    <div class="panel panel-danger">
                      <div class="panel-heading">
                        UG Documents *
                        <a href="#" class="btn-sm btn-danger pull-right" id="viewUGDocuments" style="display: none;" target="_blank">View Uploaded File</a>
                      </div>
                      <div class="panel-body">
                        <p class="upload_crerti">Upload All semester/year-Marksheets and degree certificate</p>
                        <input id="under_gr" name="userfile2" type="file" class="form-control input-md" required="">
                      </div>
                    </div>
                  </div>

                  <script>
                    // Function to handle file selection for UG documents upload
                    document.getElementById('under_gr').addEventListener('change', function() {
                      var file = this.files[0];
                      if (file) {
                        var viewUGDocumentsLink = document.getElementById('viewUGDocuments');
                        viewUGDocumentsLink.setAttribute('href', URL.createObjectURL(file));
                        viewUGDocumentsLink.style.display = 'inline-block';
                      }
                    });
                  </script>




                  <!-- 12th certificate  -->



                  <div class="col-md-4">
                    <div class="panel panel-danger">
                      <div class="panel-heading">
                        12th/HSC/Diploma Documents *
                        <a href="#" class="btn-sm btn-danger pull-right" id="viewHigherSecDocuments" style="display: none;" target="_blank">View Uploaded File</a>
                      </div>
                      <div class="panel-body">
                        <p class="upload_crerti">Upload 12th/HSC/Diploma/Marksheet(s) and passing certificate</p>
                        <input id="higher_sec" name="userfile3" type="file" class="form-control input-md" required="">
                      </div>
                    </div>
                  </div>

                  <script>
                    // Function to handle file selection for 12th/HSC/Diploma documents upload
                    document.getElementById('higher_sec').addEventListener('change', function() {
                      var file = this.files[0];
                      if (file) {
                        var viewHigherSecDocumentsLink = document.getElementById('viewHigherSecDocuments');
                        viewHigherSecDocumentsLink.setAttribute('href', URL.createObjectURL(file));
                        viewHigherSecDocumentsLink.style.display = 'inline-block';
                      }
                    });
                  </script>





                  <!-- 10th certificate  -->



                  <div class="col-md-4">
                    <div class="panel panel-danger">
                      <div class="panel-heading">
                        10th/SSC Documents *
                        <a href="#" class="btn-sm btn-danger pull-right" id="viewHighSchoolDocuments" style="display: none;" target="_blank">View Uploaded File</a>
                      </div>
                      <div class="panel-body">
                        <p class="upload_crerti">Upload 12th/HSC/Diploma/Marksheet(s) and passing certificate</p>
                        <input id="high_school" name="userfile4" type="file" class="form-control input-md" required="">
                      </div>
                    </div>
                  </div>

                  <script>
                    // Function to handle file selection for 10th/SSC documents upload
                    document.getElementById('high_school').addEventListener('change', function() {
                      var file = this.files[0];
                      if (file) {
                        var viewHighSchoolDocumentsLink = document.getElementById('viewHighSchoolDocuments');
                        viewHighSchoolDocumentsLink.setAttribute('href', URL.createObjectURL(file));
                        viewHighSchoolDocumentsLink.style.display = 'inline-block';
                      }
                    });
                  </script>




                  <!-- Pay Slip -->


                  <div class="col-md-4">
                    <div class="panel panel-danger">
                      <div class="panel-heading">
                        Pay Slip *
                        <a href="#" class="btn-sm btn-danger pull-right" id="viewPaySlip" style="display: none;" target="_blank">View Uploaded File</a>
                      </div>
                      <div class="panel-body">
                        <p class="upload_crerti">Upload Pay Slip</p>
                        <input id="pay_slip" name="userfile9" type="file" class="form-control input-md">
                      </div>
                    </div>
                  </div>

                  <script>
                    // Function to handle file selection for Pay Slip upload
                    document.getElementById('pay_slip').addEventListener('change', function() {
                      var file = this.files[0];
                      if (file) {
                        var viewPaySlipLink = document.getElementById('viewPaySlip');
                        viewPaySlipLink.setAttribute('href', URL.createObjectURL(file));
                        viewPaySlipLink.style.display = 'inline-block';
                      }
                    });
                  </script>



                  <!-- Under Taking NOC -->

                  <!-- Pay Slip -->


                  <div class="col-md-6">
                    <div class="panel panel-danger">
                      <div class="panel-heading">
                        NOC or Undertaking *
                        <a href="#" class="btn-sm btn-danger pull-right" id="viewNOCUndertaking" style="display: none;" target="_blank">View Uploaded File</a>
                      </div>
                      <div class="panel-body">
                        <p class="upload_crerti">Undertaking-in case, NOC is not available at the time of application but will be provided at the time of interview</p>
                        <input id="noc_under" name="userfile10" type="file" class="form-control input-md" required="">
                      </div>
                    </div>
                  </div>

                  <script>
                    // Function to handle file selection for NOC or Undertaking upload
                    document.getElementById('noc_under').addEventListener('change', function() {
                      var file = this.files[0];
                      if (file) {
                        var viewNOCUndertakingLink = document.getElementById('viewNOCUndertaking');
                        viewNOCUndertakingLink.setAttribute('href', URL.createObjectURL(file));
                        viewNOCUndertakingLink.style.display = 'inline-block';
                      }
                    });
                  </script>


                  <!-- 10 years post phd exp certificate  -->


                  <div class="col-md-5">
                    <div class="panel panel-danger">
                      <div class="panel-heading">
                        Post PhD Experience Certificate/All Experience Certificates/Last Pay Slip *
                        <a href="#" class="btn-sm btn-danger pull-right" id="viewPostPhdExperience" style="display: none;" target="_blank">View Uploaded File</a>
                      </div>
                      <div class="panel-body">
                        <p class="upload_crerti">Upload Certificate</p>
                        <input id="post_phd_10" name="userfile8" type="file" class="form-control input-md" required="">
                      </div>
                    </div>
                  </div>

                  <script>
                    // Function to handle file selection for Post PhD Experience Certificate/All Experience Certificates/Last Pay Slip upload
                    document.getElementById('post_phd_10').addEventListener('change', function() {
                      var file = this.files[0];
                      if (file) {
                        var viewPostPhdExperienceLink = document.getElementById('viewPostPhdExperience');
                        viewPostPhdExperienceLink.setAttribute('href', URL.createObjectURL(file));
                        viewPostPhdExperienceLink.style.display = 'inline-block';
                      }
                    });
                  </script>






                  <!-- Misc certificate  -->



                  <div class="col-md-12">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        Upload any other relevant document in a single PDF (For example award certificate, experience certificate etc). If there are multiple documents, combine all the documents in a single PDF &lt; 1MB.
                        <a href="#" class="btn-sm btn-info pull-right" id="viewMiscDocument" style="display: none;" target="_blank">View Uploaded File</a>
                      </div>
                      <div class="panel-body">
                        <div class="col-md-5">
                          <p class="upload_crerti">Upload any other document</p>
                        </div>
                        <div class="col-md-7">
                          <input id="misc_certi" name="userfile6" type="file" class="form-control input-md">
                        </div>
                      </div>
                    </div>
                  </div>

                  <script>
                    // Function to handle file selection for any other document upload
                    document.getElementById('misc_certi').addEventListener('change', function() {
                      var file = this.files[0];
                      if (file) {
                        var viewMiscDocumentLink = document.getElementById('viewMiscDocument');
                        viewMiscDocumentLink.setAttribute('href', URL.createObjectURL(file));
                        viewMiscDocumentLink.style.display = 'inline-block';
                      }
                    });
                  </script>



                  <div class="col-md-2">
                    <!-- <input type="submit" value="Upload" name="upload_submit" class="btn btn-danger" required="" /> -->
                    <!-- <br /><br /> -->
                  </div>
                  <!-- </form> -->
                </div>



              </div>
            </div>
            <!-- </div> -->

          </div>
        </div>



        <!-- Signature certificate  -->

        <div class="row">
          <div class="col-md-4">
            <div class="panel panel-danger">
              <div class="panel-heading">Upload your Signature in JPG only</div>
              <div class="panel-body">
                <img id="signaturePreview" src="" style="height: 52px; width: 100px; margin-top: -10px;">
                <input id="signature" name="userfile5" type="file" class="form-control input-md">
              </div>
              <p class="upload_crerti"></p>
            </div>
          </div>
        </div>

        <script>
          // Function to handle file selection for signature upload
          document.getElementById('signature').addEventListener('change', function() {
            var file = this.files[0];
            if (file) {
              var signaturePreview = document.getElementById('signaturePreview');
              signaturePreview.src = URL.createObjectURL(file);
            }
          });
        </script>


        <h4 style="text-align:center; font-weight: bold; color: #6739bb;">22. Referees *</h4>

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-success">
              <div class="panel-heading">Fill the Details</div>
              <div class="panel-body">
                <table class="table table-bordered">
                  <tbody id="acde">

                    <tr height="30px">
                      <th class="col-md-2"> Name </th>
                      <th class="col-md-3"> Position </th>
                      <th class="col-md-3"> Association with Referee</th>
                      <th class="col-md-3"> Institution/Organization</th>
                      <th class="col-md-2"> E-mail </th>
                      <th class="col-md-2"> Contact No.</th>
                    </tr>




                    <tr height="60px">
                      <td class="col-md-2">
                        <input id="ref_name1" name="ref_name[]" type="text" value="" placeholder="Name" class="form-control input-md" required="" autofocus="">
                      </td>

                      <td class="col-md-2">
                        <input id="position1" name="position[]" type="text" value="" placeholder="Position" class="form-control input-md" required="">
                      </td>

                      <td class="col-md-2">
                        <select id="association_referee1" name="association_referee[]" class="form-control input-md" required="">

                          <option value="">Select</option>
                          <option value="Thesis Supervisor">Thesis Supervisor</option>
                          <option value="Postdoc Supervisor">Postdoc Supervisor</option>
                          <option value="Research Collaborator">Research Collaborator</option>
                          <option value="Other">Other</option>
                        </select>
                      </td>


                      <td class="col-md-2">
                        <input id="org1" name="org[]" type="text" value="" placeholder="Institution/Organization" class="form-control input-md" required="">
                      </td>
                      <td class="col-md-2">
                        <input id="email1" name="email_2[]" type="email" value="" placeholder="E-mail" class="form-control input-md" required="">
                      </td>
                      <td class="col-md-2">
                        <input id="phone1" name="phone[]" type="text" value="" placeholder="Contact No." class="form-control input-md" maxlength="20" required="">
                      </td>


                    </tr>



                    <tr height="60px">
                      <td class="col-md-2">
                        <input id="ref_name2" name="ref_name[]" type="text" value="" placeholder="Name" class="form-control input-md" required="" autofocus="">
                      </td>

                      <td class="col-md-2">
                        <input id="position2" name="position[]" type="text" value="" placeholder="Position" class="form-control input-md" required="">
                      </td>

                      <td class="col-md-2">
                        <select id="association_referee2" name="association_referee[]" class="form-control input-md" required="">

                          <option value="">Select</option>
                          <option value="Thesis Supervisor">Thesis Supervisor</option>
                          <option value="Postdoc Supervisor">Postdoc Supervisor</option>
                          <option value="Research Collaborator">Research Collaborator</option>
                          <option value="Other">Other</option>
                        </select>
                      </td>


                      <td class="col-md-2">
                        <input id="org2" name="org[]" type="text" value="" placeholder="Institution/Organization" class="form-control input-md" required="">
                      </td>
                      <td class="col-md-2">
                        <input id="email2" name="email_2[]" type="email" value="" placeholder="E-mail" class="form-control input-md" required="">
                      </td>
                      <td class="col-md-2">
                        <input id="phone2" name="phone[]" type="text" value="" placeholder="Contact No." class="form-control input-md" maxlength="20" required="">
                      </td>


                    </tr>



                    <tr height="60px">
                      <td class="col-md-2">
                        <input id="ref_name3" name="ref_name[]" type="text" value="" placeholder="Name" class="form-control input-md" required="" autofocus="">
                      </td>

                      <td class="col-md-2">
                        <input id="position3" name="position[]" type="text" value="" placeholder="Position" class="form-control input-md" required="">
                      </td>

                      <td class="col-md-2">
                        <select id="association_referee3" name="association_referee[]" class="form-control input-md" required="">

                          <option value="">Select</option>
                          <option value="Thesis Supervisor">Thesis Supervisor</option>
                          <option value="Postdoc Supervisor">Postdoc Supervisor</option>
                          <option value="Research Collaborator">Research Collaborator</option>
                          <option value="Other">Other</option>
                        </select>
                      </td>


                      <td class="col-md-2">
                        <input id="org3" name="org[]" type="text" value="" placeholder="Institution/Organization" class="form-control input-md" required="">
                      </td>
                      <td class="col-md-2">
                        <input id="email3" name="email_2[]" type="email" value="" placeholder="E-mail" class="form-control input-md" required="">
                      </td>
                      <td class="col-md-2">
                        <input id="phone3" name="phone[]" type="text" value="" placeholder="Contact No." class="form-control input-md" maxlength="20" required="">
                      </td>


                    </tr>


                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>

        <!-- Payment file upload           -->



        <!-- Referees Details -->


        <input type="hidden" name="ci_csrf_token" value="" />


        <hr>
        <div class="form-group">
          <div class="col-md-10">
            <!-- <a href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/acde" class="btn btn-primary pull-left">BACK</a> -->
            <a href="page7.php" class="btn btn-primary pull-left">
              <div>&#9664;</div>
            </a>

            <!-- <button type="submit" name="submit" value="Submit" class="btn btn-success">SAVE</button> -->


          </div>

          <div class="col-md-2">
            <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-success pull-right">SAVE & NEXT</button>
            <!-- <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-success pull-right">Final Submission</button> -->

          </div>


        </div>

      </form>
    </div>
  </div>
  <script type="text/javascript">
    function confirm_box() {
      if (confirm("Dear Candidate, \n\nAre you sure that you are ready to submit the application? Press OK to submit the application. Press CANCEL to edit. \nOnce you press OK you cannot make any changes.\n\nThank you.")) {
        return true;
      } else {
        return false;
      }
    }

    function submit_frm() {
      alert();
      document.getElementById("upload_frm").submit();
    }
  </script>



  <script type="text/javascript">
    $(document).ready(function() {

      var list1 = document.getElementById('applicant_cate');

      list1.options[0] = new Option('Select/Category', '');
      list1.options[1] = new Option('Other Applicants', 'Other Applicants');
      list1.options[2] = new Option('OBC-NC, PwD, EWS and Female Applicants', 'OBC-NC, PwD, EWS and Female Applicants');
      list1.options[3] = new Option('SC, ST and Faculty Applicants from IIT Indore', 'SC, ST and Faculty Applicants from IIT Indore');


      $("#applicant_cate option").each(function() {

        if ($(this).val() == selectoption) {
          $(this).attr('selected', 'selected');
        }
        // Add $(this).val() to your list
      });

      getFoodItem();
      $("#payment_amount option").each(function() {

        if ($(this).val() == selectsubthemeoption) {
          $(this).attr('selected', 'selected');
        }
        // Add $(this).val() to your list
      });
    });


    function getFoodItem() {

      var list1 = document.getElementById('applicant_cate');
      var list2 = document.getElementById("payment_amount");
      var list1SelectedValue = list1.options[list1.selectedIndex].value;


      if (list1SelectedValue == 'Other Applicants') {

        // list2.options.length=0;
        // list2.options[0] = new Option('Select Amount', '');
        list2.options[0] = new Option('INR 1000', 'INR 1000');


      } else if (list1SelectedValue == 'OBC-NC, PwD, EWS and Female Applicants') {

        // list2.options.length=0;
        // list2.options[0] = new Option('Select Amount', '');
        list2.options[0] = new Option('INR 500', 'INR 500');


      } else if (list1SelectedValue == 'SC, ST and Faculty Applicants from IIT Indore') {

        // list2.options.length=0;
        // list2.options[0] = new Option('Select Amount', '');
        list2.options[0] = new Option('NIL', 'NIL');


      }



    }
  </script>

  <?php include('includes/footer.php'); ?>