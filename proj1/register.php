<?php 
session_start();
$page_title="Faculty Register | IIT Patna";
include("includes/header.php"); 
?>

<div class="container" style=" border-radius:10px; margin-top:20px;">
  <div class="row" style="border-width: 2px; border-style: solid; border-radius: 10px; box-shadow: 0px 1px 30px 1px #284d7a; height:500px; background-color:#F7FFFF;">
    <div class="col-md-6 col-sm-6 col-xs-6">
      <img src="images/logo.png" style="margin-left:22%; margin-top: 8%;width: 400px; height: auto;">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
      <h3>CREATE YOUR PROFILE</h3><br />
      <form action="code.php" method="post" class="form" role="form">
        <input type="hidden" name="ci_csrf_token" value="" />
        <div class="row">
          <div class="col-xs-6 col-md-6">
            <input class="form-control" value='' name="firstname" id='firstname' placeholder="First name" type="text" required="" autofocus />
          </div>
          <div class="col-xs-6 col-md-6">
            <input class="form-control" name="lastname" id='lastname' value='' required="" placeholder="Last name" type="text" />
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-md-6">
            <input class="form-control" name="email" id='email' placeholder="Your email" value='' required="" type="email" />
            <?php
                    if(isset($_SESSION['email_not_exist']))
                    {
                        ?>
                        <div class='alert alert-danger'><p>This Email-id is Already Register !</p></div>
                        <?php
                        unset($_SESSION['email_not_exist']);
                    }
                ?>
          </div>
          <div class="col-xs-6 col-md-6">
            <select id="cast" name="cast" id='cast' class="form-control input-md" required="">
              <option value="">Select Category</option>
              <option value="UR">UR</option>
              <option value="OBC">OBC</option>
              <option value="SC">SC</option>
              <option value="ST">ST</option>
              <option value="PWD">PWD</option>
              <option value="EWS">EWS</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <input class="form-control" name="password" id='password' placeholder="New password" required="" type="password" />
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <input class="form-control" name="re_password" id="re_password" placeholder="Retype - new password" required="" type="password" />
            <?php
                    if(isset($_SESSION['password_not_match']))
                    {
                        ?>
                        <div class='alert alert-danger'><p>The Re-Password field does not match the Password field.</p></div>
                        <?php
                        unset($_SESSION['password_not_match']);
                    }
                ?>
          </div>
        </div>
        <div class="row">
          <input id="created_at" name="created_at" type="hidden">
          <div class="col-xs-6 col-md-6">
            <img src="includes/captcha.php" alt="CAPTCHA security code" style="width: 260px; height: auto;" />
          </div>
          <div class="col-xs-6 col-md-6">
            <input class="form-control" name="captcha" placeholder="Insert image text" required="" type="text" />
            <?php
              if(isset($_SESSION['captcha_mismatch']))
              {
            ?>
                <div class='alert alert-danger'>The Captcha text does not match. please try again ! Thank you</div>
            <?php
                unset($_SESSION['captcha_mismatch']);
              }
            ?>
          </div>
          <div class="col-xs-12 col-md-12">
            <h5><strong>
                <font color="red">Note:</font><br /><br /><br />
                <font color="#124f93">
                  1. Applicant should kindly check their email for activation link to access the portal.
                  <br />
                  2. Please check SPAM folder also, in case activation link is not received in INBOX.<br />
                  3. Applicant applying for more than one position/ department should use <strong>
                    <font color="red">different email id</font>
                  </strong> for each application.
                </font>
              </strong><br /><br /><br />
            </h5>
            <button class="btn btn-sm btn-primary" type="submit" name="submit" value="Submit">Register</button>
            <strong class=" pull-right" style="color: green;">If registered <a href='index.php' class="btn btn-sm btn-success">Login Here</a></strong>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<br />
<div class="container">
  <div class="col-md-8 col-md-offset-2" style="text-align: center!important; font-weight: bold; color: black!important;">
  </div>
</div>
<script>
    // Retrieve CAPTCHA code from hidden input field and display it as text
    document.getElementById("captchaText").innerText = document.getElementById("captchaCode").value;
</script>
<?php include('includes/footer.php'); ?>
