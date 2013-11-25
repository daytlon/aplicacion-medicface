<?php
include("conexion.php");

	$contenedor = fopen("contAlertas.txt", "r");
	$contador = fgets($contenedor);
	fclose($contenedor);

	$consulta      = "SELECT id FROM alertas";
	$resultado     = $conexion->query($consulta);
	$num_registros = $resultado->num_rows;

	if ($num_registros != $contador) {
		$contenedor = fopen("contAlertas.txt", "w+");
		fputs($contenedor, "$num_registros");
		fclose($contenedor);

		echo true;
	}else {
		echo false;
	}
?>

<?php
/*

<!-- Actualizar contenido con ajax-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<script type="text/javascript">

    function getTimeAJAX() {

        //GUARDAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA AJAX

        var time = $.ajax({

            url: 'cron.php', //indicamos la ruta donde se genera la hora
                dataType: 'text',//indicamos que es de tipo texto plano
                async: false     //ponemos el parámetro asyn a falso
        }).responseText;

        if (time == "") {
        	 window.location.reload();
        };

    }

    //con esta funcion llamamos a la función getTimeAJAX cada segundo para actualizar el div que mostrará la hora
    setInterval(getTimeAJAX,1000);

</script>

 */
 ?>
