<?php
// Definimos una cadena que contiene un documento XML con declaración de versión y espacio de nombres
$xml = <<<XML
<?xml version="1.0" standalone="yes"?>
<cars xmlns:c="http://w3schools.com/ns">
  <c:car id="1">Volvo</c:car>
  <c:car id="2">BMW</c:car>
  <c:car id="3">Saab</c:car>
</cars>
XML;

// Creamos un objeto SimpleXMLElement a partir de la cadena XML
$sxe = new SimpleXMLElement($xml);

// Obtenemos todos los espacios de nombres del documento XML
$ns = $sxe->getDocNamespaces(); //Diferenciar los nombres en contextos (cosas que se llaman igual pero pertenencen a entidades distintas)(solo los que estan en uso)

// Imprimimos los espacios de nombres encontrados en el documento
print_r($ns);
?>
