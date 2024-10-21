<?php
// Se crea una cadena XML con información sobre coches
$xml=<<<XML
<?xml version="1.0" standalone="yes"?>
<cars>
  <car id="1">Volvo</car>
  <car id="2">BMW</car>
  <car id="3">Saab</car>
</cars>
XML;

// Se crea un objeto SimpleXMLElement a partir de la cadena XML
$sxe = new SimpleXMLElement($xml);

// Obtener el nombre del elemento raíz (en este caso, 'cars')
echo $sxe->getName() . "<br>"; // Imprime el nombre del elemento raíz

// También se imprimen los nombres de los hijos del elemento raíz ('cars')
foreach ($sxe->children() as $child) {
  echo $child->getName() . "<br>"; // Imprime el nombre de cada hijo (cada 'car')
}
?>
