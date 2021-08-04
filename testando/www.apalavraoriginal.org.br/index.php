
<!doctype html>
<html lang="pt-BR">
<head>
<title>Tabernáculo da Fé - Goiânia - GO</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="alternate" hreflang="x" href="www.tabernaculodafe.org.br">
<link rel="alternate" hreflang="x" href="www.apalavraoriginal.org.br">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Tabernáculo da Fé em Goiânia - GO">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="O8efVjzxPR8NYAqxgCi6fEcFO_8pSmgXWZap-NjrETg" />

<!-- BXSLIDER -->	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<!-- MENU RESPONSIVE -->
<script type="text/javascript" src="https://daks2k3a4ib2z.cloudfront.net/52e691711d6760632b000b0c/js/webflow.js?9d2d6893e3a09320a7a0283725bdbf90">//</script> 

<!-- SLIDER WEBRADIO -->
<link rel="stylesheet" href="www.apalavraoriginal.org.br/webradio/rangeslider.css">

<!-- BXSLIDER --> 
<link rel="stylesheet" href="jquery/bxslider-4-4.2.12/src/css/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.j"></script>
<script src="jquery/bxslider-4-4.2.12/src/js/jquery.bxslider.js"></script>

<!-- FONTS --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script> 
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script> 

<!-- SLICK 	https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js--> 

<script>
WebFont.load({
  google: {
    families: ["Vollkorn:400,400italic,700,700italic","Roboto Condensed:300,regular,700","Roboto:300,regular,500"]
  }
});
</script> 

<!-- jQuery Parallax --> 
<script type="text/javascript">
$(document).ready(function(){
    //.parallax(xPosition, speedFactor, outerHeight) options:
    //xPosition - Horizontal position of the element
    //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
    //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
    $('.banner').parallax("50%", 0.5);
	//$('.banner_encontro').parallax("50%", 0.5);
})
</script> 
<!-- /jQuery Parallax --> 
	
<!-- JQuery bxSlider --> 
<script type="text/javascript">
	$(document).ready(function(){
		$('.slider').bxSlider(
			{
			  auto: true,
			  autoControls: false,
			  stopAutoOnClick: true,
			  touchEnabled: false,
			  pause: 10000,
			  minHeight: 429,
			  pager: true,
			}
		);
	});
</script> 
<!-- /JQuery bxSlider --> 
	

<!-- GOOGLE ANALYTICS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-9316147-2', 'auto');
  ga('require', 'linkid');
  ga('send', 'pageview');
</script>
<!-- /FIM GOOGLE ANALYTICS --><script type="text/javascript">
	// Funções para esconder DIV
    function toggleA_visibility(id1, id2, id3, id4, id5, id6) {
		
       var a = document.getElementById(id1); // notifica irmao
	   var b = document.getElementById(id2); // notifica igreja
       var c = document.getElementById(id3); // notifica pais
       var d = document.getElementById(id4); // notifica form irmao
	   var e = document.getElementById(id5); // notifica form igreja
       var f = document.getElementById(id6); // notifica form pais
	   
       if(a.style.display == 'block')
          a.style.display = 'none';
		  b.style.display = 'block';
		  c.style.display = 'block';
		  d.style.display = 'block';
		  e.style.display = 'none';
		  f.style.display = 'none';
    }
	
	function toggleB_visibility(id1, id2, id3, id4, id5, id6) {
		
       var a = document.getElementById(id1); // notifica irmao
	   var b = document.getElementById(id2); // notifica igreja
       var c = document.getElementById(id3); // notifica pais
       var d = document.getElementById(id4); // notifica form irmao
	   var e = document.getElementById(id5); // notifica form igreja
       var f = document.getElementById(id6); // notifica form pais
	   
       if(b.style.display == 'block')
          a.style.display = 'block';
		  b.style.display = 'none';
		  c.style.display = 'block';
		  d.style.display = 'none';
		  e.style.display = 'block';
		  f.style.display = 'none';
    }
	
	function toggleC_visibility(id1, id2, id3, id4, id5, id6) {
		
       var a = document.getElementById(id1); // notifica irmao
	   var b = document.getElementById(id2); // notifica igreja
       var c = document.getElementById(id3); // notifica pais
       var d = document.getElementById(id4); // notifica form irmao
	   var e = document.getElementById(id5); // notifica form igreja
       var f = document.getElementById(id6); // notifica form pais
	   
       if(c.style.display == 'block')
          a.style.display = 'block';
		  b.style.display = 'block';
		  c.style.display = 'none';
		  d.style.display = 'none';
		  e.style.display = 'none';
		  f.style.display = 'block';
    }
</script><!-- VALIDA FORMS AUDIENCIA --> 
<script type="text/javascript">
function validar(){ //Quando sair do campo	
	$(this).css("border-color", "rgba(255,255,255,0.20)");
	if ($(this).val().length < 3){
		$(this).css("border-color", "red");
	}
	if (!isNaN($(this).val())){
		$(this).css("border-color", "red");
	}
	if ($(this).val() == ""){
		$(this).css("border-color", "rgba(255,255,255,0.20)");
	}
};
	
function validarNum(){ //Quando sair do campo	
	$(this).css("border-color", "rgba(255,255,255,0.20)");
	if (isNaN($(this).val()) || $(this).val() == "0"){
		$(this).css("border-color", "red");
	}
	if ($(this).val() == ""){
		$(this).css("border-color", "rgba(255,255,255,0.20)");
	}
};
	
function restauraCss(){
	$(this).css("border-color", "rgba(255,255,255,0.20)");
};
</script>
<!-- VALIDA FORMS AUDIENCIA --> 
<!-- FUNCOES FORMS AUDIENCIA --> 
<script type="text/javascript">
$(document).ready( function(){ 
    $("#nome_irmao").blur(validar);
    $("#nome_irmao").focus(restauraCss);
    $("#cidade_irmao").blur(validar);
    $("#cidade_irmao").focus(restauraCss);
    $("#estado_irmao").focus(restauraCss);
    $("#quantidade_irmao").blur(validarNum);
    $("#quantidade_irmao").focus(restauraCss);

    $("#pastor_igreja").blur(validar);
    $("#pastor_igreja").focus(restauraCss);
    $("#cidade_igreja").blur(validar);
    $("#cidade_igreja").focus(restauraCss);
    $("#estado_igreja").focus(restauraCss);
    $("#quantidade_igreja").blur(validarNum);
    $("#quantidade_igreja").focus(restauraCss);

    $("#nome_pais").blur(validar);
    $("#nome_pais").focus(restauraCss);
    $("#estado_pais").blur(validar);
    $("#estado_pais").focus(restauraCss);
    $("#pais_pais").blur(validar);
    $("#pais_pais").focus(restauraCss);
    $("#quantidade_pais").blur(validarNum);
    $("#quantidade_pais").focus(restauraCss);

});

