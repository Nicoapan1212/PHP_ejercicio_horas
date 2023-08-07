<?php

    $numero_de_entrada = 155;

    $horas = $numero_de_entrada / 3600;
    $minutos = ($numero_de_entrada % 3600) / 60;
    $segundos = $numero_de_entrada % 60;

	$horas = (int)$horas;
	$minutos = (int)$minutos;

    echo "Horas: $horas<br>";
    echo "Minutos: $minutos<br>";
    echo "Segundos: $segundos<br>";

?>
