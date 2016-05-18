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
						La Cochera &nbsp;
					</span>
                </li>
                <li>
				<a href="index.php">INICIO</a></p></span>           
                </li>  
				
				<li>
                    <a href="especialidad.php">ESPECIALIDAD</a></a></p></span>
                </li> 
				
				<li>
                    <a href="servicios.php">SERVICIOS</a></a></p></span> 
                </li>
				
                <li>
                    <p class="bg-warning"><a href="about.php"><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;QUIENES SOMOS</a></a></p></span> 
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
				<div class="box">
					<div>
						<div class="body">
							<h1>Sobre Nosotros</h1>
							<h2>Conservamos la esencia en nuestros potajes</h2>
							<p>
								La Cadena de Restaurantes de Comida Tradicional Norteña “Restaurante Turístico La Cochera” una Institución en lo que se refiere a la Gastronomía Norteña, La Cochera es un baluarte de los sabores típicos en Chimbote, con cuya generosidad y recetas agasajan a sus comensales nacionales y extranjeros.
                            </p>
							<p>
								Recetas y secretos que pasan de generación en generación son la base de la gastronomía tradicional. Ellas se nutren de lo que producen la tierra y el mar, así como de los usos y costumbres de quienes ven en cocinar más que una labor cotidiana, una exquisita forma de volver a sus raíces y ahora basados en la mejora continua de sus procesos y en la experiencia de más de 20 años de atención ininterrumpida en sus dos establecimientos que garantizan siempre el éxito y exclusividad de sus eventos sumados a la mejor sazón del norte de nuestro país. 
                            </p>
							<hr>
							<div class="ads">
								<h2>Valores</h2>
								<p>Ser los mejores, en todo momento, en todo lugar y en toda ocasión, marcando siempre una ventaja competitiva.
								</p>
								<h2>Confiabilidad</h2>
								<p>
									Sabemos que cumplir es una forma de ser más que una obligación.
									</p>
							</div>
							<h2>Mision</h2>
							<p>
								Atender al cliente satisfactoriamente y brindarle los servicios de alimentación con la más alta calidad que cubra las necesidades de los consumidores nacionales y extranjeros y cuyo nivel de confort sean los del más alto nivel.
								</p>
							<h2>Vision</h2>
							<p>
								Ser la empresa lider en el sector Gastronomico a nivel nacional, dando a conocer los servicios, con los que contaran nuestros clientes, los cuales proporcionaran un ambiente de confianza y seguridad entre el cliente y nuestro grupo de trabajo.
								</p>
						</div>
					</div>
				</div>
			</div>
			
			
			
			
			
			
			
			
			</div>
			
			<div id="footer">
			<div>
				<ul class="navigation">
					<li >
						<a href="index.php">Inicio</a>
					</li>
					
					<li >
						<a href="especialidad.php">especialidad</a>
					</li>
					
					<li >
						<a href="servicios.php">Servicios</a>
					</li>
					
					<li class="active">
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
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Acceso al sistema</h4>
			  </div>
			  <div class="modal-body">
				<div class="input-group">
				  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				  <input type="text" name="txtusuario" id="txtusuario" class="form-control" placeholder="Ingrese Usuario">
				</div>
				<br>
			  <div class="input-group">
				  <span class="input-group-addon"><span class="glyphicon glyphicon-ok"> </span></span>
				  <input type="password" name="txtclave" id="txtclave" class="form-control" placeholder="Ingrese Clave">
				</div>
			  </div>
			  <div class="modal-footer">
				<p align="left"><a href="rcliente.php">¿Aún no eres usuario? Registrate!!</a></p>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				
				<button type="button" name="btnacceder" id="btnacceder" class="btn btn-primary">Acceder</button>
			  </div>
			</div>
		  </div>
		</div>
		
	 
	
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
	
	

	
	
	
</div>
</body>

</html>


	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
	
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
	
	
	<script>
	$('#btnacceder').on('click', function (e) {
		$.post('conexion/validar_ope.php', 
		{	usuario	: $('#txtusuario').val(),
			contrasena	: $('#txtclave').val()
		},
		function (data){
			if(data=='OK'){
				
				window.location.href = "sistema/cliente/index.php";
			}
			if(data=='OKI'){
			
				window.location.href = "sistema/administrador/index.php";
				//alert(data);
			}
		}
		);
	})
</script>
<?php
}else{
	header('Location: ../../../index.php'); 
}
?>