$(document).ready( function(){ 
	//FORM IRMÃO
	$('#resetar_irmao').click( function(){
		$("#nome_irmao").css("border-color", "rgba(255,255,255,0.20)");
		$("#cidade_irmao").css("border-color", "rgba(255,255,255,0.20)");
		$("#estado_irmao").css("border-color", "rgba(255,255,255,0.20)");
		$("#quantidade_irmao").css("border-color", "rgba(255,255,255,0.20)");
		$("#formInfo_irmao").html('')
		$('.notificaAudiencia').css("height", "280px");
		$('.notificaAudiencia').css("outline", "none");
	});
	//Envia Formulário Irmão
	$('#form_irmao').submit( function(){
		/* Quando clicar em Comunicar */
		$('IDenviaIrmao').mouseout( function(){
			$('#formInfo_irmao').slideUp( 'slow' );
			$("#formInfo_irmao").html('')
		});
		/* Coletando dados */
		var tipo  		= $('#tipo_irmao').val();
		var nome  		= $('#nome_irmao').val();
		var cidade 		= $('#cidade_irmao').val();
		var estado 		= $('#estado_irmao').val();
		var quantidade  = $('#quantidade_irmao').val();

		if(nome == ""){
			$('#nome_irmao').css("border-color", "red");
		}
		if(cidade == ""){
			$('#cidade_irmao').css("border-color", "red");
		}
		if(estado == ""){
			$('#estado_irmao').css("border-color", "red");
		}
		if(quantidade == ""){
			$('#quantidade_irmao').css("border-color", "red");
		}

		var nomeBorderColor         = $("#nome_irmao").css("border-color");
		var cidadeBorderColor       = $("#cidade_irmao").css("border-color");
		var estadoBorderColor       = $("#estado_irmao").css("border-color");
		var quantidadeBorderColor   = $("#quantidade_irmao").css("border-color");

		//valida campos - identifica se algum campo está com borda vermelha
		if (nomeBorderColor == "rgb(255, 0, 0)" || cidadeBorderColor == "rgb(255, 0, 0)" || quantidadeBorderColor == "rgb(255, 0, 0)" || estadoBorderColor == "rgb(255, 0, 0)"){
			$("#formInfo_irmao").html('Preencha corretamente os campos marcados em vermelho!');
			$('#formInfo_irmao').slideDown( 'slow' );
			$('.notificaAudiencia').css("height", "280px");
			$("#nome_irmao").focus(function(){
				$("#formInfo_irmao").html('')
				$('.notificaAudiencia').css("height", "280px");
				$('.notificaAudiencia').css("outline", "none");
			});	
			$("#cidade_irmao").focus(function(){
				$("#formInfo_irmao").html('')
				$('.notificaAudiencia').css("height", "280px");
				$('.notificaAudiencia').css("outline", "none");
			});	
			$("#estado_irmao").focus(function(){
				$("#formInfo_irmao").html('')
				$('.notificaAudiencia').css("height", "280px");
				$('.notificaAudiencia').css("outline", "none");
			});
			$("#quantidade_irmao").focus(function(){
				$("#formInfo_irmao").html('')
				$('.notificaAudiencia').css("height", "280px");
				$('.notificaAudiencia').css("outline", "none");
			});
			return false;	
		} 

		/* construindo url */
		var urlData = "&tipo=" + tipo + "&nome=" + nome + "&cidade=" + cidade + "&estado=" + estado + "&quantidade=" + quantidade;

		$.ajax({
			 type: "POST",
			 url: "audiencia_form_send.php", 
			 async: true,
			 data: urlData, 
			 beforeSend: function () {
				  $('#infoAudiencia').css("display", "block");
				  $('#iconAudiencia').css("display", "none");
				  $('#IDEnviandoForm').css("display", "block");
				  $('#IDsucessoForm').css("display", "none");
				  $('#IDerroForm').css("display", "none");
			 },
			 success: function (data) {
				 $('#IDEnviandoForm').css("display", "none");
				 $('#IDerroForm').css("display", "none");
				 $('#IDsucessoForm').css("display", "block");

				 $('#notifica_form_irmao').css("display", "none");
				 $('#notifica_icone_irmao').css("display", "block");
				 $('#notifica_form_igreja').css("display", "none");
				 $('#notifica_icone_igreja').css("display", "block");
				 $('#notifica_form_pais').css("display", "none");
				 $('#notifica_icone_pais').css("display", "block");

			 },
			 error: function () {
				  $('#IDEnviandoForm').css("display", "none");
				  $('#IDerroForm').css("display", "block");
				  $('#IDsucessoForm').css("display", "none");
			 },
			 complete: function () {
				 $('#form_irmao').each(function(){
					this.reset();
				 });
			 }
		});
		return false;
	});
		
	//FORM IGREJA
	$('#resetar_igreja').click( function(){
		$("#pastor_igreja").css("border-color", "rgba(255,255,255,0.20)");
		$("#cidade_igreja").css("border-color", "rgba(255,255,255,0.20)");
		$("#estado_igreja").css("border-color", "rgba(255,255,255,0.20)");
		$("#quantidade_igreja").css("border-color", "rgba(255,255,255,0.20)");

		$("#formInfo_igreja").html('')
		$('.notificaAudiencia').css("height", "280px");
		$('.notificaAudiencia').css("outline", "none");
	});
		//Envia Formulário Igreja
	$('#form_igreja').submit( function(){
			/* Quando clicar em Comunicar */
			$('IDenviaIgreja').mouseout( function(){
				$('#formInfo_igreja').slideUp( 'slow' );
				$("#formInfo_igreja").html('')
			});
	        /* Coletando dados */
			var tipo  		= $('#tipo_igreja').val();
	        var pastor  	= $('#pastor_igreja').val();
	        var cidade 		= $('#cidade_igreja').val();
	        var estado 		= $('#estado_igreja').val();
			var quantidade  = $('#quantidade_igreja').val();
			
			if(pastor == ""){
				$('#pastor_igreja').css("border-color", "red");
			}
			if(cidade == ""){
				$('#cidade_igreja').css("border-color", "red");
			}
			if(estado == ""){
				$('#estado_igreja').css("border-color", "red");
			}
			if(quantidade == ""){
				$('#quantidade_igreja').css("border-color", "red");
			}
			
			var pastorBorderColor       = $("#pastor_igreja").css("border-color");
			var cidadeBorderColor       = $("#cidade_igreja").css("border-color");
			var estadoBorderColor       = $("#estado_igreja").css("border-color");
			var quantidadeBorderColor   = $("#quantidade_igreja").css("border-color");
			
			//valida campos - identifica se algum campo está com borda vermelha
			if (pastorBorderColor == "rgb(255, 0, 0)" || cidadeBorderColor == "rgb(255, 0, 0)" || quantidadeBorderColor == "rgb(255, 0, 0)" || estadoBorderColor == "rgb(255, 0, 0)"){
				$("#formInfo_igreja").html('Preencha corretamente os campos marcados em vermelho!');
				$('#formInfo_igreja').slideDown( 'slow' );
				$('.notificaAudiencia').css("height", "280px");
				$("#pastor_igreja").focus(function(){
					$("#formInfo_igreja").html('')
					$('.notificaAudiencia').css("height", "280px");
					$('.notificaAudiencia').css("outline", "none");
				});	
				$("#cidade_igreja").focus(function(){
					$("#formInfo_igreja").html('')
					$('.notificaAudiencia').css("height", "280px");
					$('.notificaAudiencia').css("outline", "none");
				});	
				$("#estado_igreja").focus(function(){
					$("#formInfo_igreja").html('')
					$('.notificaAudiencia').css("height", "280px");
					$('.notificaAudiencia').css("outline", "none");
				});
				$("#quantidade_igreja").focus(function(){
					$("#formInfo_igreja").html('')
					$('.notificaAudiencia').css("height", "280px");
					$('.notificaAudiencia').css("outline", "none");
				});
				return false;	
			} 
		
	        /* construindo url */
	        var urlData = "&tipo=" + tipo + "&pastor=" + pastor + "&cidade=" + cidade + "&estado=" + estado + "&quantidade=" + quantidade;
	 
	        $.ajax({
	             type: "POST",
	             url: "audiencia_form_send.php", 
	             async: true,
	             data: urlData, 
       			 beforeSend: function () {
					  $('#infoAudiencia').css("display", "block");
					  $('#iconAudiencia').css("display", "none");
            	 	  $('#IDEnviandoForm').css("display", "block");
					  $('#IDsucessoForm').css("display", "none");
					  $('#IDerroForm').css("display", "none");
        		 },
        		 success: function (data) {
            	 	 $('#IDEnviandoForm').css("display", "none");
					 $('#IDerroForm').css("display", "none");
					 $('#IDsucessoForm').css("display", "block");
					 
		 			 $('#notifica_form_irmao').css("display", "none");
		 			 $('#notifica_icone_irmao').css("display", "block");
					 $('#notifica_form_igreja').css("display", "none");
		 			 $('#notifica_icone_igreja').css("display", "block");
					 $('#notifica_form_pais').css("display", "none");
		 			 $('#notifica_icone_pais').css("display", "block");
 
        		 },
      			 error: function () {
            	 	  $('#IDEnviandoForm').css("display", "none");

					  $('#IDerroForm').css("display", "block");
					  $('#IDsucessoForm').css("display", "none");
      		 	 },
				 complete: function () {
					 $('#form_igreja').each(function(){
  		 				this.reset();
					 });
				 }
	        });
	    	return false;
 		});
		
	//FORM PAIS
	$('#resetar_pais').click( function(){
		$("#nome_pais").css("border-color", "rgba(255,255,255,0.20)");
		$("#estado_pais").css("border-color", "rgba(255,255,255,0.20)");
		$("#pais_pais").css("border-color", "rgba(255,255,255,0.20)");
		$("#quantidade_pais").css("border-color", "rgba(255,255,255,0.20)");
		$("#formInfo_pais").html('')
		$('.notificaAudiencia').css("height", "280px");
		$('.notificaAudiencia').css("outline", "none");
	});
	//Envia Formulário Pais
	$('#form_pais').submit( function(){
			/* Quando clicar em Comunicar */
			$('IDenviaPais').mouseout( function(){
				$('#formInfo_pais').slideUp( 'slow' );
				$("#formInfo_pais").html('')
			});
	        /* Coletando dados */
			var tipo  		= $('#tipo_pais').val();
	        var nome  		= $('#nome_pais').val();
	        var estado 		= $('#estado_pais').val();
	        var pais 		= $('#pais_pais').val();
			var quantidade  = $('#quantidade_pais').val();
			
			if(nome == ""){
				$('#nome_pais').css("border-color", "red");
			}
			if(estado == ""){
				$('#estado_pais').css("border-color", "red");
			}
			if(pais == ""){
				$('#pais_pais').css("border-color", "red");
			}
			if(quantidade == ""){
				$('#quantidade_pais').css("border-color", "red");
			}
			
			var nomeBorderColor         = $("#nome_pais").css("border-color");
			var estadoBorderColor       = $("#estado_pais").css("border-color");
			var paisBorderColor       	= $("#pais_pais").css("border-color");
			var quantidadeBorderColor   = $("#quantidade_pais").css("border-color");
			
			//valida campos - identifica se algum campo está com borda vermelha
			if (nomeBorderColor == "rgb(255, 0, 0)" || estadoBorderColor == "rgb(255, 0, 0)" || paisBorderColor == "rgb(255, 0, 0)" || quantidadeBorderColor == "rgb(255, 0, 0)"){
				$("#formInfo_pais").html('Preencha corretamente os campos marcados em vermelho!');
				$('#formInfo_pais').slideDown( 'slow' );
				$('.notificaAudiencia').css("height", "280px");
				$("#nome_pais").focus(function(){
					$("#formInfo_pais").html('')
					$('.notificaAudiencia').css("height", "280px");
					$('.notificaAudiencia').css("outline", "none");
				});	
				$("#estado_pais").focus(function(){
					$("#formInfo_pais").html('')
					$('.notificaAudiencia').css("height", "280px");
					$('.notificaAudiencia').css("outline", "none");
				});	
				$("#pais_pais").focus(function(){
					$("#formInfo_pais").html('')
					$('.notificaAudiencia').css("height", "280px");
					$('.notificaAudiencia').css("outline", "none");
				});
				$("#quantidade_pais").focus(function(){
					$("#formInfo_pais").html('')
					$('.notificaAudiencia').css("height", "280px");
					$('.notificaAudiencia').css("outline", "none");
				});
				return false;	
			} 
		
	        /* construindo url */
	        var urlData = "&tipo=" + tipo + "&nome=" + nome + "&estado=" + estado + "&pais=" + pais + "&quantidade=" + quantidade;
	 
	        $.ajax({
	             type: "POST",
	             url: "audiencia_form_send.php", 
	             async: true,
	             data: urlData, 
       			 beforeSend: function () {
					  $('#infoAudiencia').css("display", "block");
					  $('#iconAudiencia').css("display", "none");
            	 	  $('#IDEnviandoForm').css("display", "block");
					  $('#IDsucessoForm').css("display", "none");
					  $('#IDerroForm').css("display", "none");
        		 },
        		 success: function (data) {
            	 	 $('#IDEnviandoForm').css("display", "none");
					 $('#IDerroForm').css("display", "none");
					 $('#IDsucessoForm').css("display", "block");
					 
		 			 $('#notifica_form_irmao').css("display", "none");
		 			 $('#notifica_icone_irmao').css("display", "block");
					 $('#notifica_form_igreja').css("display", "none");
		 			 $('#notifica_icone_igreja').css("display", "block");
					 $('#notifica_form_pais').css("display", "none");
		 			 $('#notifica_icone_pais').css("display", "block");
 
        		 },
      			 error: function () {
            	 	  $('#IDEnviandoForm').css("display", "none");
					  $('#IDerroForm').css("display", "block");
					  $('#IDsucessoForm').css("display", "none");
      		 	 },
				 complete: function () {
					 $('#form_pais').each(function(){
  		 				this.reset();
					 });
				 }
	        });
	    	return false;
 		});
});
</script>
<!-- /FUNCOES FORMS AUDIENCIA --> 

