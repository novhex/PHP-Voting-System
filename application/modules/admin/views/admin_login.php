<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
	<title><?php echo $page_title; ?></title>
</head>
	<body>

	<div class="container" style="margin-top: 70px;">
		<div class="row">
			<div class="col-md-4 col-sm-push-4">
			<h1>Admin Login</h1>

			<?php echo validation_errors();?>

			<?php echo $this->session->flashdata('admin_auth_failed')!='' ? "<div class='alert alert-danger'>".$this->session->flashdata('admin_auth_failed')."</div>":"";?>

			<?php echo $this->session->flashdata('admin_unauthorized')!='' ? "<div class='alert alert-danger'>".$this->session->flashdata('admin_unauthorized')."</div>":"";?>
				<form method="POST" action="">

					<div class="form-group">
						<label>Email address</label>
						<input type="text" name="admin_email" class="form-control">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="admin_password" class="form-control">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success"> Login</button>	
					</div>

				</form>
			</div>
		</div>
	</div>

	</body>
</html>