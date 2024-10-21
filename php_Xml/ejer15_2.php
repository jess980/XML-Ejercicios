<?php
// Cargar un archivo XML llamado "note.xml" y convertirlo en un objeto SimpleXMLElement
$xml = simplexml_load_file("note.xml");

// Imprimir el nombre del elemento raíz del XML
echo $xml->getName() . "<br>";

// Iterar a través de los elementos hijos del elemento raíz
foreach($xml->children() as $child) {
    // Imprimir el nombre de cada hijo y su contenido
    echo $child->getName() . ": " . $child . "<br>";
}
?>
