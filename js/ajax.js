// JavaScript Document
 
// Función para recoger los datos de PHP según el navegador, se usa siempre.
function enviar_datos(){
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
 
//Función para recoger los datos del formulario y enviarlos por post  
function enviarDatos(){
 
  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  placa=document.nuevo_equipo.placa.value;
  marca=document.nuevo_equipo.marca.value;
  color=document.nuevo_equipo.color.value;
  fechaa=document.nuevo_equipo.fechaa.value;
 propietario=document.nuevo_equipo.propietario.value;
  fechar=document.nuevo_equipo.fechar.value;
  poliza=document.nuevo_equipo.poliza.value;
    fechav=document.nuevo_equipo.fechav .value;
    ano =document.nuevo_equipo.ano .value;
      nfactura=document.nuevo_equipo.nfactura.value;
      procedencia=document.nuevo_equipo.procedencia.value;

        observacion=document.nuevo_equipo.observacion.value;









  //instanciamos el objetoAjax
  ajax=objetoAjax();
 
  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "controlador/registro.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("placa="+placa+"&marca="+marca+"&color="+color+"&fechaa="+fechaa+"&ano="+ano+"&nfactura="+nfactura+"&procedencia="+procedencia+"&observacion="+observacion)
}
 
//función para limpiar los campos
function LimpiarCampos(){
  document.nuevo_equipo.placa.value="";
  document.nuevo_equipo.marca.value="";
  document.nuevo_equipo.color.value="";
  document.nuevo_equipo.fechaa.value="";
  document.nuevo_equipo.propietario.value="";
  document.nuevo_equipo.fechar.value="";
  document.nuevo_equipo.ano.value="";
  document.nuevo_equipo.ano.value="";  
    document.nuevo_equipo.ano.value="";
  document.nuevo_equipo.nfactura.value="";
    document.nuevo_equipo.procedencia.value="";
    document.nuevo_equipo.ano.value="";


  document.nuevo_equipo.observacion.focus();
}