<?php include 'includes/header.php' ?>
		<div class="login-bottom">
			<h2>Login</h2>
			<?php echo form_open(uri_string()); ?>
			<?php echo $this->session->flashdata('new_store'); ?>
			<?php echo $this->session->flashdata('error_pwd'); ?>
			<div class="col-md-8">
				<?php echo form_error('email', '<small style="color: red !important;">', '</small>'); ?>
				<div class="login-mail">
					<input type="text" placeholder="Email" name="email" value="<?php echo set_value('name') ?>">
					<i class="fa fa-envelope"></i>
				</div>
				<?php echo form_error('pwd', '<small style="color: red !important;">', '</small>'); ?>
				<div class="login-mail">
					<input type="password" placeholder="Password" name="pwd" required="">
					<i class="fa fa-lock"></i>
				</div>			
			</div>
			<div class="col-md-4 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="login" name="hms-btn">
				</label>
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
<?php include 'includes/footer.php' ?>
