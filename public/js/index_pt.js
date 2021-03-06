/*FRONT*/
var modal         = $('#ModalIndustria');
var modalMas      = $('#ModalMasIndustria');
var idIndustria   = null;
var casoIndustria = null;
function modalIndustria(id){
	var cardIndustria  = $('#'+id);
	var img_modal      = cardIndustria.find('img');
	var content_modal  = cardIndustria.find('p');
	var oneConcepto    = cardIndustria.find('.one');
	var twoConcepto    = cardIndustria.find('.two');
	var threeConcepto  = cardIndustria.find('.three');
	var fourConcepto   = cardIndustria.find('.four');
	var fiveConcepto   = cardIndustria.find('.five');
	modal.find('.mdl-card__title').find('img').attr({
        "alt"   : img_modal.attr('alt'),
        "src"   : img_modal.attr('src')
    });
    modal.find('.mdl-card__title').find('h2').text(content_modal[0].innerText);
    modal.find('.mdl-card__supporting-text').find('.one').text(oneConcepto[0].innerText);
    modal.find('.mdl-card__supporting-text').find('.two').text(twoConcepto[0].innerText);
    modal.find('.mdl-card__supporting-text').find('.three').text(threeConcepto[0].innerText);
    if(fiveConcepto.attr('id') == 'dontHave'){
    	modal.find('.mdl-card__supporting-text').find('.five').css('display','none');
    }else{
    	modal.find('.mdl-card__supporting-text').find('.five').css('display','list-item');
    	modal.find('.mdl-card__supporting-text').find('.five').text(fiveConcepto[0].innerText);
    }
    if(fourConcepto.attr('id') == 'dontHave4'){
    	modal.find('.mdl-card__supporting-text').find('.four').css('display','none');
    }else{
    	modal.find('.mdl-card__supporting-text').find('.four').css('display','list-item');
    	modal.find('.mdl-card__supporting-text').find('.four').text(fourConcepto[0].innerText);
    }
    modal.modal('toggle');
    modal.addClass(id);
    idIndustria = id;
}
function closeModal(){
	modal.removeClass(idIndustria);
	modal.modal('hide');	
}
function selectIndustria(){
	modal.modal('hide');
	$('.window-center').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
	$('#window2').addClass('animated fadeOutLeft');
	$('#'+idIndustria+'-contenido').addClass('animated fadeInRight');
	$('.button-industria').css("display","block");
	$('#window2').addClass('opacity-done');
	$.ajax({
		data : {idIndustria : idIndustria},
		url  : 'pt/selectIndustria',
		type : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
        	}else {return;}
      } catch (err){
        msj('error',err.message);
      }
	});
}
function Prev(){
	$('.window-center').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
	$('#'+idIndustria+'-contenido').addClass('animated fadeOutRight')
	$('#window2').addClass('animated fadeInLeft');
	$('.button-industria').css("display","none");
}
function Next(){
	$('.window-center').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
	$('#'+idIndustria+'-contenido').addClass('animated fadeOutLeft')
	$('#formulario').addClass('animated fadeInRight');
	$('.button-industria').css("display","none");
	nameIndustria(idIndustria);
}
/*BACK*/
function solicitarEstimacion(){
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
	var check_2 		= $('#checkbox-2').is(':checked');
	var share   		= $('#checkbox-3').is(':checked');
	var idioma 			= $('#Idioma').val();
	var term_cond		= null;
	var contacto		= null;
	if(nombre_completo == '' && empresa == '' && email == '' && pais == '' && cargo == '' && telefono == '' && c_email == false && terminos == false){
		validarCampos();
	}
	if(nombre_completo == null || nombre_completo == ''){
		msj('error', 'Insira seu nome completo');
		return;
	}
	if(empresa == null || empresa == ''){
		msj('error', 'Insira sua empresa');
		return;
	}
	if(email == null || email == ''){
		msj('error', 'Digite seu e-mail');
		return;
	}
	if(!validateEmail(email)){
		$('#email').css('border-color','red');
		msj('error', 'Email invalido');
		return;
	}
	if(pais == null || pais == ''){
		msj('error', 'Entre no seu país');
		return;
	}
	if(cargo == null || cargo == ''){
		msj('error', 'Insira sua posição');
		return;
	}
	if(telefono == null || telefono == ''){
		msj('error', 'Insira sua posição');
		return;
	}
	if(relacion == null || relacion == ''){
		msj('error', 'Selecione o que é o seu relacionamento com o SAP');
		return;
	}
	// if(c_email == true){
	// 	contacto = 1;
	// }else if(c_telefono == true){
	// 	contacto = 2;
	// }else if(c_ambos == true){
	// 	contacto = 3;
	// }
	/*if(contacto == null || contacto == ''){
		msj('error', 'Selecione os meios pelos quais você deseja entrar em contato');
		return;
	}*/
	// contacto = glob_contacto;
	if(terminos == true){
		term_cond = 1
	}else {
		term_cond = 0;
	}
	/*if(terminos == false){
		msj('error', 'Aceitar os termos e condições');
		return;
	}*/
	if(check_2 == true){
		checks = 'General Marketing';
	}
	if(share == true){
		checks = 'Sharing data';
	}
	if(check_2 == true && share == true){
		checks = 'General Marketing, Sharing data';
	}
	$('.button-confirmar').prop("disabled", true);
	$.ajax({
		data : {nombre_completo : nombre_completo,
				empresa 	    : empresa,
				email 		  	: email,
				pais 			: pais,
				cargo 		  	: cargo,
				telefono 		: telefono,
				relacion 		: relacion,
				term_cond       : term_cond,
				checks          : checks},
		url  : 'pt/solicitarEstimacion',
		type : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
				limpiarCampos();
				enviarGracias();
				if(data.idIndustria == null || data.idIndustria == undefined) {
					nameIndustria(idIndustria);
				}else {
					nameIndustria(data.idIndustria);
				}
        	}else {return;}
		} catch (err){
			msj('error',err.message);
		}
	});
}
function enviarGracias(){
	$('#formulario').addClass('animated fadeOutLeft');
	$('.mdl-agradecimiento').addClass('animated fadeInRight');
}
function soloLetras(e){
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
 function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){
        return true;
    }
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
function validateEmail(email){
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
	$('#nombre_completo').val("");
	$('#empresa').val("");
	$('#email').val("");
	$('#pais').val("");
	$('#cargo').val("");
	$('#telefono').val("");
	$('#relacion').val("0");
	$('.selectpicker').selectpicker('refresh');
	var c_email    = $('#c-email').is(':checked');
	var c_telefono = $('#c-telefono').is(':checked');
	var c_ambos    = $('#c-ambos').is(':checked');
	$('#checkbox-1').is(':checked');
	if(c_email == true){
		$('#c-email').parent().removeClass('is-checked');
	}else if(c_telefono == true){
		$('#c-telefono').parent().removeClass('is-checked');
	}else if(c_ambos == true){
		$('#c-ambos').parent().removeClass('is-checked');
	}
}
function cambiarIdioma(){
	var idioma = $('#Idioma').val();
	if(idioma == 'Español'){
		location.href = 'Es';
	}else if(idioma == 'Inglés'){
		location.href = 'En';
	}else if(idioma == 'Portugués'){
		location.href = 'Pt';
	}
	$.ajax({
		data : {idioma : idioma},
		url  : 'pt/cambiarIdioma',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error != 0){return;}
      } catch (err){
        msj('error',err.message);
      }
	});
}
function openIndustria(id){
	var buttonMas  = $("#"+id);
	var imgModal   = buttonMas.parent().parent().find('.card-front').find('img');
	var titleModal = buttonMas.parent().find('p');
	var labelModal = buttonMas.parent().find('label');
	modalMas.find('.mdl-card__supporting-text').find('p').text(titleModal[0].innerText);
    modalMas.find('.mdl-card__supporting-text').find('label').text(labelModal[0].innerText);
    modalMas.find('.mdl-card__title').find('img').attr({
        "alt"   : imgModal.attr('alt'),
        "src"   : imgModal.attr('src')
    });
    modalMas.modal('toggle');
}
function returnCaso(){
	var nameCaso = casoIndustria;
	if(nameCaso == 'Serviços Profissionais'){
		$('#donwloadCaso').attr({
			href : 'https://www.sap.com/brazil/assetdetail/2017/12/c60e6472-e67c-0010-82c7-eda71af511fa.html',
			target: '_blank'
		});
	}
	else if(nameCaso == 'Varejo'){
		$('#donwloadCaso').attr({
			href : 'https://www.sap.com/brazil/documents/2018/07/ec4a3b11-0e7d-0010-87a3-c30de2ffd8ff.html',
			target:'_blank'
		});
	}
	else if(nameCaso == 'Bens de Consumo'){
		$('#donwloadCaso').attr({
			href : 'https://www.sap.com/brazil/documents/2018/07/fa9f7793-0f7d-0010-87a3-c30de2ffd8ff.html',
			target:'_blank'
		});
	}
	else if(nameCaso == 'Processo e Manufatura'){
		$('#donwloadCaso').attr({
			href : 'https://www.sap.com/brazil/documents/2018/07/da3f2de0-0f7d-0010-87a3-c30de2ffd8ff.html',
			target:'_blank'
		});
	}
	else if(nameCaso == 'Distribuição Atacadista'){
		$('#donwloadCaso').attr({
			href: 'https://www.sap.com/latinamerica/assetdetail/2016/09/58792352-187d-0010-87a3-c30de2ffd8ff.html',
			target: '_blank'
		});
	}
	else if(nameCaso == 'Alta tecnologia'){
		$('#donwloadCaso').attr({
			href: 'https://www.sap.com/brazil/documents/2018/06/1c2c17d1-0b7d-0010-87a3-c30de2ffd8ff.html',
			target: '_blank'
		});
	}
	else if(nameCaso == 'Serviços Financeiros'){
		$('#donwloadCaso').attr({
			href: 'https://www.sap.com/brazil/assetdetail/2018/07/22c744a8-107d-0010-87a3-c30de2ffd8ff.html',
			target: '_blank'
		});
	} else {
		$('#donwloadCaso').attr({
			href: 'https://www.sap.com/brazil/documents/2018/06/869a6979-0b7d-0010-87a3-c30de2ffd8ff.html',
			target: '_blank'
		});
	}
	setTimeout(function(){ 
		location.reload();
	}, 4000);
}
function nameIndustria(idIndustria){
	if(idIndustria == 'industriaServicio'){
		$('.nameIndustria').text('Serviços Profissionais');
		$('.nameCompany').text('uma empresa');
	}else if(idIndustria == 'industriaRetail'){
		$('.nameIndustria').text('Varejo');
		$('.nameCompany').text('uma empresa');
	}else if(idIndustria == 'industriaProducto'){
		$('.nameIndustria').text('Bens de Consumo');
		$('.nameCompany').text('uma empresa');
	}else if(idIndustria == 'industriaProceso'){
		$('.nameIndustria').text('Processo e Manufatura');
		$('.nameCompany').text('uma empresa');
	}else if(idIndustria == 'industriaDistribucion'){
		$('.nameIndustria').text('Distribuição Atacadista');
		$('.nameCompany').text('uma empresa');
	}else if(idIndustria == 'industriaHighTech'){
		$('.nameIndustria').text('Alta tecnologia');
		$('.nameCompany').text('LIQ');
	}else{
		$('.nameIndustria').text('Serviços Financeiros');
		$('.nameCompany').text('uma empresa');
	}
	casoIndustria = $('#'+idIndustria).find('p').text();
}
function returnHome(){
	global_datos = null;
	$.ajax({
		url  : 'pt/returnHome',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	location.href = 'pt';
        }else{
        	return;
        }
      } catch (err){
        msj('error',err.message);
      }
	});
}
function buttonBack(){
	$('.window-center').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
	$('#'+idIndustria+'-contenido').addClass('animated fadeInLeft')
	$('#formulario').addClass('animated fadeOutRight');
	$('.button-industria').css("display","block");
}
function getDatos(datos,datosPdf){
	$.ajax({
		data : {
			datos    : datos,
			datosPdf : datosPdf
		},
		url  : 'es/getDatos',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error != 0){return;}
      } catch (err){
        msj('error',err.message);
      }
	});
}
function closePoliticas(){
	$('#ModalPoliticas').modal('hide');
}
var checks = '';
function acceptPoliticas(){
	var check_2 = $('#checkbox-2').is(':checked');
	var share   = $('#checkbox-3').is(':checked');
	var c_email    = $('#c-email').is(':checked');
	var c_telefono = $('#c-telefono').is(':checked');
	var c_ambos    = $('#c-ambos').is(':checked');
	if(c_email == true){
		glob_contacto = 1;
	}else if(c_telefono == true){
		glob_contacto = 2;
	}else if(c_ambos == true){
		glob_contacto = 3;
	}
	if(check_2 == true){
		checks = 'General Marketing';
	}
	if(share == true){
		checks = 'Sharing data';
	}
	if(check_2 == true && share == true){
		checks = 'General Marketing, Sharing data';
	}
	$('#checkbox-1').prop('checked', true);
	$('#checkbox-1').parent().addClass('is-checked');
	$('#ModalPoliticas').modal('hide');
}
$('#checkbox-1').change(function(){
	$('#ModalPoliticas').modal('show');
})
$('#checkbox-3').change(function(){
	var share   = $('#checkbox-3').is(':checked');
	if(share == true){
		$('.js-modal').find('.mdl-card__supporting-text').find('p').css('display','block');
		$('.js-modal').find('.js-contact-label').css('display','flex');
	}else{
		$('.js-modal').find('.mdl-card__supporting-text').find('p').css('display','none');
		$('.js-modal').find('.js-contact-label').css('display','none');
	}
})