<?php 

/*** XML Simple ***/
if (file_exists('xmls/simple.xml')) {

	//Similar a load_string 
    $xml = simplexml_load_file('xmls/simple.xml');
 
    #print_r($xml1);
    #echo $xml->nodo_hijo;
} else {
    exit('Error abriendo test.xml.');
}

/*** XML Con nodos Repetidos ***/
if (file_exists('xmls/nodosRepetidos.xml')) {

	//Similar a load_string 
    $xml = simplexml_load_file('xmls/nodosRepetidos.xml');

    foreach ($xml->nodo_hijo as $nodo) 
	{
		foreach ($nodo->valor as $valor) 
		{
			echo $valor. "<br>";
		}
		echo "<br>";
	}

	//Cantidad de "valores"... en cada nodo
	foreach ($xml->nodo_hijo as $nodo) 
		{
			echo count($nodo->valor). "<br>";
		}
	//Los Nodos se guardan en un arreglo, y asi se accede por pocicion
	echo $xml->nodo_hijo[1]->valor;
} else {
    exit('Error abriendo test.xml.');
}


?>

