//---------------------------------------------------
function listaempresas(){
	var dataString ='list=obtenerListaEmpresas';
		$.ajax({
		type: 'GET',
		url:'../controllers/empresas.php',
		data: dataString,
		success: function(data){
			$('#idempresa').empty();
			$('#idempresa').append('<option value=0>Seleccione una empresa..</option>');
			$('#idempresa').append(data);
		}
	});
}
//---------------------------------------------------
function verEmpresas(){
	var dataString ='ver=informacionempresas';
		$.ajax({
		type: 'GET',
		url:'../controllers/empresas.php',
		data: dataString,
		success: function(data){
			$('#seebox').html(data);
		}
	});
}
//---------------------------------------------------

$(document).ready(
	function(){
    $("#addform").validate({
        rules: {
            modlgn_nombre: { required: true, minlength: 5},
            modlgn_telefono: { required: true, minlength: 8, number:true},
			modlgn_admin: { required: true, minlength: 5},
			modlgn_email: { required: true, email:true},
			modlgn_clave: { required: true, minlength: 5},
        },
        messages: {
			modlgn_nombre:'Introduzca el nombre de la Empresa (5 caracteres minimo)',
			modlgn_telefono:'Introduza el telefono(Solo números (8 caracteres minimo)',
			modlgn_admin:'Introduzca el nombre de Usuario Administrador (5 caracteres minimo)',
			modlgn_email:'Introduzca un email valido, me@example.com',
			modlgn_clave:'5 digitos minimo',
        },
        submitHandler: function(form){
            var dataString = 'empresa='+$('#modlgn_nombre').val()+'&telefono='+$('#modlgn_telefono').val()+'&usuario='+$('#modlgn_admin').val()+'&correo='+$('#modlgn_email').val() +'&clave='+$('#modlgn_clave').val();
			$.ajax({
                type: 'POST',
                url:'../controllers/empresas.php',
                data: dataString,
                success: function(data){
					if(data == "1" ){
						$('#modlgn_nombre').val('');
						$('#modlgn_telefono').val('');
						$('#modlgn_admin').val("");
						$('#modlgn_email').val("");
						$('#modlgn_clave').val("");
						alert('Empresa Agregada correctamente');
            
					}
					else if (data == "0"){
						alert("Error al insertar intentelo nuevamente");
					}
					else{
						alert('Faltan Parametros');
					}
                }
            });
        }
    });
	
	//---------------------------------------------------
	$("#editform").validate({
        rules: {
            emp_nombre: { required: true, minlength: 5},
            emp_telefono: { required: true, minlength: 8, number:true},
        },
        messages: {
			emp_nombre:"Introduzca el nuevo nombre de la Empresa (5 caracteres minimo)",
			emp_telefono:"Introduza el nuevo telefono(Solo números (8 caracteres minimo)",
        },
        submitHandler: function(form){
			if($('#idempresa').val()!= "0"){
				var dataString = 'idempresa='+$('#idempresa').val()+'&nombre_emp='+$('#emp_nombre').val()+'&tel_emp='+$('#emp_telefono').val();
				$.ajax({
					type: "POST",
					url:"../controllers/empresas.php",
					data: dataString,
					success: function(data){
						if(data == "1" ){
							$('#emp_nombre').val("");
							$('#emp_telefono').val("");
							$('#idempresa').val("0");
							listaempresas();
							alert("Empresa Editada");
				
						}
						else if (data == "0"){
							alert("Error al actualizar intentelo nuevamente");
						}
						else{
							alert("Faltan Parametros");
						}
					}
				});
			}
        }
    });
	
	
	//---------------------------------------------------
	$("#idempresa").change(function() {
		
		if($('#idempresa').val()!= "0"){
			var dataString ='data=getdatosempresa'+'&idempresa='+$('#idempresa').val();
			$.ajax({
				type: "GET",
				url:"../controllers/empresas.php",
				data: dataString,
				success: function(data){
					var datos = $.parseJSON(data);
					$('#emp_nombre').val(datos.Nombre);
					$('#emp_telefono').val(datos.Telefono);
				}
			});
		}
		else{
			$('#emp_nombre').val("");
			$('#emp_telefono').val("");
			$('#idempresa').val("0");
		}
	});
	
});


