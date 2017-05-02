<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/bstheme/cerulean_bootstrap.min.css';?>">

<link rel="stylesheet" type="text/css" href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/apx/font-awesome/css/font-awesome.min.css';?>">

	<title>Voter's Login</title>
</head>
	<body>

	<div class="container" style="margin-top: 70px;">
		<div class="row">
			<div class="col-md-4 col-sm-push-4">
			<h1>Voter's Login</h1>

			<?php echo validation_errors();?>

			<?php echo $this->session->flashdata('auth_failed')!='' ? "<div class='alert alert-danger'>".$this->session->flashdata('auth_failed')."</div>":"";?>

			<?php echo $this->session->flashdata('unauthorized')!='' ? "<div class='alert alert-danger'>".$this->session->flashdata('unauthorized')."</div>":"";?>
				<form method="POST" action="">

					<div class="form-group">
						<label>Email address</label>
						<input type="text" name="voters_email" class="form-control">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="voters_password" class="form-control">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success"><i class="fa fa-lock"></i> Login</button>	
					</div>

				</form>
			</div>
		</div>
	</div>

	</body>
</html>