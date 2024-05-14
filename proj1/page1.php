<?php 
session_start();
$page_title="Update your personal details";
include('includes/header.php'); 
?>
<!-- <body onload="updateAb()">  -->

<style type="text/css">
  body {
    padding-top: 30px;
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
    margin-bottom: 20px;
  }

  label {
    padding: 0 !important;
    text-align: left !important;
    font-family: 'Noto Serif', serif;
  }

  span {
    font-size: 1.2em;
    font-family: 'Oswald', sans-serif !important;
    text-align: left !important;
    padding: 0px 10px 0px 0px !important;
    /*font-family: 'Noto Serif', serif;*/
    font-weight: bold;
    color: #414002;
    /*margin-bottom: 20px!important;*/

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

  .btn-primary {
    padding: 9px;
  }
</style>


<body>

  <script type="text/javascript">
    //   $("#dob").focusout(function(){
    //     alert();
    //   ageCalculator();
    // });
    function ageCalculator() {
      // alert('HI');  

      debugger;
      var birthdate = document.getElementById('dob').value; // in "dd/MM/yyyy" format  
      var senddate = document.getElementById('Date').value; // in "dd/MM/yyyy" format  
      var x = birthdate.split("/");
      var y = senddate.split("/");
      var bdays = x[0];
      var bmonths = x[1];
      var byear = x[2];
      //alert(bdays);  
      var sdays = y[0];
      var smonths = y[1];
      var syear = y[2];
      // alert(sdays);  
      if (sdays < bdays) {
        sdays = parseInt(sdays) + 30;
        smonths = parseInt(smonths) - 1;
        //alert(sdays);  
        var fdays = sdays - bdays;
        //alert(fdays);  
      } else {
        var fdays = sdays - bdays;
      }
      if (smonths < bmonths) {
        smonths = parseInt(smonths) + 12;
        syear = syear - 1;
        var fmonths = smonths - bmonths;
      } else {
        var fmonths = smonths - bmonths;
      }
      var fyear = syear - byear;
      var year_to_days = fyear * 365;
      var month_to_days = fmonths * 30;
      var newage = (fyear + ' years ' + fmonths + ' months ' + fdays + ' days');


      var newage_year = (year_to_days + month_to_days + fdays);

      document.getElementById("age").value = newage;
      document.getElementById("age_days").value = newage_year;
      // alert(newage);  
      // document.getElementById("btnClickedValue").value = newage;
      // window.location.href = window.location.href+'?newage='+newage;
    }
  </script>

  <script type="text/javascript">
    function updateAb() {

      alert('hi');
    }
  </script>
  <!-- <script type="text/javascript">
$(function () 
{
$('#dob').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true,
    onSelect: function() {
             updateAb(selected);
        }

});
});
</script> -->
  <!-- all bootstrap buttons classes -->
  <!-- 
