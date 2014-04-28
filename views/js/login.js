$(document).ready(
	function() {
    $("#loginform").validate({
        rules: {
            usuario: { required: true, minlength: 5},
            clave: { required: true, minlength: 5},
        },
        messages: {
            usuario: "Introduzca su nombre de usuario (5 caracteres minimo) ",
            clave: "Debe introducir su apellido (6 caracteres minimo)",
        },
        submitHandler: function(form){
            var dataString = 'usuario='+$('#usuario').val()+'&clave='+$('#clave').val()+'&opcion='+$("input[name='opcion']:checked").val();
            $.ajax({
                type: "POST",
                url:"../controllers/general.php",
                data: dataString,
                success: function(data){
					if(data == "1" ){
						window.location= "indexAdmin.php";
					}
					else if (data == "2"){
						window.location= "indexEmpresa.php";
					}
					else if (data == "0"){
						alert("Usuario o contraseña incorrectos");
						$('#usuario').val("");
						$('#clave').val("");
					}
					else if (data == "-5"){
						alert("Parametros incorrectos");
					}
					else{
						alert("Faltan Parametros");
					}
                }
            });
        }
    });
});