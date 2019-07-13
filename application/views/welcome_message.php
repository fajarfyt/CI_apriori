<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dito's Cashier</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
	<!-- <div class="container-fluid">
		<div class="row">
			<div class="col-2" style="border: 1px solid black">
				<div class="list-group" style="margin: 0px">
					<a href="#" class="list-group-item list-group-item-action active">Cras justo odio</a>
					<a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
					<a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
					<a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
					<a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
				</div>
			</div>
			<div class="col-10" style="border: 1px solid black">
				<?php
					//echo $content;
				?>
			</div>
		</div>
	</div> -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('apriori');?>">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" tabindex="-1">Disabled</a>
				</li>
			</ul>
			<div class="my-2 my-lg-0">
				<a class="btn btn-secondary" href="<?php echo site_url('auth/sign_out');?>" onclick="return confirm('Apakah anda ingin keluar dari program')" role="button">Logout</a>
			</div>
		</div>
	</nav>
	<?php
		echo $content;
	?>

	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
	<!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/jquery.min.js') ?>"></script>
    <script>
    	$(function(){
    		$("#menu-toggle").click(function(e) {
    			e.preventDefault();
    			$("#wrapper").toggleClass("toggled");
    		});

    		$(window).resize(function(e) {
    			if($(window).width()<=768){
    				$("#wrapper").removeClass("toggled");
    			}else{
    				$("#wrapper").addClass("toggled");
    			}
    		});
    	});
    </script>
</body>
</html>