class="btn btn-sm, btn-lg, "
color - btn-success, btn-primary, btn-default, btn-danger, btn-info, btn-warning
-->



  <a href='layout.php'></a>

  <div class="container">

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 well">
        <form class="form-horizontal" action="page1_code.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="ci_csrf_token" value="" />
          <fieldset>

            <legend>

              <div class="row">
                <div class="col-md-8">
                  <h4>Welcome : <font color="#025198"><strong><?=$_SESSION['auth_user']['username'];?></strong></font>
                  </h4>
                </div>

                <div class="col-md-3">

                  <a href='#' class='btn btn-sm btn-info pull-right' onclick="get_username('<?=$_SESSION['auth_user']['username'];?>', 1128)" data-target='#passModal' data-toggle='modal'>Change Password</a>


                </div>
                <div class="col-md-1">
                  <a href="index.php" class="btn btn-sm btn-success  pull-right">Logout</a>
                </div>
              </div>


            </legend>



            <!--  <div class="panel panel-danger">
        <div class="panel-heading">General Instructions for applying portal online:</div>
          <div class="panel-body">
          <ol style="font-size: 1.1em;">
          <strong>Welcome to the Faculty Recruitment Portal of IIT Indore. Please follow below mentioned step(s) for applying online:</strong>

           <li>Get a login: Create yourself a login in this site to get started with the application process. Choose the option "SIGN UP" in the user login menu, enter a valid email address and password. An email will be sent from IIT Indore's mail-id for verification. Please click on the link provided in the mail to activate your account and to login in the online faculty recruitment portal. Use the password along with the login email id you provided to login to this site. If you do not see any email it is advised to check your spam folder and move this email to your inbox.</li>

           <li>You can change your password or request to reset the password on this portal.</li>
           <li>Login to the site and follow the links in the Main menu to fill your application form online.</li>
           <li>Email alerts will be sent to your email address, please make sure that mails with the from address <strong>"@iiti.ac.in" do not get caught in your spam / junk mail folder.</strong></li>
           <li>It is requested not to fill the form in Private Browsing Mode or Incognito Mode.</li>
           <li><strong>Your application is not submitted until you 'click' submit button.</strong> After submission you will receive an <strong>acknowledgement mail on your registered mail-id.</strong></li>  
           <li>Online information can be edited till the final submission but can not be edited/deleted, once the form is submitted. </li>
           <li>Rename your documents as yourname_some_unique_number before uploading them on the website.</li>
           <li>Fields marked with * are mandatory to fill.</li>
           <li>Latest coloured passport size photo of the applicant, with white background, to be uploaded <font color="red"><strong>JPG/JPEG format (less than 1 MB)</strong></font> .</li>
           <li>Upload all documents only in <font color="red"><strong>PDF format (less than 1 MB) </strong></font></li>
           <li>Applicants applying for more than one position/department should use <font color="red"><strong>different email id</strong></font> for each application.</li>
           <li>For any further Technical Details / Queries, send us a mail on <font color="red"><strong>fac.recruit [at] iiti.ac.in</strong></font> only.</li>

          </ol>  

        <div class="col-md-12">
        <input type="checkbox"  id="read_status" name="read_status" value="1" required="" onclick="show1()"/>  
         <strong style="font-size: 1.1em; color: #9d1e22;"> I have read the instructions and will follow all instructions applying portal online</strong>
        </div>
        </div>
      </div>
     -->

            <div id="project_show">

              <div class="row">
                <div class="col-md-12">

                  <label class="col-md-2 control-label" for="adv_num">Advertisement Number *</label>
                  <div class="col-md-4">

                    <select id="adv_num" name="adv_num" class="form-control input-md" required="">

                      <option value="">Select</option>

                      <option value="IITP/FACREC-CHE/2023/JULY/02">IITP/FACREC-CHE/2023/JULY/02</option>
                    </select>

                  </div>

                  <label class="col-md-2 control-label" for="doa">Date of Application </label>
                  <div class="col-md-4">
                    <input id="doa" name="doa" type="text" readonly="readonly" placeholder="" class="form-control input-md" required="">
                  </div>
                  
                  <script>
                    // Get the current date
                    var currentDate = new Date();
                  
                    // Format the date as DD/MM/YYYY
                    var formattedDate = currentDate.getDate() + '/' + (currentDate.getMonth() + 1) + '/' + currentDate.getFullYear();
                  
                    // Set the value of the input field to the current date
                    document.getElementById('doa').value = formattedDate;
                  </script>


                  <label class="col-md-2 control-label" for="ref_num">Application Number</label>
                  <div class="col-md-4">
                    <input id="ref_num" name="ref_num" type="text" readonly="readonly" placeholder="" class="form-control input-md" required="">
                  </div>

                  <script>
                    // Function to generate a random number between min (inclusive) and max (inclusive)
                    function getRandomNumber(min, max) {
                      return Math.floor(Math.random() * (max - min + 1)) + min;
                    }
                  
                    // Generate a random number between 1712610200 and 1712610300
                    var randomNumber;
                    do {
                      randomNumber = getRandomNumber(1712610200, 1712610700);
                    } while (randomNumber === parseInt(document.getElementById('ref_num').value));
                  
                    // Set the value of the input field to the generated random number
                    document.getElementById('ref_num').value = randomNumber;
                  </script>


                  <label class="col-md-2 control-label" for="post">Post Applied for *</label>
                  <div class="col-md-4">
                    <select id="post" name="post" class="form-control input-md" required="">
                      <option value="">Select</option>
                      <option value="Professor">Professor</option>
                      <option value="Associate Professor">Associate Professor</option>
                      <option value="Assistant Professor Grade I">Assistant Professor Grade I</option>
                      <option value="Assistant Professor Grade II">Assistant Professor Grade II</option>
                    </select>
                  </div>

                  <label class="col-md-2 control-label" for="dept">Department/School *</label>
                  <div class="col-md-4">
                    <select id="dept" name="dept" class="form-control input-md" required="">
                      <option value="">Select</option>
                      <option value="Chemical Engineering">Chemical Engineering</option>
                    </select>

                  </div>
                </div>
              </div>
              <hr>


              <!-- Form Name -->


              <!-- Text input-->
              <!-- <h5><font color="#025198"><strong>1. Name:</strong></font></h5>             -->
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-success">
                    <div class="panel-heading">1. Personal Details <small class="pull-right">Upload/Update Photo *</small></div>
                    <div class="panel-body" style="height: 390px">
                      <div class="col-md-10">
                        <div class="row">

                          <span class="col-md-2 control-label" for="fname">First Name *</span>
                          <div class="col-md-4">
                            <input id="fname" value="" name="fname" type="text" placeholder="First name" class="form-control input-md" maxlength="15" required="">
                          </div>


                          <span class="col-md-2 control-label" for="mname">Middle Name</span>
                          <div class="col-md-4">
                            <input id="mname" value="" name="mname" name="mname" type="text" placeholder="Middle name" class="form-control input-md" maxlength="12">
                          </div>

                          <span class="col-md-2 control-label" for="lname">Last Name *</span>
                          <div class="col-md-4">
                            <input id="lname" value="" name="lname" name="lname" type="text" placeholder="Last name" class="form-control input-md" maxlength="15" required="">
                          </div>


                          <span class="col-md-2 control-label" for="nationality">Nationality *</span>
                          <div class="col-md-4">
                            <select id="nationality" name="nationality" class="form-control input-md" required="">
                              <option value="">Select</option>
                              <!-- <option  value=" India"> India</option> -->
                              <option value=" Indian"> Indian</option>
                              <!-- <option  value="PIO">PIO</option> -->
                              <option value="OCI">OCI</option>
                            </select>
                          </div>



                          <!--  <span class="col-md-2 control-label" for="nationality">Nationality </span>  
                  <div class="col-md-4">
                  <input id="nationality" value="" name="nationality" type="text" placeholder="Nationality" class="form-control input-md" maxlength="15" required="">
                  </div> -->

                          <span class="col-md-2 control-label" for="dob">Date of Birth DD/MM/YYYY *</span>
                          <div class="col-md-4">
                            <!--  <p id="dobdiv"> -->
                            <input id="dob" name="dob" value="" type="text" placeholder="DD/MM/YYYY" class="form-control input-md" required="" onfocusout="ageCalculator()">
                            <!-- </p> -->

                            <input type="hidden" name="Date" id="Date" value="31/08/2023" />
                            <!-- <br/> 
                  <input type="hidden" id="btnClickedValue" name="btnClickedValue" value="" />
                  <button type="Button" onclick="ageCalculator()">Calculate</button >   -->


                          </div>

                          <!-- <span class="col-md-2 control-label" for="age">Age</span>  
                  <div class="col-md-4">
                  <input id="age" name="age"  value="" type="text" class="form-control input-md" readonly>

                  <input id="age_days" name="age_days"  value="" type="hidden" class="form-control input-md" readonly>

                  </div> -->


                          <span class="col-md-2 control-label" for="gender">Gender *</span>
                          <div class="col-md-4">
                            <select id="gender" name="gender" class="form-control input-md" required="">
                              <option value="">Select</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Other">Other</option>
                            </select>
                          </div>


                          <span class="col-md-2 control-label" for="mstatus">Marital Status *</span>
                          <div class="col-md-4">
                            <select id="mstatus" name="mstatus" class="form-control input-md" required="">
                              <option value="">Select</option>
                              <option value="Married">Married</option>
                              <option value="Unmarried">Unmarried</option>
                              <option value="Other">Other</option>
                            </select>
                          </div>

                          <span class="col-md-2 control-label" for="cast">Category</span>
                          <div class="col-md-4">
                            <input id="cast" name="cast" type="text" placeholder="cast" readonly='readonly' value="<?=$_SESSION['auth_user']['cast'];?>" class="form-control input-md" required="">
                          </div>


                          <span class="col-md-2 control-label" for="cast">Upload Certificate *</span>
                          <div class="col-md-4">
                              <a href="#" id="viewUploadedFile" class="btn btn-sm btn-success" style="display: none;" target="_blank">View Uploaded File</a>
                              <input id="cast_certificate" name="userfile1" type="file" class="form-control input-md" required="">
                          </div>
                                            
                          <script>
                              // Function to handle file selection
                              document.getElementById('cast_certificate').addEventListener('change', function() {
                                  var file = this.files[0];
                                  if (file) {
                                      var viewUploadedFileLink = document.getElementById('viewUploadedFile');
                                      var imageURL = URL.createObjectURL(file); // Store the URL in a variable
                                      viewUploadedFileLink.setAttribute('href', imageURL);
                                      viewUploadedFileLink.style.display = 'inline-block';
                                                             
                                      // Print the URL
                                      // console.log("Uploaded image URL:", imageURL);
                                  }
                              });
                          </script>
                          
                            

                          <!--  <div class="col-md-6"> 
                  </div> -->
                        </div>

                        <div class="row">
                          <span class="col-md-2 control-label" for="mstatus">ID Proof *</span>
                          <div class="col-md-4">

                            <select id="id_proof" name="id_proof" class="form-control input-md" required="">
                              <option value="">Select</option>
                              <!-- <option value="">Select</option> -->
                              <!--  <option value="AADHAR">AADHAR</option>
                       <option value="PAN-CARD">PAN-CARD</option>
                       <option value="DRIVING-LICENSE">DRIVING-LICENSE</option>
                       <option value="PASSPORT">PASSPORT</option>
                       <option value="OTHER">OTHER</option> -->


                              <option value="AADHAR">AADHAR</option>
                              <option value="PAN-CARD">PAN-CARD</option>
                              <option value="DRIVING-LICENSE">
                                DRIVING-LICENSE</option>
                              <option value="VOTER ID">VOTER ID</option>
                              <option value="PASSPORT">PASSPORT</option>
                              <option value="RATION CARD">RATION CARD</option>

                              <option value="OTHERS">OTHERS</option>
                            </select>
                          </div>



                          <span class="col-md-2 control-label" for="cast">Upload ID Proof *</span>
                          <div class="col-md-4">
                              <a href="#" id="viewIDProof" class="btn btn-sm btn-success" style="display: none;" target="_blank">View Uploaded File</a>
                              <input id="id_card_file" name="userfile2" type="file" class="form-control input-md" required="">
                          </div>

                          <script>
                              // Function to handle file selection for ID proof upload
                              document.getElementById('id_card_file').addEventListener('change', function() {
                                  var file = this.files[0];
                                  if (file) {
                                      var viewIDProofLink = document.getElementById('viewIDProof');
                                      viewIDProofLink.setAttribute('href', URL.createObjectURL(file));
                                      viewIDProofLink.style.display = 'inline-block';
                                  }
                              });
                          </script>


                          <span class="col-md-2 control-label" for="father_name">Father's Name *</span>
                          <div class="col-md-4">
                            <input id="father_name" value="" name="father_name" name="father_name" type="text" placeholder="Father's Name" class="form-control input-md" maxlength="30" required="">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2 pull-right">
                          <img id="uploadedPhoto" src="" class="thumbnail pull-right" height="150" width="130" style="display: none;">
                          <input id="photo" name="userfile" type="file" class="form-control input-md" required="">
                          <strong id="uploadInstructions">Please upload your recent photo <font color="red">( <1 MB) in JPG | JPEG format</font> only.</strong>
                      </div>

                      <script>
                          // Function to handle file selection for photo upload
                          document.getElementById('photo').addEventListener('change', function() {
                              var file = this.files[0];
                              if (file) {
                                  // Check if the file size is less than 1MB and it's of JPG/JPEG format
                                  if (file.size <= 1024 * 1024 && (file.type === 'image/jpeg' || file.type === 'image/jpg')) {
                                      var uploadedPhoto = document.getElementById('uploadedPhoto');
                                      var uploadInstructions = document.getElementById('uploadInstructions');
                                  
                                      // Display the uploaded photo
                                      uploadedPhoto.style.display = 'block';
                                      uploadedPhoto.src = URL.createObjectURL(file);
                                  
                                      // Hide the upload instructions
                                      uploadInstructions.style.display = 'none';
                                  } else {
                                      alert('Please upload a file less than 1 MB in JPG | JPEG format.');
                                  }
                              }
                          });
                      </script>

                    </div>
                  </div>
                </div>
              </div>




              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-success">
                    <!-- <div class="panel-heading">2. Address *</div> -->
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-6">
                          <span class="control-label" for="cadd">Correspondence Address </span>
                          <br />
                          <br />
                          <textarea style="height:40px" placeholder="Street" class="form-control input-md" name="cadd" maxlength="200" required=""></textarea>

                          <textarea style="height:40" placeholder="City" class="form-control input-md" name="cadd1" maxlength="200" required=""></textarea>

                          <textarea style="height:40" placeholder="State" class="form-control input-md" name="cadd2" maxlength="200" required=""></textarea>

                          <textarea style="height:40" placeholder="Country" class="form-control input-md" name="cadd3" maxlength="200" required=""></textarea>

                          <textarea style="height:40;" placeholder="PIN/ZIP" class="form-control input-md" name="cadd4" maxlength="6" required=""></textarea>


                        </div>


                        <div class="col-md-6">
                          <span class="control-label" for="padd">Permanent Address </span>
                          <br />
                          <br />
                          <textarea style="height:40px" placeholder="Street" class="form-control input-md" name="padd" maxlength="200" required=""></textarea>

                          <textarea style="height:40" placeholder="City" class="form-control input-md" name="padd1" maxlength="200" required=""></textarea>

                          <textarea style="height:40" placeholder="State" class="form-control input-md" name="padd2" maxlength="200" required=""></textarea>

                          <textarea style="height:40" placeholder="Country" class="form-control input-md" name="padd3" maxlength="200" required=""></textarea>


                          <textarea style="height:40;" placeholder="PIN/ZIP" class="form-control input-md" name="padd4" maxlength="6" required=""></textarea>


                        </div>

                      </div>


                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-success">
                    <!-- <div class="panel-heading">3. Contact Details (with STD/ISD code)</div> -->
                    <div class="panel-body">
                      <span class="col-md-2 control-label" for="mobile">Mobile *</span>
                      <div class="col-md-4">
                        <input id="mobile" value="" name="mobile" type="text" placeholder="Mobile" class="form-control input-md" required="" maxlength="20">
                      </div>



                      <span class="col-md-2 control-label" for="email">Email</span>
                      <div class="col-md-4">
                        <input id="email" name="email" type="text" placeholder="email" readonly='readonly' value="<?=$_SESSION['auth_user']['email'];?>" class="form-control input-md" required="">
                      </div>

                      <span class="col-md-2 control-label" for="mobile_2">Alternate Mobile </span>
                      <div class="col-md-4">
                        <input id="mobile_2" value="" name="mobile_2" type="text" placeholder="Alternate Mobile " class="form-control input-md" maxlength="20">
                      </div>

                      <span class="col-md-2 control-label" for="email_2">Alternate Email </span>
                      <div class="col-md-4">
                        <input id="email_2" value="" name="email_2" type="email" placeholder="Alternate Email" class="form-control input-md">
                      </div>


                      <span class="col-md-2 control-label" for="landline">Landline Number</span>
                      <div class="col-md-4">
                        <input id="landline" value="" name="landline" type="text" placeholder="Landline Number" class="form-control input-md" maxlength="20">
                      </div>



                    </div>
                  </div>
                </div>
              </div>


              <div class="form-group">

                <div class="col-md-12">
                  <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-success pull-right">SAVE & NEXT</button>
                </div>


              </div>

              <!-- add the div for hide -->
            </div>
      </div>

      </fieldset>
      </form>


    </div>
  </div>


  <div id="passModal" class="modal fade" role="dialog">
    <form action="page1_code.php" method="post">
    <input type="hidden" name="email_id" value="<?=$_SESSION['auth_user']['email'];?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2>Change Password</h2>

          </div>
          <div class="modal-body">
            <h3>Change Password For : <font color="#3377a0"><strong id="username_mod"></strong></font>
            </h3>
            
            <div class="form-group">
              <label>Current Password</label>
              <input type="password" name="cr_password" placeholder="Current Password" class="form-control" />
            </div>
            <div class="form-group">
              <label>New Password</label>
              <input type="password" name="n_password" placeholder="New Password" class="form-control" />
            </div>
            <div class="form-group">
              <label>Confirm New Password</label>
              <input type="password" name="cn_password" placeholder="New Confirm Password" class="form-control" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="change_password" value="Submit" class="btn btn-info">Submit</button>
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </form>
  </div>


  <script type="text/javascript">
    $(document).ready(function() {

      var show_status = '';
      if (show_status == 1) {
        show1();
      }

    });

    function get_username(u, fid) {
      document.getElementById("username_mod").innerHTML = u;
      // document.getElementById("fname").value=u;
      document.getElementById("fid").value = fid;
    }
    // function form_submit(a, b)
    // {
    //     window.location="https://ofa.iiti.ac.in/facrec_che_2023_july_02/news/change/"+a+"/"+b;
    // }
  </script>


  <script type="text/javascript">
    function show_none() {
      // alert("Hello! I am an alert box!!");
      document.getElementById('project_show').style.display = 'none';
    }

    function show1() {
      // alert("Hello! I am an alert box!!");
      document.getElementById('project_show').style.display = 'block';
    }
  </script>

  <?php include('includes/footer.php'); ?>