<script>
$(document).ready(function()
{
	$( '#trocaAudiencia' ).click(function () {
  		if ( $( '#toggleAudiencia:first' ).is( ':hidden' ) ) {
   		   $( '#toggleAudiencia' ).slideDown( 'slow' );
 		} else {
   		   $( '#toggleAudiencia' ).slideUp( 'slow' );
  		}
		$('#notifica_form_irmao').css("display", "none");
		$('#notifica_icone_irmao').css("display", "block");
		$('#notifica_form_igreja').css("display", "none");
		$('#notifica_icone_igreja').css("display", "block");
		$('#notifica_form_pais').css("display", "none");
		$('#notifica_icone_pais').css("display", "block");
	});
});

$(document).ready(function()
{
	$('#IDsucessoCloseForm').click(function () {
		 $('#toggleAudiencia').slideUp('slow');	
         $('#IDEnviandoForm').css("display", "none");
		 $('#IDerroForm').css("display", "none");
		 $('#IDsucessoForm').css("display", "none");
		 $('#infoAudiencia').css("display", "none");
		 $('#iconAudiencia').slideDown( 'slow' );
	});
});

$(document).ready(function()
{
	$( '#trocaEmail' ).click(function () {
  		if ( $( '#envia_email:first' ).is( ':hidden' ) ) {
   		   $( '#envia_email' ).slideDown( 'slow' );
 		} else {
   		   $( '#envia_email' ).slideUp( 'slow' );
  		}
	});
	$( '#trocaEmailX' ).click(function () {
  		if ( $( '#envia_email:first' ).is( ':hidden' ) ) {
   		   $( '#envia_email' ).slideDown( 'slow' );
 		} else {
   		   $( '#envia_email' ).slideUp( 'slow' );
  		}
	});
});

$(document).ready(function()
{
	$('#IDsucessoCloseFormEmail').click(function () {
		 $('#envia_email').slideUp('slow');
         $('#IDEnviandoFormEmail').css("display", "none");
		 $('#IDerroFormEmail').css("display", "none");
		 $('#IDsucessoFormEmail').css("display", "none");
		 $('#infoEmail').css("display", "none");
	});
});
</script><!-- FORMS EMAIL -->
<script type="text/javascript">
//funcoes de Validacao
function validarEmail(){ //Quando sair do campo	
    $(this).css("border-color", "rgba(255,255,255,0.20)");
    if ($(this).val().length < 3){
        $(this).css("border-color", "red");
    }
    if (!isNaN($(this).val())){
        $(this).css("border-color", "red");
    }
    if ($(this).val() == ""){
        $(this).css("border-color", "rgba(255,255,255,0.20)");
    }
};
function restauraCssEmail(){
	$(this).css("border-color", "rgba(255,255,255,0.20)");
};

//Valida Form
$(document).ready( function(){ 
    //Valida Form
    $("#digite_email").blur(validarEmail);
    $("#digite_email").focus(restauraCssEmail);
    $("#assunto_email").blur(validarEmail);
    $("#assunto_email").focus(restauraCssEmail);
    $("#nome_email").blur(validarEmail);
    $("#nome_email").focus(restauraCssEmail);
    $("#mensagem_email").blur(validarEmail);
    $("#mensagem_email").focus(restauraCssEmail);
});

