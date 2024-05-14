<?php 
session_start();
$page_title="Final Submission";
include('includes/header.php'); 
?>

<style type="text/css">
body { padding-top:30px; }
.form-control { margin-bottom: 10px; }
.floating-box {
    display: inline-block;
    width: 150px;
    height: 75px;
    margin: 10px;
    border: 3px solid #73AD21;  
}
</style>
<style type="text/css">
body { padding-top:30px; }
.form-control { margin-bottom: 10px; }
label{
  padding: 0 !important;
}
hr{
  border-top: 1px solid #025198 !important;
  border-style: dashed!important;
  border-width: 1.2px;
}

.panel-heading{
  font-size: 1.3em;
  font-family: 'Oswald', sans-serif!important;
  letter-spacing: .5px;
}

.panel-info .panel-heading{
  font-size: 1.1em;
  font-family: 'Oswald', sans-serif!important;
  padding-top: 5px;
  padding-bottom: 5px;
}

.panel-danger .panel-heading{
  font-size: 1.1em;
  font-family: 'Oswald', sans-serif!important;
  padding-top: 5px;
  padding-bottom: 5px;
}

.btn-primary {
  padding: 9px;
}

.Acae_data
{
  font-size: 1.1em;
  font-weight: bold;
  color: #414002;
}


.upload_crerti
{
  font-size: 1.1em;
  font-weight: bold;
  color: red;
  text-align: center;
}

.update_crerti
{
  font-size: 1.1em;
  font-weight: bold;
  color: green;
  text-align: center;
}
p
{
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
                        <h4>Welcome : <font color="#025198"><strong><?=$_SESSION['auth_user']['username'];?></strong></font></h4>
                    </div>
                    <div class="col-md-2">
                      <a href="index.php" class="btn btn-sm btn-success  pull-right">Logout</a>
                    </div>
                  </div>
                
                
        </legend>
       </fieldset>

<!-- publication file upload           -->

<form class="form-horizontal" action="page9_code.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="email" value="<?=$_SESSION['auth_user']['email'];?>">

<!-- Payment file upload           -->

<div class="row">

<div class="col-md-12">
      <div class="panel panel-success ">
      <div class="panel-heading">23. Final Declaration *</div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12">

                <textarea style="height:60px" placeholder="" class="form-control input-md" name="my_state" readonly="">
                I hereby declare that I have carefully read and understood the instructions and particulars mentioned in the advertisment and this application form. I further declare that all the entries along with the attachments uploaded in this form are true to the best of my knowledge and belief.
              </textarea>

          <input type="checkbox" name="decl_status" value="1" required="" />  
         
        </div>
          <br />
          <br />
          <br />
          <div class="col-md-4">
          
          </div>

         <!--  <label class="col-md-4"><strong> Name of Applicant</strong></label>
          <div class="col-md-4">
          <input id="name" value="" name="name" type="text" placeholder="Name of the Applicant" class="form-control input-md" required="">
        </div> -->
        </div>
      </div>
    </div>
    </div>


 </div>      
 
  <h5 style="font-weight: bold; color:red;">Note: The form can be edited till the cutoff date of the rolling advertisment.</h5>
<hr> 
<div class="form-group">
<div class="col-md-12">
  <!-- <a href="https://ofa.iiti.ac.in/facrec_che_2023_july_02/acde" class="btn btn-primary pull-left">BACK</a> -->
  <a href="page8.php" class="btn btn-primary pull-left"><div>&#9664;</div></a>
  <button type="submit" name="preview"  value="preview" class="btn btn-info pull-right">SAVE & SUBMIT</button>
  <!-- <button type="submit" name="submit" value="Submit" class="btn btn-success">SAVE</button> -->


</div>

<!-- <div class="col-md-2">

  <button id="submit" type="submit" name="submit" value="Submit" onclick="return confirm_box()" class="btn btn-success pull-right">Final Submission</button>

</div>
 -->

</div>

</form>
</div> 
</div>
<script type="text/javascript">
function confirm_box()
{
  if(confirm("Dear Candidate, \n\nAre you sure that you are ready to submit the application? Press OK to submit the application. Press CANCEL to edit. \nOnce you press OK you cannot make any changes.\n\nThank you."))
  {
    return true;
  }
  else
  {
    return false;
  }
}
function submit_frm()
{
  alert();
  document.getElementById("upload_frm").submit();
}
</script>

<?php include('includes/footer.php');?>