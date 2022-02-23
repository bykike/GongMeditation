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


	function SonidoGong(){
      // Deteniendo el setTimeout

					var audio = new Audio("tortuoso_1.mp3");
			    audio.play();

					const myTimeout = setTimeout(FinGong, 15000);

					function FinGong() {
						var audio = new Audio("templojapones gong.mp3");
						audio.play();
					}



  }

</script>

</br>
<input type="text" id="sonLas"/></br>

<input type="button" onclick="SonidoGong()" id="Sonido" value="Sonar Gong"/>

<input type="button" onclick="ActivarReloj()" id="botonActivar" value="Activar Reloj"/>
<input type="button" onclick="DetenerReloj()" value="Detener Reloj"/>
