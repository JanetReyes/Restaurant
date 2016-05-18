
function cargainicio(div,formulario)
{
	$("#"+div).load(formulario);
}
function pascid(a)
{
    //alert(a);
    document.frm_nca.txtncid.value=a;
}

function soloNumeros(e) 
{ 
    var key = window.Event ? e.which : e.keyCode 
    return ((key >= 48 && key <= 57) || (key==8))
}

function reg_empleado(){
	var pid = document.frm_regempleado.txtpersonaid;
        var direccion = document.frm_regempleado.txtdireccion;
        var fecha = document.frm_regempleado.txtfecha;
        var telefono = document.frm_regempleado.txttelefono;
        var cargo = document.frm_regempleado.cbocargo;
	//alert(pid.value+" "+direccion.value+" "+fecha.value+" "+telefono.value+" "+cargo.value);
	$.post('reg_empleado_ope.php', 
		{	pid		: pid.value,		
			direccion 	: direccion.value,
                        fecha           : fecha.value,
                        telefono        : telefono.value,
                        cargo           : cargo.value
		},
		function (data){
			if(data=="correcto"){
				alert("Empleado registrado correctamente");
                                document.frm_regempleado.txtpersonaid.value="";
                                document.frm_regempleado.txtpersona.value="";
                                document.frm_regempleado.txtdireccion.value="";
                                document.frm_regempleado.txtfecha.value="";
                                document.frm_regempleado.txttelefono.value="";
                                document.frm_regempleado.cbocargo.value="";
			}else{
				alert(data);
			}
		}
	);
}
function pasdemp(a,b)
{
    document.frm_regempleado.txtpersona.value=a;
    document.frm_regempleado.txtpersonaid.value=b;
}
function bus_empleado(){
	var usuario = document.frm_re.txtbusc;
	//alert(usuario.value);
	cargarformulario('busemple','bus_empleado.php?nombre='+usuario.value);
}
function reg_per(){
	var pnombre = document.frm_regpersona.txtpnombre;
	var snombre = document.frm_regpersona.txtsnombre;
        var apaterno = document.frm_regpersona.txtapaterno;
        var amaterno = document.frm_regpersona.txtamaterno;
        var dni = document.frm_regpersona.txtdni;
	//alert(pnombre.value+" "+snombre.value+" "+apaterno.value+" "+amaterno.value+" "+dni.value);
	$.post('reg_persona_ope.php', 
		{	pnombre		: pnombre.value,		
			snombre 	: snombre.value,
                        apaterno        : apaterno.value,
                        amaterno        : amaterno.value,
                        dni             : dni.value
		},
		function (data){
			if(data=="correcto"){
				alert("Persona registrada correctamente");
                                document.frm_regpersona.txtpnombre.value="";
                                document.frm_regpersona.txtsnombre.value="";
                                document.frm_regpersona.txtapaterno.value="";
                                document.frm_regpersona.txtamaterno.value="";
                                document.frm_regpersona.txtdni.value="";
			}else{
				alert(data);
			}
		}
	);
}
function registrousuario(){
        var codigo = document.frm_empleado.codigo;
	var clave = document.frm_empleado.empleado;
        alert(clave.value);
	//alert(pregunta.value+" "+respuesta.value+" "+empleado.value);
	$.post('usuario_registrar.php', 
		{	codigo		: codigo.value,		
			empleaado	: empleado.value,
                       // pregunta        : pregunta.value,
                       // respuesta       : respuesta.value,
                       // empleado        : empleado.value
		},
		function (data){
			if(data=="SU REGISTRO FUE REALIZADO CORRECTAMENTE"){
				$(location).attr('href','usuario.php');
			}else{
				alert(data);
			}
		}
	);
}

function login(){
	var usuario = document.form_usuario_reg.txtusuario;
	var clave = document.form_usuario_reg.txtclave;
	//alert(usuario.value+" "+clave.value);
        if(usuario.value !== "" && clave.value !== ""){
	$.post('conexion/usuario_validar.php', 
		{	usuario		: usuario.value,		
			clave 		: clave.value			
		},
		function (data){
                      
                     //  alert(co.value+" "+data);
			if(data==1){
                         alert("BIENVENIDO AL SISTEMA - REST. LA COCHERA");
                         $(location).attr('href','sistema/administrador/index.php');
			//	window.location.href = "sistema/administrador/index.php";
			}else{
                          
				 if(data==2){
                                        alert("BIENVENIDO AL SISTEMA - REST. LA COCHERA");
                                        $(location).attr('href','sistema/cliente/index.php');
                                 
                                   }else{
                                       
                                            if(data==3){
                                                alert("BIENVENIDO AL SISTEMA - REST. LA COCHERA");
                                                $(location).attr('href','sistema/asistente/index.php');
                                           
                                            }else{
                                               
                                                   alert(data);
                                            }
                                   }
			}
                       
                         
		}
	);}else{
            alert('Complete los dos campos');
        }
}
function prg_sec(){
	var usuario = document.frm_re.txtusuario;
	//alert(usuario.value);
	$.post('conexion/preguntasec.php', 
		{	usuario	: usuario.value		
		},
		function (data){
			if(data){
				cargarformulario('recup','conexion/preguntasec.php?usuario='+usuario.value);
			}
		}
	);
}
function cargarformulario(div,formulario)
{
	$("#"+div).load(formulario);
	$( "#"+div ).hide();
	if ( $( "#"+div ).is( ":hidden" ) ) {
    $( "#"+div ).slideDown( "slow" );
  } //else {
    //$( "#contenido" ).hide();
  //}
}
function validpreg(){
	var nombre = document.frm_re.txtnombre;
        var email = document.frm_re.txtemail;
        var phpmailer =document.frm_re.phpmailer;
         var usuario =document.frm_re.clave;
	//alert(usuario.value);
	$.post('conexion/envio_email.php', 
		{   
                    nombre     : nombre.value,
                    email      : email.value,
                   phpmailer   : phpmailer.value,
                   usuario     : usuario.value
		},
		function (data){
                // alert(data);
			if(data==1){
                            alert("SE EL ENVIO UN CORREO CON SU NUEVA CONTRASEÑA");
                            window.location.href ="index.php";
			}else{
				alert("ERROR AL ENVIAR EL CORREO");
			}
		}
	);
}

function registro(){
        var usuario = document.frm_creausuario.txtusuario;
	var clave = document.frm_creausuario.txtclave;
        var pregunta = document.frm_creausuario.txtpregunta;
        var respuesta = document.frm_creausuario.txtrespuesta;
        var empleado= document.frm_creausuario.txtPersonaID;
	//alert(pregunta.value+" "+respuesta.value+" "+empleado.value);
	$.post('usuario_registrar_ope.php', 
		{	usuario		: usuario.value,		
			clave 		: clave.value,
                        pregunta        : pregunta.value,
                        respuesta       : respuesta.value,
                        empleado        : empleado.value
		},
		function (data){
			if(data=="SU REGISTRO FUE REALIZADO CORRECTAMENTE"){
				$(location).attr('href','usuario.php');
			}else{
				alert(data);
			}
		}
	);
}



function eliminarusuario(usuario){
        //var usuario = document.frm_eliminarusuario.usuario;
      //  alert(usuario);
	//alert(pregunta.value+" "+respuesta.value+" "+empleado.value);
	$.post('usuario_eliminar_ope.php', 
		{	usuario		: usuario	     
		},
		function (data){
			if(data=="correcto"){
                            alert('Su registro se elimino correctamente');
				$(location).attr('href','usuario.php');
			}else{
				alert(data);
                                
			}
		}
	);
}

