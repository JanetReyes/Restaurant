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
                    <a href="about.php">QUIENES SOMOS</a></a></p></span> 
                </li>
				
                <li>
                   <p class="bg-warning"> <a href="contacto.php"><span class="glyphicon glyphicon-ok" aria-hidden="true">&nbsp;CONTACTENOS</a></a></p></span> 
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
			
			
			
			
			
			
			
			<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body">
							<h1>Contactenos</h1>
							<form action="index.html" method="post">
								<table>
									<tbody>
										<tr>
											<td>Nombre:</td>
											<td><input type="text" value="" class="txtfield"></td>
										</tr> <tr>
											<td>Email:</td>
											<td><input type="text" value="" class="txtfield"></td>
										</tr> <tr>
											<td>Asunto:</td>
											<td><input type="text" value="" class="txtfield"></td>
										</tr> <tr>
											<td class="txtarea">Mensaje:</td>
											<td><textarea></textarea></td>
										</tr>
										<tr>
											<td></td>
											<td><input type="submit" value="" class="btn"></td>
										</tr>
									</tbody>
								</table>
							</form>
							<h2>Restaurant "La Cochera"</h2>
							<p>
								<span>Direccion:</span> Esquina de Jr. José Olaya y Enrique Palacios, Chimbote Chimbote
							</p>
							<p>
								<span>Telefono:</span> (043)323764
							</p>
							<p>
								<span>Fax:</span> (043)323764
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
					
					<li>
						<a href="about.php">Quienes Somos</a>
					</li >
					<li class="active">
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