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

//---------------------------------------------------
$(document).ready(
	function(){
    $('#addrutform').validate({
        rules: {
            modlgn_descripcion: { required: true, minlength: 6},
            modlgn_tarifa: { required: true, minlength: 1, number:true},
        },
        messages: {
			modlgn_descripcion:'Introduzca el nombre de la ruta (5 caracteres minimo)',
			modlgn_tarifa:'Introduza la tarifa(Solo números)',
        },
        submitHandler: function(form){
			if($('#idempresa').val()!='0'){
				var dataString = 'listaempresa='+$('#idempresa').val()+'&descipcion='+$('#modlgn_descripcion').val()+'&tarifa='+$('#modlgn_tarifa').val();
				//var dataString ='add=aadd'
				$.ajax({
					type: 'POST',
					url:'../controllers/rutas.php',
					data: dataString,
					success: function(dato){
					
						if(dato == "1" ){
							$('#modlgn_descripcion').val('');
							$('#modlgn_tarifa').val('');
							$('#idempresa').val('0');
							alert('Ruta Agregada correctamente');
						}
						else if (dato == "0"){
							alert("Error al insertar intentelo nuevamente");
						}
						else{
							alert(dato);
							alert('Faltan Parametros');
						}
					}
				});
			}
        }
    });
	
	//---------------------------------------------------
});