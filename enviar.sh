#!/bin/bash
#~ Parametro $1 - Ruta del fichero a enviar
#~ Parametro $2 - Ruta del fichero que recibirá


if [ -f "$1" ]; then
	nombre=$(echo "$1" | cut -d/ -f 8)

	d=$(date +"%Y-%m-%d_%H%M%S_$nombre")
	cp "$1" "/usr/local/allsky/tmp/$nombre"
	cp "/usr/local/allsky/tmp/$nombre" "/usr/local/allsky/tmp/$d"

	curl -F "file=@$1;filename=$nombre" "$2"
else
	echo "Ejemplo: enviar.sh foo.tgz http://1.1.1.1/recibir.php"

fi
