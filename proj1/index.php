<?php
include('includes/dbcon.php');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        header("Location: page1.php");
    } else {
        echo "Invalid email or password";
    }
    
    $conn->close();
}

?>

<?php 
$page_title="Faculty Login";
include('includes/header.php'); 
?>

<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet3.css">
<a href='includes/layout.php'></a>

<div class="container" style="border-radius:10px; height:300px; margin-top:20px;">
    <div class="col-md-10 col-md-offset-1">

        <div class="row" style="border-width: 2px; border-style: solid; border-radius: 10px; box-shadow: 0px 1px 30px 1px #284d7a; background-color:#F7FFFF;">


            <div class="col-md-6" style=" height:403px; border-radius: 10px 0px 0px 10px;"><img src="images/logo.png" style="margin-left:22%; margin-top: 8%;width: 350px; height: auto;">

                <p style="text-align: center;">
                </p>
                <?php
                    if(isset($_SESSION['status']))
                    {
                        ?>
                        <div class="alert alert-success">
                            <p><?=$_SESSION['status']; ?></p>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
            </div>

            <div class="col-md-6" style="border-radius: 0px 10px 10px 0px; height: 403px;">
                <br />
                <div class="col-md-10 col-md-offset-1">
                    <h3 style="text-align: center;"><strong><u>LOGIN HERE</u></strong></h3><br />

                    <form action="login_code.php" role="form" method="post">
                    <input type="hidden" name="first_n" value="<?php if(isset($_GET['firstname'])){echo $_GET['firstname'];} ?>">

                        <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-envelope"></i>
                            <input type="text" name="email" id="email" placeholder="Your email" autofocus="" required />
                        </div>
                        <br />

                        <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                            <input type="password" id="password" placeholder="Enter your password" name="password" required>
                        </div>
                        <br />

                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" name="login_now_btn" value="Submit">Login</button>

                            </div>
                            <div class="col-md-9">
                                <a href="reset.php"><button type="button" class="cancelbtn pull-right">Reset Password</button></a>
                            </div>
                        </div>

                    </form>
                    <br />
                    <p style="text-align: center; color: green; font-size: 1.3em;"><strong>NOT REGISTERED? </strong> <a href='register.php' class="btn-sm btn-primary"> SIGN UP</a>

                    </p>

                </div>


            </div>
        </div>
    </div>

</div>
<br />
<div class="container">
  <div class="col-md-8 col-md-offset-2" style="text-align: center!important; font-weight: bold; color: black!important;">
  </div>
</div>

<?php include('includes/footer.php');?>