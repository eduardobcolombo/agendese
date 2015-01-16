function verificaAcesso() {
	var ds_usuario = document.getElementsByName("ds_usuario")[0].value;
	var ds_senha   = document.getElementsByName("ds_senha")[0].value;
    if (ds_usuario.length < 1) {
    	alert("Preencha o campo USUARIO");
    	return false;
    }
    if (ds_senha.length < 1) {
    	alert("Preencha o campo SENHA");
    	return false;    	
    }
	var ds_parametro = "ds_usuario=" + encodeURI(ds_usuario) + "&ds_senha=" + encodeURI(ds_senha);
	get('validaLogin.php?' + ds_parametro, 'msgLogin');
	return true;
}


function get() {
	var argv = get.arguments;
	if (window.XMLHttpRequest) { /* MOZILLA .. SAFARI.. */
		http = new XMLHttpRequest();
	} else if(window.ActiveXObject){ /* IE */
		try{
			http = new ActiveXObject("Msxm12.XMLHTTP");
		} catch(e){
			try {
				http = new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e){
				window.alert("Erro, browser não detectou XMLHTTP. -> "+e);
			}
		}
	}
	http.onreadystatechange = function() {
        if (http.readyState==1){
			document.getElementById(argv[1]).innerHTML = "<img src='images/carregando.gif'>";
		}
		if(http.readyState == 4) {
			extraiScript(http.responseText);
			document.getElementById(argv[1]).innerHTML = http.responseText;
		}
	}
	http.open('GET', argv[0], true);
	http.send(null);
}


function extraiScript(texto){
	var ini = 0;
	ini = texto.indexOf('<script', ini);
	if (ini >=0){
		ini = texto.indexOf('>', ini) + 1;
		var fim = texto.indexOf('</script>', ini);
		codigo = texto.substring(ini,fim);
      	novo = document.createElement("script");
		novo.text = codigo;
		document.body.appendChild(novo);
	}
}