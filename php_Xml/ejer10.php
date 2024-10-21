<?php
// Definimos una cadena que contiene un documento XML con declaración de versión y espacios de nombres
$xml = <<<XML
<?xml version="1.0" standalone="yes"?>
<cars xmlns:c="http://w3schools.com/ns">
  <c:car id="1">Volvo</c:car>
  <c:car id="2">BMW</c:car>
  <c:car id="3" a:country="Sweden" xmlns:a="http://w3schools.com/country">Saab</c:car>
</cars>
XML;

// Creamos un objeto SimpleXMLElement a partir de la cadena XML
$sxe = new SimpleXMLElement($xml);

// Obtenemos todos los espacios de nombres del documento XML, incluyendo los de los elementos hijos
$ns = $sxe->getDocNamespaces(TRUE);

// Imprimimos los espacios de nombres encontrados en el documento
var_dump($ns);
?>
