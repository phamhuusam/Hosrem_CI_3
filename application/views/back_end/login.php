<link rel="stylesheet" type="text/css" href="<?php echo  base_url() ?>public/admin/css/clean-modal-login-form.css">
<div class="loginmodal-container">
	<h1>Login to Your Account</h1><br>

  <?php echo validation_errors(); ?>
	<?php echo form_open('admin/login/verifylogin'); ?>
	<input type="text" name="user" size="20" placeholder="Username">
	<input type="password" name="pass" size="20" placeholder="Password">
	<input type="submit" name="login" class="login loginmodal-submit" value="Login">
  </form>	
  <div class="login-help">
	<a href="#">Register</a> - <a href="#">Forgot Password</a>
  </div>
</div>


