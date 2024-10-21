<?php
// Definimos una cadena que contiene un documento XML
$xml = <<<XML
  <cars>
    <car name="Volvo">
      <child/>
      <child/>
      <child/>
      <child/>
    </car>
    <car name="BMW">
      <child/>
      <child/>
    </car>
  </cars>
XML;

// Creamos un objeto SimpleXMLElement a partir de la cadena XML
$elem = new SimpleXMLElement($xml);

// Iteramos sobre cada elemento 'car' dentro del XML
foreach ($elem as $car) {
    // Imprimimos el nombre del coche y el número de hijos que tiene
    printf("%s has %d children.<br>", $car['name'], $car->count());
}
?>
