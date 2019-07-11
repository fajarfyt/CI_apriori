<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dito's Cashier</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<div class="card" style="margin-top: 100px">
					<div class="card-header" style="text-align: center;">
						Login Admin
					</div>
					<div class="card-body">
						<form action="<?php echo site_url('auth/sign_in'); ?>" method="post">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" placeholder="Enter Username">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-primary float-right">Login</button>
						</form>
					</div>
					<div class="card-footer text-muted">
						<div class="float-right"><a href="#">@Cafe_Dito</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>