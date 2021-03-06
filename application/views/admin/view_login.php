<?php

if (isset($this->session->userdata['logged_in'])) {
    redirect(base_url().'admin/login/admin_login_process');
}
?>
<div class="admin_login_panel col-sm-offset-3 col-sm-6">
    <?php
        if (isset($message_display)) {
        echo "<div class='message'>";
        echo $message_display;
        echo "</div>";
        }
    ?>
    <?php echo form_open('admin/login/admin_login_process'); ?>
    <?php
        echo "<div class='error_msg'>";
        if (isset($error_message)) {
        echo $error_message;
        }
        echo validation_errors();
        echo "</div>";
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <span>Admin Login</span>
	</div>
	<div class="panel-body">
           
			<div class="col-sm-8 col-sm-offset-2">
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
				</div>
				<div class="form-group">
					<label for="reg_pswd">Password:</label>
					<input type="password" class="form-control" id="reg_pswd"  name="password" placeholder="Enter password">
				</div>
				<div class="row">
					<button type="submit" class="btn btn-default" id="sign_in" name="adm_sign_in" value="Login">Sign In</button>
				</div>
			</div>
                        <?php echo form_close(); ?>
                
	</div>
    </div>
</div>


