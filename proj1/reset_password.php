<?php
session_start();
$page_title = "Faculty Login";
include('includes/header.php');
?>

<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet3.css">

<div class="container" style="border-radius:10px; height:500px; margin-top:50px;">
    <div class="col-md-10 col-md-offset-1">
        <div class="row" style="border-width: 2px; border-style: solid; border-radius: 10px; box-shadow: 0px 1px 30px 1px #284d7a; background-color:#F7FFFF;">

            <div class="col-md-6" style=" height:403px; border-radius: 10px 0px 0px 10px;"><img src="images/logo.png" style="margin-left:22%; margin-top: 8%;width: 350px; height: auto;">
            </div>

            <div class="col-md-6" style="border-radius: 0px 10px 10px 0px; height: 403px;">
                <br />
                <div class="col-md-10 col-md-offset-1">
                    <h3 style="text-align: center; color:green;"><strong>CHANGE PASSWORD</strong></h3><br />

                    <form action="reset_code.php" method="post" class="form" role="form">
                        <input type="hidden" name="password_token" value="<?php if(isset($_GET['token'])){echo $_GET['token'];} ?>">
                        <input type="hidden" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>">

                        <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            <input name="new_password" placeholder="Please Enter Your New Password" require type="password" autofocus="" />
                        </div>
                        <br />

                        <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            <input name="confirm_password" placeholder="Confirm Your New Password" require type="password" />
                        </div>
                        <br />
                        <br />
                        <button type="submit" name="password_update" value="Submit">Change</button>
                    </form>
                    <span style="text-align: center;">
                    </span>
                </div>
                <br />

            </div>




        </div>
    </div>
    <br />

</div>

<?php include('includes/footer.php');?>