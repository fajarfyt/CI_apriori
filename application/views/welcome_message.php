<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dito's Cashier</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/datatables.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/style.css') ?>">
	
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/datatables/datatables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/jquery.min.js') ?>"></script>

</head>
<body>
	<nav id="sidebar" class="bg-dark">
	    <div id="sidebar-header">
	    	<a href="<?php echo site_url('welcome') ?>"><h3>@Cafe_Dito</h3></a>
	    </div>
	    <ul class="menu list-tanpa-style">
	        <li class="active"><a href="<?php echo site_url('welcome') ?>">Dashboard</a></li>
	        <li><a href="<?php echo site_url('apriori');?>">Apriori</a></li>
	        <li>
	            <a href="#tunjanganSubmenu" class="dropdown-toggle" data-toggle="collapse" aria-expanded="false">Master</a>
	            <ul class="list-tanpa-style collapse" id="tunjanganSubmenu">
	                <li><a href="<?php echo site_url('menu') ?>">Menu</a></li>
	                <li><a href="#">Transaksi</a></li>
	            </ul>
	        </li>
	        <li><a href="<?php echo site_url('auth/sign_out');?>">Logout</a></li>
	    </ul>
	</nav>
	<div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button type="button" id="sidebarCollapse" class="btn btn-dark"><i class="fa fa-align-justify"></i></button>
        </nav>
        <div class="container">
        	<?php
				echo $content;
			?>
        </div>
    </div>
	



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

    	$(document).ready(function () {
		    $('#sidebarCollapse').on('click', function () {
		        $('#sidebar').toggleClass('tutup');
		        $('#content').toggleClass('layarpenuh');
		        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
		    });
		});
    </script>
    <script type="text/javascript">
	$(document).ready( function () {
		$('#tablee').DataTable();
	} );
</script>
</body>
</html>