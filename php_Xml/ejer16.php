<?php
// Definir una cadena de texto que contiene un documento XML
$note = <<<XML
<note>
    <to>Tove</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body>Do not forget me this weekend!</body>
</note>
XML;

// Convertir la cadena XML en un objeto SimpleXMLElement
$xml = simplexml_load_string($note);

// Imprimir la estructura del objeto SimpleXMLElement
print_r($xml);
?>
