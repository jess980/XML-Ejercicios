<?php
// Definimos una cadena de texto que contiene un documento XML
$note = <<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;

// Cargamos la cadena XML en un objeto SimpleXMLElement
$xml = simplexml_load_string($note);

// Iteramos sobre los nodos hijos del objeto XML
foreach ($xml->children() as $child) {
    // Mostramos el contenido de cada nodo hijo
    echo "Child node: " . $child . "<br>";
}
?>
