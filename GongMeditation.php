<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

  <script type="text/javascript">
    function ActivarReloj(){

        //Obteniendo datos del tiempo
        var laHora = new Date();
        var horario = laHora.getHours();
        var minutero = laHora.getMinutes();
        var segundero = laHora.getSeconds();

        if(minutero<10)
            minutero = "0" + minutero;
        if(segundero<10)
            segundero = "0" + segundero;

        //escribiendo sobre el campo de texto la hora actual
        document.getElementById('sonLas').value = horario+":"+minutero+":"+segundero;
        //Desactivando el boton 'Activar Reloj'
        document.getElementById('botonActivar').disabled=true;
        //Actualizando la hora cada 1 segundo
        ahoraSonLas = setTimeout(ActivarReloj,1000);
    }

    function DetenerReloj(){
        // Deteniendo el setTimeout
        clearTimeout(ahoraSonLas);
        // Volviendo el boton 'Activar Reloj' a la normalidad
        document.getElementById('botonActivar').disabled=false;
    }


  	function SonidoGong(tiempo){
        // Deteniendo el setTimeout

  					var audio = new Audio("gong-inicio.mp3");
  			    audio.play();

  					const myTimeout = setTimeout(FinGong, tiempo);

  					function FinGong() {
  						var audio = new Audio("gong-final.mp3");
  						audio.play();
  					}

    }

  </script>

</head>

  <body>


    <!-- <input type="text" id="sonLas"/></br>
    <input type="button" onclick="ActivarReloj()" id="botonActivar" value="Activar Reloj"/>
    <input type="button" onclick="DetenerReloj()" value="Detener Reloj"/>
    -->

    <input type="button" onclick="SonidoGong(30000)" id="Sonido" value="Sonar Gong"/>



  </body>
</html>
