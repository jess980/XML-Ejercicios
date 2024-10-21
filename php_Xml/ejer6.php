<?php
// Definición de un bloque XML como una cadena
$note=<<<XML
<note>
    <to>Tove</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body date="2014-01-01" type="private">Do not forget me this weekend!</body>
</note>
XML;

// Cargar la cadena XML en un objeto SimpleXMLElement
$xml = simplexml_load_string($note);

// Iterar sobre los atributos del elemento <body>
foreach($xml->body[0]->attributes() as $a => $b) {
    // Imprimir el nombre del atributo y su valor en una nueva línea
    echo $a, '="', $b, "<br>";
}
?>
