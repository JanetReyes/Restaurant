<?php
	session_start();
	if(isset($_SESSION['persona'])){
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>La Cochera</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    

    
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    
    <link href="../../css/simple-sidebar.css" rel="stylesheet">

   <link rel="stylesheet" href="../../css/style.css" type="text/css">
   

</head>

<body>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <span class="label label-default">
                       <img src="../../images/logo.jpg" width="40px" height="40x"> 
                  La Cochera
					</span>
                </li>
                <li>
				<a href="index.php" >&nbsp;INICIO</a>      
                 </li> 
				 
				 <li>
                    <a href="especialidad.php">ESPECIALIDAD</a>    
                </li>  
				
				<li>
                    <p class="bg-warning"><a href="servicios.php"><span class="glyphicon glyphicon-glyphicon glyphicon-ok" aria-hidden="true">SERVICIOS</a></p></span> 
                </li>
				
                <li>
                    <a href="about.php">QUIENES SOMOS</a>
                </li>
				
                <li>
                    <a href="contacto.php">CONTACTENOS</a>
                </li>
				<li>
                    <a href="../salir.php " style="cursor:pointer"> 
					<span class="glyphicon glyphicon-off"> Cerrar Sesion (<?php echo $_SESSION['persona']."</b>";?>)</span></a>               
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

		
	
		
		
        <!-- Page Content -->
		<div id="background">
		
		 <!--	<div id="page-content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
						 <a href="#menu-toggle" class="btn btn-primary"" id="menu-toggle"> <<< Menu >>></a>
						 </div>
					</div>
				</div>
			</div>-->
		<br>
			<div id="page">
			
			<div class="alert alert-warning" role="alert" style="width: 930px; height: 240px;">
					<img src="../../images/sea-sound.jpg" alt="Img">
				</div>
			
				<div id="contents">
				
				
			
				
				
				<div id="main">
				
				<div class="box">
						<div>
							<div>
								<h3>Servicios</h3>
								<ul>
									<li>
										<h4>Reservación de Mesas</h4>
										<br>
										<p>
											En nuestro nuevo portal para reserva de mesas tiene la oportunidad de consultar por plazas libres a la hora deseada y obtendrá de inmediato una confirmación o una propuesta de un horario diferente.<br> Puede hacer reservas para hasta ocho personas. </p>
									</li>
									<br>
									<li>
										<h4>Reservación de Local</h4>
										<br>
										<p>
											En nuestro nuevo portal para reserva de Local tiene la oportunidad de consultar por plazas libres a la hora deseada.</p>
									</p>
									</li>
									<br>
									
								</ul>
							</div>
						</div>
				</div>
				
				
				</div>
				<div id="sidebar">
					<div class="section">
						<a class="btn btn-success" style="width: 267px; height: 58px;" ><font size=5>Cliente <?php echo $_SESSION['persona']."</b>";?>&nbsp;&nbsp;<span class="glyphicon glyphicon-glyphicon glyphicon-user" aria-hidden="true"></spaN></font></a>
					</div>
					<div class="section">
						<a href="reser_local/reserlocal.php"><img src="../../images/rlocal.jpg" alt="Img"></a>
					</div>
					<div class="section">
						<a href="reser_mesa/resermesa.php" ><img src="../../images/rmesa.jpg" alt="Img"></a>
					</div>
					
					<div class="section">
						<img src="../../images/ctexto.jpg" alt="Img">
					</div>
					<div class="section">
						<img src="../../images/logo2.jpg" alt="Img">
					</div>
				</div>
			</div>
		</div>
			</br>
			<div id="footer">
			<div>
				<ul class="navigation">
					<li >
						<a href="index.php">Inicio</a>
					</li>
					
					<li >
						<a href="especialidad.php">especialidad</a>
					</li>
					
					<li class="active">
						<a href="servicios.php">Servicios</a>
					</li>
					
					<li>
						<a href="about.php">Quienes Somos</a>
					</li>
					<li>
						<a href="contacto.php">Contactenos</a>
					</li>
					
				</ul>
				<div id="connect">
					<a href="https://www.facebook.com/restaurantelacochera?fref=ts" target="_blank" class="pinterest"></a> <a href="https://www.facebook.com/restaurantelacochera?fref=ts" target="_blank" class="facebook"></a> <a href="https://www.facebook.com/restaurantelacochera?fref=ts" target="_blank" class="twitter"></a> <a href="https://www.facebook.com/restaurantelacochera?fref=ts" target="_blank" class="googleplus"></a>
				</div>
			</div>
			
		</div>
			
			<p align="center">
				© 2016 Diseño Kewv - WebUSP. All Rights Reserved
			</p>
			
			</div>
			
		</div>
		
		
		

		
		
		
		
	
	
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
	
	

	
	
	
</div>
</body>

</html>


	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="../../js/bootstrap.min.js"></script>
	
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
	
	







<?php
}else{
	header('Location: ../../index.php'); 
}
?>