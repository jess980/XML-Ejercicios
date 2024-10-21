<?php
// Cargar un archivo XML llamado "note.xml" y convertirlo en un objeto SimpleXMLElement
$xml = simplexml_load_file("note.xml");

// Imprimir la estructura del objeto SimpleXMLElement
print_r($xml);
?>
