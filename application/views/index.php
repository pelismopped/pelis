<?php 
  $this->load->Helper('html');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php// echo $titulo?></title>
	<!-- for-mobile-apps -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/medile.css"> 	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/single.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">		
	<script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/js/jquery-3.3.1.js"></script>	
	<script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/js/funciones.js"></script>
	
</head>
	
<body>
<!-- header -->
	<div class="header">		
		<div class="layouts_logo">
			<a href="<?php echo base_url();?><?php echo'Welcome/index' ?>"><h1>pelis<span>Mopped</span></h1></a>
		</div>
		 <div class="search" >		
		 	
		 	<form action="<?php echo base_url();?><?php echo'Welcome/buscar_todos'?>" method="post">
		 	
				<input type="text" name="Search" id="search" placeholder="Search">	
				<input type="submit" value="Go" id="Go">
			
			</form>
			
			<div id="Search2" ></div>		
		</div>			
	</div>
<!-- //header -->
<!-- nav -->

<script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/js/bootstrap.js"></script>	

