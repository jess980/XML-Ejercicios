<?php
// Cargar el archivo XML "note.xml" como un objeto SimpleXMLElement.
// El primer parámetro es el nombre del archivo XML.
// El segundo parámetro (0) indica que no se están usando opciones adicionales.
// El tercer parámetro (TRUE) indica que "note.xml" es un archivo real y no una cadena de texto.
$xml = new SimpleXMLElement("note.xml", 0, TRUE);

// Imprimir el contenido del archivo XML como una cadena en formato XML.
// El método asXML() convierte el objeto de vuelta a una representación XML en texto.
echo $xml->asXML();
?>
