<?php
$xml=<<<XML
<?xml version="1.0" standalone="yes"?>
<cars xmlns:c="http://w3schools.com/ns" xmlns:a="http://w3schools.com/country">
  <c:car id="1">Volvo</c:car>
  <c:car id="2">BMW</c:car>
  <c:car id="3">Saab</c:car>
</cars>
XML;

// Crear un objeto SimpleXMLElement a partir de la cadena XML
$sxe = new SimpleXMLElement($xml);

// Obtener todos los espacios de nombres (namespaces) definidos en el XML
$ns = $sxe->getNamespaces(true);

// Imprimir el resultado de los namespaces
var_dump($ns);
?>