$(document).ready( function(){ 
	//FORM EMAIL
	$('#resetar_email').click( function(){
		$("#digite_email").css("border-color", "rgba(255,255,255,0.20)");
		$("#assunto_email").css("border-color", "rgba(255,255,255,0.20)");
		$("#nome_email").css("border-color", "rgba(255,255,255,0.20)");
		$("#mensagem_email").css("border-color", "rgba(255,255,255,0.20)");
		$("#formInfo_email").html('')
	});
	//Envia Formulário Irmão
	$('#form_email').submit( function(){
        /* Quando clicar em Comunicar */
        $('IDenviaEmail').mouseout( function(){
            $('#formInfo_email').slideUp( 'slow' );
            $('#formInfo_email').html('')
        });
        /* Coletando dados */
        var email  		= $('#digite_email').val();
        var assunto	    = $('#assunto_email').val();
        var nome  		= $('#nome_email').val();
        var telefone  	= $('#telefone_email').val();
        var celular  	= $('#celular_email').val();
        var endereco	= $('#endereco_email').val();
        var cidade   	= $('#cidade_email').val();
        var cep     	= $('#cep_email').val();
        var estado  	= $('#estado_email').val();
        var pais 	    = $('#pais_email').val();
        var pastor  	= $('#pastor_email').val();
        var mensagem    = $('#mensagem_email').val();

        if(email == ""){
            $('#digite_email').css("border-color", "red");
        }
        if(assunto == ""){
            $('#assunto_email').css("border-color", "red");
        }
        if(nome == ""){
            $('#nome_email').css("border-color", "red");
        }
        if(mensagem == ""){
            $('#mensagem_email').css("border-color", "red");
        }

        var emailBorderColor      = $("#email_email").css("border-color");
        var assuntoBorderColor    = $("#assunto_email").css("border-color");
        var nomeBorderColor       = $("#nome_email").css("border-color");
        var mensagemBorderColor   = $("#mensagem_email").css("border-color");

        //valida campos - identifica se algum campo está com borda vermelha
        if (emailBorderColor == "rgb(255, 0, 0)" || assuntoBorderColor == "rgb(255, 0, 0)" || nomeBorderColor == "rgb(255, 0, 0)" || mensagemBorderColor == "rgb(255, 0, 0)"){
            $("#formInfo_email").html('Os&nbsp;campos marcados em vermelho são obrigatórios!');
            $('#formInfo_email').slideDown( 'slow' );

            $("#digite_email").focus(function(){
                $("#formInfo_email").html('')
            });	
            $("#assunto_email").focus(function(){
                $("#formInfo_email").html('')
            });	
            $("#nome_email").focus(function(){
                $("#formInfo_email").html('')
            });
            $("#mensagem_email").focus(function(){
                $("#formInfo_email").html('')
            });
            return false;	
        } 
        /* construindo url */
        var urlData = "&email=" + email + "&assunto=" + assunto + "&nome=" + nome + "&telefone=" + telefone + "&celular=" + celular + "&endereco=" + endereco + "&cidade=" + cidade + "&cep=" + cep + "&estado=" + estado + "&pais=" + pais + "&pastor=" + pastor + "&mensagem=" + mensagem;
        
        $.ajax({
             type: "POST",
             url: "email_form_send.php", 
             async: true,
             data: urlData, 
             beforeSend: function () {
                  $('#infoEmail').css("display", "block");
                  $('#IDEnviandoFormEmail').css("display", "block");
                  $('#IDsucessoFormEmail').css("display", "none");
                  $('#IDerroFormEmail').css("display", "none");
             },
             success: function (data) {
                 $( '#envia_email' ).css("display", "none");
                 $('#IDEnviandoFormEmail').css("display", "none");
                 $('#IDerroFormEmail').css("display", "none");
                 $('#IDsucessoFormEmail').css("display", "block");
                 $('#apareceEmail').css("display", "none");
             },
             error: function () {
                  $('#IDEnviandoFormEmail').css("display", "none");
                  $('#IDerroFormEmail').css("display", "block");
                  $('#IDsucessoFormEmail').css("display", "none");
             },
             complete: function () {
                 $('#form_email').each(function(){
                    this.reset();
                 });
             }
        });
        return false;
    });
});
</script>
<!-- /FORMS EMAIL -->
	
<!--<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">-->
<link rel="icon" href="https://www.apalavraoriginal.org.br/image/icon_favicon-16.png" sizes="16x16">
<link rel="icon" href="https://www.apalavraoriginal.org.br/image/icon_favicon-32.png" sizes="32x32">
<link rel="icon" href="https://www.apalavraoriginal.org.br/image/icon_favicon-48.png" sizes="48x48">
<link rel="icon" href="https://www.apalavraoriginal.org.br/image/icon_favicon-64.png" sizes="64x64">
<link rel="icon" href="https://www.apalavraoriginal.org.br/image/icon_favicon-128.png" sizes="128x128">
<!--<link rel="apple-touch-icon" href="https://www.apalavraoriginal.org.br/image/favicon.ico">-->

<style>
#clappr {
    width: 100%;
    height: 100%;
    position: relative;
    min-height: 320px;
    margin-bottom: 25px;
}
#clappr > div {
    width: 100%;
    height: 100%;
    position: absolute;
}
</style>
</head>
<body>
	
<!-- Piwik --> 
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://cluster-piwik.locaweb.com.br/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 23904]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script> 
<!-- /Piwik Code -->

<!-- POPUP HORARIOS- -->
<div id="pbiblia" class="modal-box" style="top: 43px; left: 85px; display: pointer;">
  <div class="modal-body"> <a class="js-modal-close close" style="cursor:pointer">×</a> ANDROID <br>
    IOS </div>
</div>
<!-- /POPUP HORARIOS --> 

<!-- -POPUP HORARIOS- -->
<div id="popup" class="modal-box" style="top: 43px; left: 85px; display: pointer;">
  <div class="modal-body"> <a class="js-modal-close close" style="cursor:pointer">×</a> Horário de Programas de Rádio:<br>
    Rádio Bandeirantes - 820 AM, diariamente as 6h;<br>
    Rádio Daqui - AM 1230, diariamente as 18h;<br>
    <br>
    Horário de Cultos:<br>
    Segunda, Terça, Quarta, Quinta e Sexta as 19h;<br>
    Sábado as 18h com Programa Fé Para Vencer com Hinos e Pregação;<br>
    aos domingos:<br>
    Escolinha das Crianças as 7h30;<br>
    Escola Dominical as 8h30;<br>
    Companheirismo com toda a igreja as 15h;<br>
    Domingo a Noite as 18h com Programa Fé Para Vencer com Hinos e Pregação;<br>
  </div>
</div>
<!-- /POPUP HORARIOS --> 

<!-- Modal --> 
<!-- Modal content
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">ENCONTRO COM A MOCIDADE 2019</h4>
            <h4 class="modal-title">de 02 a 05 Março de 2019</h4>
          </div>
          <div class="modal-body">
            <p style="color: black">SÁBADO dia 02</p>
            <p style="color: black">• 17:00 - Grupo ÊXODO: Apresentação do trabalho na integra.</p>
            <br>
            <p style="color: black">DOMINGO dia 03</p>
            <p style="color: black">• 07h30 - Escola Dominical: Perguntas e Respostas<br>e Pregação com Pr. Joaquim Gonçalves</p>
            <p style="color: black">• 15h00 - Grupo LEVÍTICO: Apresentação do trabalho na integra</p>
            <p style="color: black">• 16h30 - Intervalo - Lanche para toda igreja.</p>
            <p style="color: black">• 17h00 - Santa Ceia</p>
            <br>
            <p style="color: black">SEGUNDA dia 04</p>
            <p style="color: black">• 15h00 - Grupo NÚMEROS: Apresentação do trabalho na integra.</p>
            <p style="color: black">• 18h00 - Intervalo</p>
            <p style="color: black">• 18h30 - MARATONA LIVROS: Êxodo / Levítico / Números / Deuteronômio<br>e Mensagem “O Terceiro Êxodo”</p>
            <br>
            <p style="color: black">TERÇA dia 05</p>
            <p style="color: black">• 09h00 - Grupo DEUTERONÔMIO: Apresentação do trabalho na integra</p>
            <p style="color: black">• 12h00 - Almoço com toda a Igreja</p>
            <p style="color: black">• 16h00 - Coral Mocidade e Encerramento</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>-->

<div class="section gray"> 
	
  <!-- LOGO -->
  <div class="larguraSite">
    <div class="logo">
      <div><img style="max-width: 100%; height: auto;" src="https://www.apalavraoriginal.org.br/image/logo.png"></div>
    </div>
  </div>
  <!-- /LOGO -->
  
<!-- MENU -->
  
  <div class="larguraSiteEstendido">
    <div class="larguraSite">
      <div class="w-nav navbar" style="margin-bottom: 0px;" data-collapse="medium" data-animation="default" data-duration="100" data-contain="1">
        <nav class="w-nav-menu nav-menu" role="navigation"> <a class="w-nav-link nav-link" href="index.php">Home</a> <a class="w-nav-link nav-link" href="historico.php">Histórico</a> <a class="w-nav-link nav-link" href="doutrina.php">Doutrina</a> <a class="w-nav-link nav-link" href="wbranham.php">William Branham</a> <a class="w-nav-link nav-link" href="end_igrejas.php">Igrejas no Brasil</a> <a class="w-nav-link nav-link" id="trocaEmail">Contato</a></nav>
        <div class="w-nav-button menu-button">
          <div class="w-icon-nav-menu menu-icon"></div>
        </div>
      </div>
    </div>
  </div>
