<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
    .modal{margin-top: 50px;}
</style>
<div class="container college_middle">
    <form  method="post" action="<?php echo base_url()."user/register/signUp"?>">
	<div class="col-sm-6 col-sm-offset-1">
            <div class="heading">
		<span>Sign Up</span>
            </div>
            <div class="form-group">
		<label for="c_username">Username:</label>
		<input type="text" class="form-control" id="c_username" placeholder="Enter Username" name="usrname" required="">
            </div>
            <div class="form-group">
  		<label for="sel1">College/University:</label>
  		<select class="form-control" id="sel1" name="clg" onsubmit="handleSelect()">
                    <option>Select College/University</option>
                    <?php foreach($result as $row):?>
                        <option value="<?php echo $row->id;?>" <?php if($row->status==1){echo "disabled";}  ?>><?php echo $row->clg_name;?></option>
                    <?php endforeach;?>
  		</select>
            </div>
            <div class="form-group">
		<label for="clg_pswd">Email:</label>
		<input type="email" class="form-control" id="clg_pswd" placeholder="Enter email" name="r_email" required="">
                <p align="right" style="color:red;font-size:12px !important;">*Password will be sent to this email address.</p>
            </div>
            <div class="form-group">
		<label for="clg_phn">Phone Number:</label>
		<input type="number" class="form-control" id="clg_phn" placeholder="Enter phone number"  name="phn_no" required="">
            </div>
            <div class="form-group">
		<label for="clg_phn1"> Alternate Phone Number:</label>
		<input type="number" class="form-control" id="clg_phn1" placeholder="Enter phone number" name="alt_phn">
            </div>
            <button type="submit" class="btn btn-default" class="sign_in" name="sign_up" value="sign_up" >Sign Up</button>
            
            <div class="clearfix"></div>
	</div>
    </form>
    
    <div class="col-sm-4 col-sm-offset-1 register_ins">
        <p style="color:red;">*NOTE : THIS REGISTRATION PORTAL IS FOR COLLEGES( NOT INDIVIDUAL PARTICIPANTS ), ALL PARTICIPANTS DATA FOR A COLLEGE MUST BE FILLED UNDER SINGLE ACCOUNT.
            </p><br>
            <ul type="disc">
                <li>If college name is not selectable that means someone already registered for your college.<br><br>
                <li>If college name is not present in the list that means it is not present in our database.<br><br>
            <li>In case of any query contact at :<br>
                Akshay Kapoor : +91-8699934202<br><br>
            <li>You can also send participants data ( NAME, PHONE NO. & EMAIL ) to dcsa.epsilon@gmail.com
            </ul>
    </div>
    <div class="modal fade" id="imp_ins" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Important</b></h4>
                </div>
                <div class="modal-body">
                    <p style="color:red;">*NOTE : THIS REGISTRATION PORTAL IS FOR COLLEGES( NOT INDIVIDUAL PARTICIPANTS ), ALL PARTICIPANTS DATA FOR A COLLEGE MUST BE FILLED UNDER SINGLE ACCOUNT.
                    </p><br>
                    <ul type="disc">
                        <li>If college name is not selectable that means someone already registered for your college.<br><br>
                        <li>If college name is not present in the list that means it is not present in our database.<br><br>
                    <li>In case of any query contact at :<br>
                        Akshay Kapoor : +91-8699934202<br><br>
                    <li>You can also send participants data ( NAME, PHONE NO. & EMAIL ) to dcsa.epsilon@gmail.com
                    </ul>
                </div>
            </div> 
        </div>
    </div>
</div>
<script>
            $('#imp_ins').modal('show');
            //$('.error_msg').html('<font color="red">Your password does not match</font>');
            $("#c_username").focus();

</script>