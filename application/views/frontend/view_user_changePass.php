<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
    .modal{margin-top: 50px;}
</style>
<div class="container register_middle">
    <div class="admin_login_panel col-sm-offset-3 col-sm-6">
        
        <?php
            if (isset($message_display))
            {
                echo "<div class='message'>";
                echo $message_display;
                echo "</div>";
            }
        ?>
        <form action="<?php echo base_url(); ?>user/password/change" onsubmit="return checkNewPass()" method="post">
        <?php
            echo "<div class='error_msg'>";
            if (isset($error_message))
            {
                    echo $error_message;
            }
            echo validation_errors();
            echo "</div>";
        ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Change Password</span>
                </div>
                <div class="panel-body">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="form-group">
                            <label for="username">Current Password:</label>
                            <input type="password" class="form-control" id="cur_pswd" name="cur_pswd" placeholder="Enter Current Password" required>
                        </div>
                        <div class="form-group">
                            <label for="reg_pswd">New Password:</label>
                            <input type="password" class="form-control" id="new_pswd"  name="new_pswd" placeholder="Enter New Password" required>
                        </div>
                        <div class="form-group">
                            <label for="reg_pswd">Confirm New Password:</label>
                            <input type="password" class="form-control" id="con_new_pswd"  name="con_new_pswd" placeholder="Re-Enter New Password" required>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-default" id="chng_pswd" name="chng_pswd" value="ChangePass">Confirm</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>        
                </div>
            </div>
	</div>
</div>
            
<div class="modal fade" id="passChanged" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Alert</h4>
            </div>
            <div class="modal-body">
                <p id="passAlert"></p>
            </div>
        </div> 
    </div>
</div>

<?php
    if(isset($incorrectPass))
    {
        if($incorrectPass==1)
        {
?>
            <script>
                $('#passAlert').html('Password changed successfully. Go to <a href=<?php echo base_url(); ?>user/dashboard>Dashboard</a>');
                $('#passChanged').modal('show');
            </script>
<?php
        }
        elseif($incorrectPass==0)
        {
?>
            <script>
                $('#passAlert').html('Incorrect Old Password.');
                $('#passChanged').modal('show');
            </script>
<?php  
        }    
    }
?>
            
<script>
    function checkNewPass()
    {
        if ($("#new_pswd").val() !== $("#con_new_pswd").val()) 
        {
            //alert("Confirm New Password must be same as New Password ..!");
            $('#passAlert').html('Confirm New Password must be same as New Password ..!');
            $('#passChanged').modal('show');
            //$('.error_msg').html('<font color="red">Your password does not match</font>');
            $("#new_pswd").val('');
            $("#con_new_pswd").val('');
            $('#new_pswd').css("border", "#FF0000 solid 1px");
            $('#con_new_pswd').css("border", "#FF0000 solid 1px");
            $("#new_pswd").focus();
            return false;
        }
    }
</script>