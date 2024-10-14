<?php
move_uploaded_file($_FILES["fichero"]["tmp_name"], "./imagenes/".$_FILES["fichero"]["name"]);
echo "Movido"
?>