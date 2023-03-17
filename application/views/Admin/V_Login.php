<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $title; ?></title>
		<meta name="author" content="COC.com">
		<link rel="shortcut icon" type="image/ico" href="<?php echo base_url(); ?>asset/images/cladtek.png">
		<!-- Tell the browser to be responsive to screen width -->
		
		
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/bootstrap/css/font-awesome.min.css">		 
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/dist/css/AdminLTE.min.css">	 
		<BODY class="hold-transition login-page">
			<div class="login-box">
			<div class="login-logo">
				<a href="#"><b>Admin</b> Login</a>
			</div><!-- /.login-logo -->
			<div class="login-box-body">
				<p class="login-box-msg">Silahkan Login Pada Form dibawah ini</p>
				<?php 
					if ($this->input->post('email')!=''){
						echo "<div class='alert alert-warning'><center>$title</center></div>";
					}elseif($this->input->post('u')!=''){
						echo "<div class='alert alert-danger'><center>$title</center></div>";
					}
					 echo form_open('Main/index');  
				?>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" name='u' placeholder="Username" required>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" name='p' placeholder="Password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<!--<div class="col-xs-8">
						<div class="checkbox icheck">
							<label>
							<input type="checkbox"> Remember Me
							</label>
						</div>
					</div><!-- /.col -->
				<div class="col-xs-4">
				  <button name='submit' type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div><!-- /.col -->
			  </div>
				   
			</div><!-- /.login-box-body -->
			</div><!-- /.login-box -->
			
			<!-- jQuery 2.1.4 -->
			<script src="<?php echo base_url(); ?>/asset/jQuery/jQuery-2.1.4.min.js"></script>
			<!-- Bootstrap 3.3.5 -->
			<script src="<?php echo base_url(); ?>/asset/bootstrap/js/bootstrap.min.js"></script>
		</BODY>
	</HEAD>

</HTML>