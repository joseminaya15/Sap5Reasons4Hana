function solicitarEstimacion() {
	var nombre_completo = $('#nombre_completo').val(); 
	var empresa  		= $('#empresa').val();
	var email 	 		= $('#email').val();
	var pais 	 		= $('#pais').val();
	var cargo 	 		= $('#cargo').val();
	var telefono 		= $('#telefono').val();
	var relacion		= $('#relacion').val();
	var c_email    		= $('#c-email').is(':checked');
	var c_telefono    	= $('#c-telefono').is(':checked');
	var c_ambos    		= $('#c-ambos').is(':checked');
	var terminos		= $('#checkbox-1').is(':checked');
	var term_cond		= null;
	var contacto		= null;
	if(nombre_completo == '' && empresa == '' && email == '' && pais == '' && cargo == '' && telefono == '' && c_email == false && terminos == false) {
		validarCampos();
	}
	if(nombre_completo == null || nombre_completo == '') {
		msj('error', 'Enter your full name');
		return;
	}
	if(empresa == null || empresa == '') {
		msj('error', 'Enter your company');
		return;
	}
	if(email == null || email == '') {
		msj('error', 'Enter your email');
		return;
	}
	if (!validateEmail(email)) {
		$('#email').css('border-color','red');
		return;
	}
	if(pais == null || pais == '') {
		msj('error', 'Enter your country');
		return;
	}
	if(cargo == null || cargo == '') {
		msj('error', 'Enter your position');
		return;
	}
	if(telefono == null || telefono == '') {
		msj('error', 'Enter your phone');
		return;
	}
	if(relacion == null || relacion == '') {
		msj('error', 'Enter your relationship with SAP');
		return;
	}
	if(c_email == true) {
		contacto = 1;
	}else if(c_telefono == true) {
		contacto = 2;
	}else if(c_ambos == true) {
		contacto = 3;
	}
	if(contacto == null || contacto == '') {
		msj('error', 'Select the means by which you want to be contacted');
		  return;
	}
	if(terminos == true) {
		term_cond = 1
	}else {
		term_cond = 0;
	}
	if(terminos == false) {
		
		msj('error', 'Accept the terms and conditions');
		return;
	}
	$('.button-confirmar').prop("disabled", true);
	$.ajax({
		data  : { nombre_completo : nombre_completo,
				  empresa 	      : empresa,
				  email 		  : email,
				  pais 			  : pais,
				  cargo 		  : cargo,
				  telefono 		  : telefono,
				  relacion 		  : relacion,
				  contacto 		  : contacto,
				  term_cond       : term_cond},
		url   : 'es/solicitarEstimacion',
		type  : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
				if(confirmar == 1) {
					limpiarCampos();
				}
        	}else {
        		return;
        	}
      } catch (err){
        msj('error',err.message);
      }
	});
}
function soloLetras(e) {
    key 	   = e.keyCode || e.which;
    tecla 	   = String.fromCharCode(key).toLowerCase();
    letras     = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }
     if(letras.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
 }
 function valida(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){
        return true;
    }
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function validarCampos(){
	var $inputs = $('form :input');
	var formvalido = true;
	$inputs.each(function() {
		if(isEmpty($(this).val())){
				$(this).css('border-color','red');
				formvalido = false;
		}else{
				$(this).css('border-color','');
		}
	});
	return formvalido;
}
function isEmpty(val){
	if(jQuery.trim(val).length != 0)
    	return false;
		return true;
}
function limpiarCampos(){
	var nombre_completo = $('#nombre_completo').val("");
	var empresa  		= $('#empresa').val("");
	var email 	 		= $('#email').val("");
	var pais 	 		= $('#pais').val("");
	var cargo 	 		= $('#cargo').val("");
	var telefono 		= $('#telefono').val("");
	var relacion		= $('#relacion').val("0");
	$('.selectpicker').selectpicker('refresh');
	var c_email    		= $('#c-email').is(':checked');
	var c_telefono    	= $('#c-telefono').is(':checked');
	var c_ambos    		= $('#c-ambos').is(':checked');
	var terminos		= $('#checkbox-1').is(':checked');
	if(c_email == true) {
		$('#c-email').parent().removeClass('is-checked');
	}else if(c_telefono == true) {
		$('#c-telefono').parent().removeClass('is-checked');
	}else if(c_ambos == true) {
		$('#c-ambos').parent().removeClass('is-checked');
	}
}