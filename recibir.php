<?php
	//~ Directorio donde se guardaran las imagenes
	//~ esta ruta sería en el servidor de la meteo, donde "predicciones" ahora mismo no existe.
	//~ En tu equipo es posible que sea otra.
	$destino = "/foo/bar/destiny/";

        $f = "recibir.log";
        $actual = file_get_contents($f);
        file_put_contents($f, $actual."\n".date("d/m/Y h:i:s")." ".$_FILES['file']['tmp_name']." ".$destino. $_POST['dev']."/".$_FILES['file']['name']);

	//~ Esto pone el archivo en la ruta de destino especificada arriba
	move_uploaded_file($_FILES['file']['tmp_name'], $destino."/".date("y-m-d_H:i:s")."_".$_FILES['file']['name']);
?>
