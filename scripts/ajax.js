$(document).on('click', '#button', function(){
	var dados = $('#cadastroUsuario').serialize();
	$.ajax({
		type:'POST',
		url: 'json/index.php?acao=usuario',
		data: dados,
		success: function(retorno){
			alert(retorno);
		}
	});
	return false;
});
$(document).on('click', '#buttonLogin', function(){
	var dados = $('#loginUsuario').serialize();
	$.ajax({
		type:'POST',
		url: 'json/index.php?acao=login',
		data: dados,
		success: function(retorno){
			window.location = retorno;
		}
	});
	return false;
});
	$("#menu-toggle").click( function (e){
	e.preventDefault();
	$("#wrapper").toggleClass("menuDisplayed");
});