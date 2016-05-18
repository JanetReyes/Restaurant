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
				
				<li class="active">
					<p class="bg-warning"><a href="especialidad.php"><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;ESPECIALIDAD</a></a></p></span>
                </li> 
				
				<li>
                    <a href="servicios.php">SERVICIOS</a>
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
    
    <div id="contents" style="background-image: url('images/bg-featured.png')">
				<div class="box">
					<div>
						<div class="body">
							<h1>Especialidad La Cochera</h1>
							<ul id="foods">
								<li>
									<h2><a href="foods.html">Comida Marina</a></h2>
									<div class="infos">
										<img src="../../images/seafoods.jpg" alt="Img" height="169" width="780"><span class="cover"></span>
										<p>
											<span>Suculentos platos......</span> Deliciosos platos preparado con variedad de pescados, mariscos y ajíes peruanos........
										</p>
									</div>
								</li>
								<li>
									<h2><a href="foods.html">Suculentos Postres</a></h2>
									<div class="infos">
										<img src="../../images/desserts.jpg" alt="Img" height="169" width="780"><span class="cover"></span>
										<p>
											<span>Variedad de postres</span> Aqui encontrara la mayor variedad de postres del Perú y del mundo...........................
										</p>
									</div>
								</li>
								<li>
									<h2><a href="foods.html">Buffet</a></h2>
									<div class="infos">
										<img src="../../images/buffet.jpg" alt="Img" height="169" width="780"><span class="cover"></span>
										<p>
											<span>Buffet variado</span> Disfrute todos los Sabores Peruanos en un Buffet Gourmet variado en amplios ambientes y la mejor atención.
										</p>
									</div>
								</li>
							</ul>
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
					
					<li class="active" >
						<a href="especialidad.php">especialidad</a>
					</li>
					
					<li>
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
				alert("Bienvenido al sistema");
				window.location.href = "sistema/cliente/index.php";
			}
			if(data=='OKI'){
				alert("Bienvenido al sistema");
				window.location.href = "sistema/administrador/index.php";
				//alert(data);
			}
		}
		);
	})
</script>
<?php
}else{
	header('Location: ../../index.php'); 
}
?>