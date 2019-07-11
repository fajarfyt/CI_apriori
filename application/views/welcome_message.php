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
	<style type="text/css">
		body {
			overflow-x: hidden;
		}
		#wrapper {
			padding-right: 0;
			-webkit-transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			transition: all 0.5s ease;
		}
		#wrapper.toggled {
			padding-left: 250px;
		}
		#sidebar-wrapper {
			z-index: 1000;
			position: fixed;
			/*right: 250px;*/
			width: 0;
			height: 100%;
			/*margin-right: -250px;*/
			overflow-y: auto;
			background: #000;
			-webkit-transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			transition: all 0.5s ease;
		}
		#wrapper.toggled #sidebar-wrapper {
			width: 250px;
		}
		#page-content-wrapper {
			width: 100%;
			position: absolute;
			padding: 15px;
		}
		#wrapper.toggled #page-content-wrapper {
			position: absolute;
			margin-right: 0px;
		}

		/* Sidebar Styles */

		.sidebar-nav {
			position: absolute;
			top: 0;
			width: 250px;
			margin: 0;
			padding: 0;
			list-style: none;
		}
		.sidebar-nav li {
			text-indent: 20px;
			line-height: 40px;
		}
		.sidebar-nav li a {
			display: block;
			text-decoration: none;
			color: #999999;
		}
		.sidebar-nav li a:hover {
			text-decoration: none;
			color: #fff;
			background: rgba(255, 255, 255, 0.2);
		}
		.sidebar-nav li a:active, .sidebar-nav li a:focus {
			text-decoration: none;
		}
		.sidebar-nav>.sidebar-brand {
			height: 65px;
			font-size: 18px;
			line-height: 60px;
		}
		.sidebar-nav>.sidebar-brand a {
			color: #999999;
		}
		.sidebar-nav>.sidebar-brand a:hover {
			color: #fff;
			background: none;
		}

		@media(min-width:768px) {
			/*#wrapper {
				padding-right: 0;
			}
			#wrapper.toggled {
				padding-left: 250px;
			}
			#sidebar-wrapper {
				width: 0;
			}
			#wrapper.toggled #sidebar-wrapper {
				width: 250px;
			}*/
			#page-content-wrapper {
				padding: 20px;
				position: relative;
			}
			#wrapper.toggled #page-content-wrapper {
				position: relative;
				margin-right: 0;
			}
		}
	</style>
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
	<nav class="navbar navbar-expand navbar-dark bg-primary">
				<a href="#menu-toggle" id="menu-toggle" class="navbar-brand">
					<span class="navbar-toggler-icon"></span>
				</a>
			</nav>
    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li style="background-color: red" class="sidebar-brand">
                	<a href="#"> Dito's Coffee </a>
                </li>
                <li> <a href="#">Dashboard</a> </li>
                <li> <a href="#">Shortcuts</a> </li>
                <li> <a href="#">Overview</a> </li>
                <li> <a href="#">Events</a> </li>
                <li> <a href="#">About</a> </li>
                <li> <a href="#">Services</a> </li>
                <li> <a href="#">Contact</a> </li>
            </ul>
        </div> <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Simple Sidebar</h1>
                <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                <?php
					echo $content;
				?>
            </div>
        </div> <!-- /#page-content-wrapper -->
    </div> <!-- /#wrapper -->

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