<?php
// Crear un nuevo objeto DOMDocument
$dom = new domDocument;

// Cargar un string XML en el objeto DOMDocument
$dom->loadXML("<books><book><title>Title1</title></book><book><title>Title2</title></book></books>");

// Convertir el objeto DOMDocument a un objeto SimpleXMLElement
$x = simplexml_import_dom($dom);

// Acceder al segundo elemento 'book' y obtener el 'title'
echo $x->book[1]->title;
?>


