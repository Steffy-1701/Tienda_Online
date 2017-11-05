<script language='JavaScript'>
	function objetoAjax(){
			var xmlhttp=false;
		try {
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (E) {
				xmlhttp = false;
			}
		}

		if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
			xmlhttp = new XMLHttpRequest();
		}
		return xmlhttp;
	}
	
	function leer_datos(){
		
		
		var iden = document.getElementById('iden').value
		ajax=objetoAjax();
		
		var id = document.getElementById('nombre').value
		ajax=objetoAjax();
		
		var id = document.getElementById('apellido').value
		ajax=objetoAjax();
		
		var id = document.getElementById('telefono').value
		ajax=objetoAjax();
		
		var id = document.getElementById('correo').value
		ajax=objetoAjax();
		

	
		
		var ruta = "ingresarClientesBD.php?iden="+iden+"&id="+id+"&id="+id+"&id="+id+"&id="+id;

		ajax.open("GET", ruta);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				document.getElementById('contenedornum1').innerHTML = ajax.responseText;
				setTimeout(function(){
				   window.location.reload(1);
				}, 5000);
			}else{
				if (ajax.readyState==1 || ajax.readyState==2 || ajax.readyState==3){
					//AQUI ENTRARA EN UN CICLO MIENTRAS LA Pagina2.php retorna algun valor.
				}	
			}
		}
		 ajax.send(null);
	}
					
</script>

<HTML>
<body align = "center" background= aa.jpg>
<h2 align ='center'><font size='5' face = "comic sans ms" color = '#red'><br>BIENVENIDOS<br> </h2></font> 
		 <BR>
		 
Cedula:
<input type='text' name='iden' id='iden' placeholder="Cedula">
<br>
Nombre:
<input type="text" name="nombre" id='nombre'>
<br>

apellido:
<input type="text" name="apellido" id='apellido'>
<br>

Telefono:
<input type="text" name="telefono" id='telefono'>
<br>



Correo:
<input type="text" name="corrreo" id='correo'>
<br>

<br>
<input type='button' name='carga' id='carga' value='ENVIAR' onClick='leer_datos()'>
<br>
<div name='contenedornum1' id='contenedornum1'>
</div>
</body>
<HTML>

<input type='button' value='Atras' onclick="history.back(-1)">
