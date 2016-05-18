<?php
	session_start();
	if(isset($_SESSION['persona'])){
?>

<div id="main">
</br>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<span class="glyphicon glyphicon-glyphicon glyphicon-edit" aria-hidden="true">&nbsp;Lista de Usuarios </span> 
		</div>
							
		<div class="panel-body">
			<form id="form_usuario_list" name="form_usuario_list" action="usuario/usuario_cancelar.php" method="post">
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;Buscar nombre de usuario&nbsp</span></span>
					<input type="text" name="txtbuscarusuario" id="txtbuscarusuario" class="form-control" placeholder="Ingrese el usuario a buscar">
					
				</div>
				</br>
				<div id="subcontenido">
				</div>
			</form>
			
		</div>
	</div>
				
</div>
<div id="sidebar" >
<br>
	<div class="section">
		<a class="btn btn-success" style="width: 267px; height: 58px;" ><font size=5>Adm. <?php echo $_SESSION['persona']."</b>";?>&nbsp;&nbsp;<span class="glyphicon glyphicon-glyphicon glyphicon-user" aria-hidden="true"></spaN></font></a>
	</div>
	<div class="section">
		<a data-toggle="modal" data-target="#myModal" onclick="load_div('modal_body', 'usuario/usuario_reg.php');" style="cursor:pointer"><img src="../../imagenes/registrar.jpg" alt="Img"></a>
	</div>
        <div class="section">
		<a data-toggle="modal" data-target="#myModal1" onclick="load_div('modal_body1', 'usuario/usuario_listar.php');" style="cursor:pointer"><img src="../../imagenes/LISTAR_USUARIO.jpg" alt="Img"></a>
	</div>
	<div class="section">
		<a onclick="load_div('subcontenido', 'usuario/usuario_list.php?q='+$('#txtbuscarusuario' ).val());" style="cursor:pointer"><img src="../../imagenes/CANCELAR.jpg" alt="Img"></a>
	</div>
        <div class="section">
		<a onclick="load_div('subcontenido', 'usuario/usuario_list_activar.php?q='+$('#txtbuscarusuario' ).val());" style="cursor:pointer"><img src="../../imagenes/ACTIVAR.jpg" alt="Img"></a>
	</div>
					
	<div class="section">
		<img src="../../imagenes/ctexto.jpg" alt="Img">
	</div>
	<div class="section">
		<img src="../../imagenes/logo2.jpg" alt="Img">
	</div>
</div>






<script>
$("#txtbuscarusuario" ).keyup(function(event) {
	load_div("subcontenido", "usuario/usuario_list.php?q="+$("#txtbuscarusuario" ).val());
});
</script>

<?php
}else{
	header('Location: ../../index.php'); 
}
?>