<!-- /MENU -->	
<!-- DIV EMAIL --> 
  <div id="toggleEmail">
    <div class="larguraSite">
      <div id="envia_email" style="display: none; padding-bottom: 10px;">
        <form id="form_email" name="email" class="form"  method="post" action="">
          <input type="hidden" name="tipo" id="tipo_email" value="email">
          <div class="contentformEmail">
            <h2 class="titleform titleformTextLeft">EMAIL</h2>
            <h2 class="titleform titleformTextRight" id="trocaEmailX">X</h2>
            <div id="section1" >
              <div class="field">
                <input type="email" id="digite_email" name="digiteEmail" maxlength="100" size="200" placeholder="Email">
              </div>
              <div class="field">
                <input type="text" id="assunto_email" name="assuntoEmail" maxlength="100" size="200" placeholder="Assunto">
              </div>
              <div class="field">
                <input type="text" id="nome_email" name="nomeEmail" maxlength="100" size="200" placeholder="Nome">
              </div>
              <div class="field">
                <input type="number" id="telefone_email" name="telefoneEmail" maxlength="100" size="200" placeholder="Telefone Fixo">
              </div>
              <div class="field">
                <input type="number" id="celular_email" name="celularEmail" maxlength="100" size="200" placeholder="Celular">
              </div>
              <div class="field">
                <input type="text" id="endereco_email" name="enderecoEmail" maxlength="100" size="200" placeholder="Endereço">
              </div>
              <div class="field">
                <input type="text" id="cidade_email" name="cidadeEmail" maxlength="100" size="200" placeholder="Cidade" >
              </div>
              <div class="field">
                <input type="number" id="cep_email" name="cepEmail" maxlength="100" size="200" placeholder="CEP" >
              </div>
              <div class="field">
                <input type="text" id="estado_email" name="estadoEmail" maxlength="100" size="200" placeholder="Estado" >
              </div>
              <div class="field">
                <input type="text" id="pais_email" name="paisEmail" maxlength="100" size="200" placeholder="País">
              </div>
              <div class="field">
                <input type="text" id="pastor_email" name="pastorEmail" maxlength="100" size="500" placeholder="Pastor">
              </div>
              <div class="textarea">
                <textarea type="text" id="mensagem_email" name="mensagemEmail" maxlength="1000" size="100" placeholder="Mensagem"></textarea>
              </div>
              <div class="field">
                <input type="submit" id="IDenviaEmail" name="enviar" value="Enviar">
                <input type="reset" id="resetar_email" name="resetar" value="Limpar">
              </div>
              <div class="erroForm">
                <div id="formInfo_email"></div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="larguraLinha AudienciaMarginBottom" id="infoEmail" style="display:none;">
        <div class="enviandoForm" id="IDEnviandoFormEmail" style="display:none; text-align:center;">Enviando...</div>
        <div class="sucessoForm" id="IDsucessoFormEmail" style="display:none; text-align:center;">Notificação Enviada com Sucesso. <a class="AudienciaClose-button" id="IDsucessoCloseFormEmail"> X </a></div>
        <div class="erroForm" id="IDerroFormEmail" style="display:none; text-align:center;">Há um congestionamento na rede, tente novamente. <a class="AudienciaClose-button" id="IDsucessoCloseFormEmail"> X </a></div>
      </div>  
    </div> 
  </div>
  <!-- /DIV EMAIL --> 	
	  <!-- BANNER -> NO AR -->
  <div class="banner">
    <div class="larguraSite"><!--https://www.youtube.com/embed/-->
      <div class="videoAoVivo">
                <!-- ------------  YOUTUBE -------------- -->
        <iframe allow=autoplay width="100%" height="100%"  src="https://www.youtube.com/embed/live_stream?channel=UCSK12kHqjgc2abNw5V1BCLQ&rel=0;rel=0&autoplay=1" frameborder="0" scrolling="no" allowfullscreen> </iframe>
              </div>
      <!--<div class="imagemBanner"> <img src="https://www.apalavraoriginal.org.br/image/prjgs.png" width="100%" height="auto"> </div>-->
      <!--<div class="banner_enc_pequeno"><a href="http://tabernaculodafe.org.br/20210711.html"><img src="https://www.apalavraoriginal.org.br/image/pronunciamento_advogados_menor.png" width="100%" height="auto"></a></div>-->
	  <div class="banner_enc_pequeno"><a href="https://youtu.be/8blznVGi5yI"><img src="image/banner_jgs_comunicado_menor5.png" width="100%" height="auto"></a></div>
    </div>
  </div>
  <!-- /BANNER -> NO AR -->
    <div class="AovivoProgDiaria">
    <div class="larguraSite">
      <div style="background-position: center;">
        <div class="imagemBanner"><img src="https://www.apalavraoriginal.org.br/image/banner_contas_igreja.png" width="100%" height="auto"></div>
      </div>
      <!--<a href="busca.php">
      <div style="background-image: url(../image/banner_busca_mini_background.jpg); background-position: center;">
        <div class="imagemBanner"><img src="image/banner_busca_mini_foreground.png" width="100%" height="auto"></div>
      </div>-->
      </a>
            <!-- AOVIVO E PROGRAMAÇÃO DIÁRIA -->
      
      <div class="larguraSite"> 
        <!-- GIF DO AOVIVO -->
        <div class="estamosAoVivo">
          <div class="displayInlineBlock"><img style="margin-top:-5px" src="https://www.apalavraoriginal.org.br/image/live.gif" width="15" height="15"></div>
          <div class="displayInlineBlock estiloTexto1">&nbsp;&nbsp;ESTAMOS AO VIVO</div>
        </div>
        <!-- /GIF DO AOVIVO --> 
        
      </div>
      <div class="larguraLinha">
                <!-- STREAM DO YOUTUBE -->
        <div class="stream">
          <div class="estiloTexto3">VÍDEO PRINCIPAL</div>
          <a class="estiloBotao1" href="https://www.apalavraoriginal.org.br/youtube.php">PLAY</a>
          <div class="estiloTexto5">Alta Definição</div>
          <p class="estiloTexto4">1080p, 720p, 480p, 360p, 240p, 144p</p>
          <img src="https://www.apalavraoriginal.org.br/svg_image/youtube.svg"> </div>
        <!-- /STREAM DO YOUTUBE --> 
        
        <!-- STREAM SOAUDIO -->
        <div class="stream">
          <div class="estiloTexto3">SÓ AUDIO</div>
          <a class="estiloBotao1" href="soaudio.php">PLAY</a> 
          <!-- <a class="estiloBotao1" href="/radio/play.php">PLAY</a> -->
          <div class="estiloTexto5">64kbps</div>
          <p class="estiloTexto4">Ideal para planos de<br>
            internet móvel</p>
          <img src="svg_image/soaudio.svg"> </div>
        <!-- /STREAM SOAUDIO -->
                <div class="adicionaisAovivo"> 
          <!-- CANAL DO YOUTUBE (AOVIVO) -->
          <div class="youtubeAoVivo">
            <div class="iconeYoutube"><img src="image/icon_youtube.png" width="37" height="31">CANAL OFICIAL NO YOUTUBE</div>
            <a href="https://www.youtube.com/playlist?list=PLWxfRWYKmrLNakIjqeCOs5r016SiGjM-k"><span class="icon-youtube-title">• Cultos Recentes</span></a><br class="linkspace">
            <a href="https://www.youtube.com/user/iecapalavraoriginal/playlists"><span class="icon-youtube-title">• Pregações Diversas</span></a> <br class="linkspace">
            <a class="estiloTexto2" href="https://www.youtube.com/playlist?list=PLWxfRWYKmrLNcqwAEnNC49MubUn4SDjiW"><span class="icon-youtube-title">• Esc. das Crianças<br>
            &nbsp; Prof. William</span></a> <br class="linkspace">
            <a class="estiloTexto2" href="https://www.youtube.com/playlist?list=PLWxfRWYKmrLNjv_mb8MyNe0Qraa6Bdnvg"><span class="icon-youtube-title">• Esc. da Crianças<br>
            &nbsp; Prof. Leandro</span></a> </div>
          <!-- /CANAL DO YOUTUBE (AOVIVO) --> 
          
          <!-- LINK APP -->
          <div class="baixarApp">
            <p class="estiloTexto12">Baixe App da Transmissão</p>
            <a class="estiloTexto2" href="https://play.google.com/store/apps/details?id=br.org.tabernaculodafe.transmissao">
            <div class="estiloBotao2"> <img style="widht:20px; margin-right: 10px; height:20px" src="svg_image/iconAndroid.svg">Android </div>
            </a> <a class="estiloTexto2" href="https://itunes.apple.com/WebObjects/MZStore.woa/wa/viewSoftware?id=1093295942&mt=8">
            <div class="estiloBotao2"> <img  style="widht:20px; margin-right: 10px; height:20px" src="svg_image/iconIOS.svg">Apple IOS </div>
            </a> </div>
          <!-- /LINK APP --> 
          
          <!-- LINK NOTIFICAR AUDIENCIA --> 
          <a id="trocaAudiencia" class="estiloTexto2">
          	<div class="audiencia"> <img src="image/icon_audience.png">Notificar Audiência </div>
          </a> 
          <!-- /LINKNOTIFICAR AUDIENCIA --> 
          
        </div>
      </div>
      <!-- /AOVIVO -->
          </div>
  </div>
  <div class="larguraSite"> 
    <!-- DIV AUDIENCIA -->
       <div id="toggleAudiencia" style="display:none;"> 
      <div class="larguraLinha AudienciaMarginBottom" id="iconAudiencia" style="display:block;">
        <div class="notificaAudiencia iconesAudienciaMargin1"> <a style="cursor: pointer;" onClick="toggleA_visibility('notifica_icone_irmao','notifica_icone_igreja','notifica_icone_pais','notifica_form_irmao','notifica_form_igreja','notifica_form_pais');">
          <div id="notifica_icone_irmao" style="display: block;">
            <div class="icon-audiencia"> <img src="image/icon_audiencia_irmaos.png"> </div>
            <div class="displayInlineBlock estiloTexto1">NOTIFICAR COMO IRMÃO</div>
          </div>
          </a>
          <div id="notifica_form_irmao" style="display: none;">
            <form name="form_audiencia_irmao" class="form" id="form_irmao" method="post" action="">
              <input type="hidden" name="tipo" id="tipo_irmao" value="irmao">
              <div class="contentform">
                <h2 class="titleform">NOTIFICAR COMO IRMÃO</h2>
                <div id="section1" >
                  <div class="field">
                    <input type="text" id="nome_irmao" name="nome" maxlength="100" size="200" placeholder="Nome">
                  </div>
                  <div class="field">
                    <input type="text" id="cidade_irmao" name="cidade" maxlength="100" size="200" placeholder="Cidade" >
                    <!--oninvalid="this.setCustomValidity('Digite o nome da Cidade completo!')"--> 
                  </div>
                  <div class="field">
                    <select id="estado_irmao" name="estado" >
                      <option value="">Escolher...</option>
                      <option value="AC">Acre</option>
                      <option value="AL">Alagoas</option>
                      <option value="AP">Amap&aacute;</option>
                      <option value="AM">Amazonas</option>
                      <option value="BA">Bahia</option>
                      <option value="CE">Cear&aacute;</option>
                      <option value="DF">Distrito Federal</option>
                      <option value="ES">Esp&iacute;rito Santo</option>
                      <option value="GO">Goi&aacute;s</option>
                      <option value="MA">Maranh&atilde;o</option>
                      <option value="MT">Mato Grosso</option>
                      <option value="MS">Mato Grosso do Sul</option>
                      <option value="MG">Minas Gerais</option>
                      <option value="PA">Par&aacute;</option>
                      <option value="PB">Para&iacute;ba</option>
                      <option value="PR">Paran&aacute;</option>
                      <option value="PE">Pernambuco</option>
                      <option value="PI">Piau&iacute;</option>
                      <option value="RJ">Rio de Janeiro</option>
                      <option value="RN">Rio Grande do Norte</option>
                      <option value="RS">Rio Grande do Sul</option>
                      <option value="RO">Rond&ocirc;nia</option>
                      <option value="RR">Roraima</option>
                      <option value="SP">S&atilde;o Paulo</option>
                      <option value="SC">Santa Catarina</option>
                      <option value="SE">Sergipe</option>
                      <option value="TO">Tocantins</option>
                    </select>
                  </div>
                  <div class="field">
                    <input type="text" id="quantidade_irmao" name="quantidade" maxlength="4" size="4" placeholder="Número de pessoas assistindo">
                  </div>
                  <div class="field">
                    <input type="submit" id="IDenviaIrmao" name="enviar" value="Comunicar">
                    <input type="reset" id="resetar_irmao" name="resetar" value="Limpar">
                  </div>
                  <div class="erroForm">
                    <div id="formInfo_irmao"></div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="notificaAudiencia iconesAudienciaMargin2"> <a style="cursor: pointer;" onClick="toggleB_visibility('notifica_icone_irmao','notifica_icone_igreja','notifica_icone_pais','notifica_form_irmao','notifica_form_igreja','notifica_form_pais');">
          <div id="notifica_icone_igreja" style="display: block;">
            <div class="icon-audiencia"> <img src="image/icon_audiencia_igrejas.png"> </div>
            <div class="displayInlineBlock estiloTexto1">NOTIFICAR COMO IGREJA</div>
          </div>
          </a>
          <div id="notifica_form_igreja" style="display: none;">
            <form name="form_audiencia_igreja" class="form" id="form_igreja" method="post" action="">
              <input type="hidden" name="tipo" id="tipo_igreja" value="igreja">
              <div class="contentform">
                <h2 class="titleform">NOTIFICAR COMO IGREJA</h2>
                <div id="section1" >
                  <div class="field">
                    <input type="text" id="pastor_igreja" name="pastor" maxlength="100" size="200" placeholder="Pastor">
                  </div>
                  <div class="field">
                    <input type="text" id="cidade_igreja" name="cidade" maxlength="100" size="200" placeholder="Cidade">
                  </div>
                  <div class="field">
                    <select id="estado_igreja" name="estado">
                      <option value="">Escolher...</option>
                      <option value="AC">Acre</option>
                      <option value="AL">Alagoas</option>
                      <option value="AP">Amap&aacute;</option>
                      <option value="AM">Amazonas</option>
                      <option value="BA">Bahia</option>
                      <option value="CE">Cear&aacute;</option>
                      <option value="DF">Distrito Federal</option>
                      <option value="ES">Esp&iacute;rito Santo</option>
                      <option value="GO">Goi&aacute;s</option>
                      <option value="MA">Maranh&atilde;o</option>
                      <option value="MT">Mato Grosso</option>
                      <option value="MS">Mato Grosso do Sul</option>
                      <option value="MG">Minas Gerais</option>
                      <option value="PA">Par&aacute;</option>
                      <option value="PB">Para&iacute;ba</option>
                      <option value="PR">Paran&aacute;</option>
                      <option value="PE">Pernambuco</option>
                      <option value="PI">Piau&iacute;</option>
                      <option value="RJ">Rio de Janeiro</option>
                      <option value="RN">Rio Grande do Norte</option>
                      <option value="RS">Rio Grande do Sul</option>
                      <option value="RO">Rond&ocirc;nia</option>
                      <option value="RR">Roraima</option>
                      <option value="SP">S&atilde;o Paulo</option>
                      <option value="SC">Santa Catarina</option>
                      <option value="SE">Sergipe</option>
                      <option value="TO">Tocantins</option>
                    </select>
                  </div>
                  <div class="field">
                    <input type="text" id="quantidade_igreja" name="quantidade" maxlength="4" size="4" placeholder="Número de pessoas assistindo">
                  </div>
                  <div class="field">
                    <input type="submit" id="IDenviaIgreja" name="enviar" value="Comunicar">
                    <input type="reset" id="resetar_igreja" name="resetar" value="Limpar">
                  </div>
                  <div class="erroForm">
                    <div id="formInfo_igreja"></div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="notificaAudiencia iconesAudienciaMargin3"> <a style="cursor: pointer;" onClick="toggleC_visibility('notifica_icone_irmao','notifica_icone_igreja','notifica_icone_pais','notifica_form_irmao','notifica_form_igreja','notifica_form_pais');">
          <div id="notifica_icone_pais" style="display: block;">
            <div class="icon-audiencia"> <img src="image/icon_audiencia_pais.png"> </div>
            <div class="displayInlineBlock estiloTexto1">NOTIFICAR COMO DE OUTRO PAÍS</div>
          </div>
          </a>
          <div id="notifica_form_pais" style="display: none;">
            <form name="form_audiencia_pais" class="form" id="form_pais" method="post">
              <input type="hidden" name="tipo" id="tipo_pais" value="outros">
              <div class="contentform">
                <h2 class="titleform">NOTIFICAR COMO DE OUTRO PAÍS</h2>
                <div id="section1" >
                  <div class="field">
                    <input type="text" id="nome_pais" name="nome" maxlength="100" size="200" placeholder="Nome">
                  </div>
                  <div class="field">
                    <input type="text" id="estado_pais" name="estado" maxlength="100" size="200" placeholder="Estado">
                  </div>
                  <div class="field">
                    <!--input type="text" id="pais_pais" name="pais" maxlength="100" size="200" placeholder="País"-->
                    <!-- Todos paises da ISO exceto Brasil -->
                    <select id="pais_pais" name="pais" placeholder="País">
                        <option value="" selected="selected">Escolher...</option>
                        <option value="Afeganistão">Afeganistão</option>
                        <option value="África do Sul">África do Sul</option>
                        <option value="Albânia">Albânia</option>
                        <option value="Alemanha">Alemanha</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antilhas Holandesas">Antilhas Holandesas</option>
                        <option value="Antárctida">Antárctida</option>
                        <option value="Antígua e Barbuda">Antígua e Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Argélia">Argélia</option>
                        <option value="Armênia">Armênia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Arábia Saudita">Arábia Saudita</option>
                        <option value="Austrália">Austrália</option>
                        <option value="Áustria">Áustria</option>
                        <option value="Azerbaijão">Azerbaijão</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrein">Bahrein</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belize">Belize</option>
                        <option value="Benim">Benim</option>
                        <option value="Bermudas">Bermudas</option>
                        <option value="Bielorrússia">Bielorrússia</option>
                        <option value="Bolívia">Bolívia</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgária">Bulgária</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Butão">Butão</option>
                        <option value="Bélgica">Bélgica</option>
                        <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Camarões">Camarões</option>
                        <option value="Camboja">Camboja</option>
                        <option value="Canadá">Canadá</option>
                        <option value="Catar">Catar</option>
                        <option value="Cazaquistão">Cazaquistão</option>
                        <option value="Chade">Chade</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Chipre">Chipre</option>
                        <option value="Colômbia">Colômbia</option>
                        <option value="Comores">Comores</option>
                        <option value="Coreia do Norte">Coreia do Norte</option>
                        <option value="Coreia do Sul">Coreia do Sul</option>
                        <option value="Costa do Marfim">Costa do Marfim</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croácia">Croácia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Dinamarca">Dinamarca</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Egito">Egito</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
                        <option value="Equador">Equador</option>
                        <option value="Eritreia">Eritreia</option>
                        <option value="Escócia">Escócia</option>
                        <option value="Eslováquia">Eslováquia</option>
                        <option value="Eslovênia">Eslovênia</option>
                        <option value="Espanha">Espanha</option>
                        <option value="Estados Federados da Micronésia">Estados Federados da Micronésia</option>
                        <option value="Estados Unidos">Estados Unidos</option>
                        <option value="Estônia">Estônia</option>
                        <option value="Etiópia">Etiópia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Filipinas">Filipinas</option>
                        <option value="Finlândia">Finlândia</option>
                        <option value="França">França</option>
                        <option value="Gabão">Gabão</option>
                        <option value="Gana">Gana</option>
                        <option value="Geórgia">Geórgia</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Granada">Granada</option>
                        <option value="Gronelândia">Gronelândia</option>
                        <option value="Grécia">Grécia</option>
                        <option value="Guadalupe">Guadalupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernesei">Guernesei</option>
                        <option value="Guiana">Guiana</option>
                        <option value="Guiana Francesa">Guiana Francesa</option>
                        <option value="Guiné">Guiné</option>
                        <option value="Guiné Equatorial">Guiné Equatorial</option>
                        <option value="Guiné-Bissau">Guiné-Bissau</option>
                        <option value="Gâmbia">Gâmbia</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungria">Hungria</option>
                        <option value="Ilha Bouvet">Ilha Bouvet</option>
                        <option value="Ilha de Man">Ilha de Man</option>
                        <option value="Ilha do Natal">Ilha do Natal</option>
                        <option value="Ilha Heard e Ilhas McDonald">Ilha Heard e Ilhas McDonald</option>
                        <option value="Ilha Norfolk">Ilha Norfolk</option>
                        <option value="Ilhas Cayman">Ilhas Cayman</option>
                        <option value="Ilhas Cocos (Keeling)">Ilhas Cocos (Keeling)</option>
                        <option value="Ilhas Cook">Ilhas Cook</option>
                        <option value="Ilhas Feroé">Ilhas Feroé</option>
                        <option value="Ilhas Geórgia do Sul e Sandwich do Sul">Ilhas Geórgia do Sul e Sandwich do Sul</option>
                        <option value="Ilhas Malvinas">Ilhas Malvinas</option>
                        <option value="Ilhas Marshall">Ilhas Marshall</option>
                        <option value="Ilhas Menores Distantes dos Estados Unidos">Ilhas Menores Distantes dos Estados Unidos</option>
                        <option value="Ilhas Salomão">Ilhas Salomão</option>
                        <option value="Ilhas Virgens Americanas">Ilhas Virgens Americanas</option>
                        <option value="Ilhas Virgens Britânicas">Ilhas Virgens Britânicas</option>
                        <option value="Ilhas Åland">Ilhas Åland</option>
                        <option value="Indonésia">Indonésia</option>
                        <option value="Inglaterra">Inglaterra</option>
                        <option value="Índia">Índia</option>
                        <option value="Iraque">Iraque</option>
                        <option value="Irlanda do Norte">Irlanda do Norte</option>
                        <option value="Irlanda">Irlanda</option>
                        <option value="Irã">Irã</option>
                        <option value="Islândia">Islândia</option>
                        <option value="Israel">Israel</option>
                        <option value="Itália">Itália</option>
                        <option value="Iêmen">Iêmen</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japão">Japão</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordânia">Jordânia</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Laos">Laos</option>
                        <option value="Lesoto">Lesoto</option>
                        <option value="Letônia">Letônia</option>
                        <option value="Libéria">Libéria</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lituânia">Lituânia</option>
                        <option value="Luxemburgo">Luxemburgo</option>
                        <option value="Líbano">Líbano</option>
                        <option value="Líbia">Líbia</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedônia">Macedônia</option>
                        <option value="Madagáscar">Madagáscar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldivas">Maldivas</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Malásia">Malásia</option>
                        <option value="Marianas Setentrionais">Marianas Setentrionais</option>
                        <option value="Marrocos">Marrocos</option>
                        <option value="Martinica">Martinica</option>
                        <option value="Mauritânia">Mauritânia</option>
                        <option value="Maurícia">Maurícia</option>

                        <option value="Mayotte">Mayotte</option>
                        <option value="Moldávia">Moldávia</option>
                        <option value="Mongólia">Mongólia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Moçambique">Moçambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="México">México</option>
                        <option value="Mônaco">Mônaco</option>
                        <option value="Namíbia">Namíbia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Nicarágua">Nicarágua</option>
                        <option value="Nigéria">Nigéria</option>
                        <option value="Niue">Niue</option>
                        <option value="Noruega">Noruega</option>
                        <option value="Nova Caledônia">Nova Caledônia</option>
                        <option value="Nova Zelândia">Nova Zelândia</option>
                        <option value="Níger">Níger</option>
                        <option value="Omã">Omã</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestina">Palestina</option>
                        <option value="Panamá">Panamá</option>
                        <option value="Papua-Nova Guiné">Papua-Nova Guiné</option>
                        <option value="Paquistão">Paquistão</option>
                        <option value="Paraguai">Paraguai</option>
                        <option value="País de Gales">País de Gales</option>
                        <option value="Países Baixos">Países Baixos</option>
                        <option value="Peru">Peru</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Polinésia Francesa">Polinésia Francesa</option>
                        <option value="Polônia">Polônia</option>
                        <option value="Porto Rico">Porto Rico</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Quirguistão">Quirguistão</option>
                        <option value="Quênia">Quênia</option>
                        <option value="Reino Unido">Reino Unido</option>
                        <option value="República Centro-Africana">República Centro-Africana</option>
                        <option value="República Checa">República Checa</option>
                        <option value="República Democrática do Congo">República Democrática do Congo</option>
                        <option value="República do Congo">República do Congo</option>
                        <option value="República Dominicana">República Dominicana</option>
                        <option value="Reunião">Reunião</option>
                        <option value="Romênia">Romênia</option>
                        <option value="Ruanda">Ruanda</option>
                        <option value="Rússia">Rússia</option>
                        <option value="Saara Ocidental">Saara Ocidental</option>
                        <option value="Saint Martin">Saint Martin</option>
                        <option value="Saint-Barthélemy">Saint-Barthélemy</option>
                        <option value="Saint-Pierre e Miquelon">Saint-Pierre e Miquelon</option>
                        <option value="Samoa Americana">Samoa Americana</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Santa Helena, Ascensão e Tristão da Cunha">Santa Helena, Ascensão e Tristão da Cunha</option>
                        <option value="Santa Lúcia">Santa Lúcia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serra Leoa">Serra Leoa</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Singapura">Singapura</option>
                        <option value="Somália">Somália</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Suazilândia">Suazilândia</option>
                        <option value="Sudão">Sudão</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Suécia">Suécia</option>
                        <option value="Suíça">Suíça</option>
                        <option value="Svalbard e Jan Mayen">Svalbard e Jan Mayen</option>
                        <option value="São Cristóvão e Nevis">São Cristóvão e Nevis</option>
                        <option value="São Marino">São Marino</option>
                        <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
                        <option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
                        <option value="Sérvia">Sérvia</option>
                        <option value="Síria">Síria</option>
                        <option value="Tadjiquistão">Tadjiquistão</option>
                        <option value="Tailândia">Tailândia</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tanzânia">Tanzânia</option>
                        <option value="Terras Austrais e Antárticas Francesas">Terras Austrais e Antárticas Francesas</option>
                        <option value="Território Britânico do Oceano Índico">Território Britânico do Oceano Índico</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Toquelau">Toquelau</option>
                        <option value="Trinidad e Tobago">Trinidad e Tobago</option>
                        <option value="Tunísia">Tunísia</option>
                        <option value="Turcas e Caicos">Turcas e Caicos</option>
                        <option value="Turquemenistão">Turquemenistão</option>
                        <option value="Turquia">Turquia</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Ucrânia">Ucrânia</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Uruguai">Uruguai</option>
                        <option value="Uzbequistão">Uzbequistão</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vaticano">Vaticano</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietname">Vietname</option>
                        <option value="Wallis e Futuna">Wallis e Futuna</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                        <option value="Zâmbia">Zâmbia</option>
                    </select>
                  </div>
                  <div class="field">
                    <input type="text" id="quantidade_pais" name="pessoas" maxlength="4" size="4" placeholder="Número de pessoas assistindo">
                  </div>
                  <div class="field">
                    <input type="submit" id="IDenviaPais" name="enviar" value="Comunicar">
                    <input type="reset" id="resetar_pais" name="resetar" value="Limpar">
                  </div>
                  <div class="erroForm">
                    <div id="formInfo_pais"></div>
                  </div>
                </div>
              </div>
            </form>
          </div>	
        </div>
      </div>
      <div class="larguraLinha AudienciaMarginBottom" id="infoAudiencia" style="display:none;">
        <div class="enviandoForm" id="IDEnviandoForm" style="display:none; text-align:center;">Enviando...</div>
        <div class="sucessoForm" id="IDsucessoForm" style="display:none; text-align:center;">Notificação Enviada com Sucesso. <a class="AudienciaClose-button" id="IDsucessoCloseForm"> X </a></div>
        <div class="erroForm" id="IDerroForm" style="display:none; text-align:center;"><strong>Oops!</strong> Há um congestionamento na rede, tente novamente. <a class="AudienciaClose-button" id="IDsucessoCloseForm"> X </a></div>
      </div>
    </div>    <!-- /DIV AUDIENCIA --> 
  </div>
  <!-- /AOVIVO E PROGRAMAÇÃO DIÁRIA --> 
  
  <!-- TOPICOS PRINCIPAIS -->
  <div class="larguraSite">
    <div class="larguraLinha"> <a href="wbranham.php">
      <div class="topicoPrincipal">
        <div class="imagemTopicoPrincipal"><img style="max-width:100%; height:auto;" src="image/wmb_home.jpg" width="373" height="256"></div>
        <div class="estiloTexto8">WILLIAM MARRION BRANHAM</div>
        <p class="estiloTexto9">Conheça mais sobre o ministério sobrenatural de William Branham. Veja aqui: Fotos, Videos e Mensagens em PDF.</p>
      </div>
      </a> <a href="vgr.php">
      <div class="topicoPrincipal topicoMarginLeft">
        <div class="imagemTopicoPrincipal"><img style="max-width:100%;height:auto;" src="image/vgr_home.jpg" width="373" height="256"></div>
        <div class="estiloTexto8">BRANHAM.ORG</div>
        <p class="estiloTexto9">Irmão José Branham juntamente com o Irmão Anderson Vieira e sua equipe desenvolvem um grande trabalho na distribuição das mensagens do profeta William Marrion Branham no Brasil. </p>
      </div>
      </a> <a href="historico.php">
      <div class="topicoPrincipal topicoMarginLeft">
        <div class="imagemTopicoPrincipal"><img style="max-width:100%;height:auto;" src="image/prjgs_ministerio_home.jpg" width="373" height="256"></div>
        <div class="estiloTexto8">HISTÓRICO DA IGREJA</div>
        <p class="estiloTexto9">Conheça a história da igreja de Goiânia, fundada em Maio de 1968, pelo o Pr. Joaquim Gonçalves Silva, e sua trajetória de mais de meio século.</p>
      </div>
      </a> </div>
    <div class="larguraLinha"> <a href="#" data-modal-id="popup">
      <div class="topicos">
        <div class="estiloTexto8">horário de cultos</div>
        <div class="estiloTexto8"><img src="svg_image/horarioCulto.svg"></div>
        <p class="estiloTexto9">Todos nossos cultos são transmitidos ao vivo pela internet, saiba mais sobre nossa programação de rádio e horários de cultos. </p>
      </div>
      </a> <a href="pregacoes_mp3.php">
      <div class="topicos topicoMarginLeft">
        <div class="estiloTexto8"><!--<div style="color:rgba(255,158,0,1.00); float:left" title="Novidades">*</div>-->pregações</div>
        <div class="estiloTexto8"><img src="svg_image/mp3.svg"></div>
        <p class="estiloTexto9">Baixe &nbsp;pregações de cultos , programas de 30 minutos que são rodados no rádio na voz do Pr. Joaquim Gonçalves Silva</p>
      </div>
      </a> <a href="busca.php">
      <div class="topicos topicoMarginLeft">
        <div class="estiloTexto8">busca</div>
        <div class="estiloTexto8"><img src="svg_image/busca.svg"></div>
        <p class="estiloTexto9">Versão para Windows 32 e 64 bits<br>
          Pesquise nas mensagens pregadas pelo profeta William M. Branham</p>
      </div>
      <!--</a> <a href="playermp3/">
      <div class="topicos">
        <div class="estiloTexto8">hinos</div>
        <div class="estiloTexto8"><img src="svg_image/hinos.svg"></div>
        <p class="estiloTexto9">Ouça ou faça downloads de diversos hinos cantados ao vivo nos cultos no tabernáculo da fé</p>
      </div>
      </a>-->
      <!--<a href="fotos.php">
      <div class="topicos topicoMarginLeft">
        <div class="estiloTexto8">fotos e vídeos</div>
        <div class="estiloTexto8"><img src="svg_image/fotos.svg"></div>
        <p class="estiloTexto9">Veja diversas fotos e vídeos de eventos realizados com pastores, idosos, jovens e crianças</p>
      </div>
      </a>--> 
    </div>
  </div>
  <!-- /TOPICOS PRINCIPAIS --> 
  
  <!-- RODAPÉ -->
  <div class="section footer">
    <div class="larguraSite">
      <div class="w-footrow">
        <div class="footer-text-logo"><img src="image/logo_pequeno.png" width="262" height="50"></div>
        <div class="footer-text-address footer-text">Av. Castelo Branco, 6.650 - Bairro Ipiranga<br>
          CEP. 74.453-383 - Goiânia - GO - Brasil<br>
          Fone: (62) 4013-9090 - Fax: 4013-9061 - igreja@tabernaculodafe.org.br</div>
      </div>
    </div>
  </div>
  <!-- /RODAPÉ --> 
  
</div>

<!-- FUNÇÃO POPUP HORARIO --> 
<script>
$(function(){

	var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");
	
	
	$(".js-modal-close, .modal-overlay").unbind('click'); // Prevents multiple bindings

	
	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
		$("body").append(appendthis);
		$(".modal-overlay").fadeTo(500, 0.7);
		//$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
	
	  
	$(".js-modal-close, .modal-overlay").click(function() {
		$(".modal-box, .modal-overlay").fadeOut(500, function() {
			$(".modal-overlay").remove();
		});
	 
	});
	 
	$(window).resize(function() {
		$(".modal-box").css({
			top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
			left: ($(window).width() - $(".modal-box").outerWidth()) / 2
		});
	});
	 
	$(window).resize();
});
</script> 
<!-- /FUNÇÃO POPUP HORARIO -->

</body>
</html>
