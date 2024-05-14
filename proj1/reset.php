<?php 
session_start();
$page_title="Faculty Application | IIT Patna";
include("includes/header.php"); 
?>

    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet3.css">

    <div class="container" style="border-radius:10px; height:500px; margin-top:50px;">
        <div class="col-md-10 col-md-offset-1">

            <div class="row" style="border-width: 2px; border-style: solid; border-radius: 10px; box-shadow: 0px 1px 30px 1px #284d7a; background-color:#F7FFFF;">


                <div class="col-md-6" style=" height:403px; border-radius: 10px 0px 0px 10px;"><img src="images/logo.png" style="margin-top: 6%; margin-left: 20%;width:350px;">
                </div>

                <div class="col-md-6" style="border-radius: 0px 10px 10px 0px; height: 403px;">
                    <br />
                    <div class="col-md-10 col-md-offset-1">
                        <h3 style="text-align: center; color:red;"><strong>FORGOT PASSWORD</strong></h3><br />

                        <form action="reset_code.php" method="post" class="form" role="form">
                            <input type="hidden" name="ci_csrf_token" value="" />

                            <div class="inner-addon left-addon">
                                <i class="glyphicon glyphicon-envelope"></i>
                                <input type="text" name="email" placeholder="Please Enter Your Registered Email" require type="email" />
                            </div>

                            <br />

                            <div class="row">
                                <div class="col-md-3">
                                    <button type="submit" name="reset_password" value="Submit" class="cancelbtn">Submit</button>
                                </div>
                                <div class="col-md-9">
                                    <a href="index.php"><button type="button" class="loginbtn pull-right">Login Area</button></a>
                                </div>
                            </div>



                        </form>


                    </div>


                </div>
            </div>
        </div>
        <br />

    </div>


<?php include('includes/footer.php');?>