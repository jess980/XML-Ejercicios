<?php
// Crear el objeto SimpleXMLElement a partir de una cadena XML.
$xml = new SimpleXMLElement("<note>Hello <to>Tove</to><from>Jani</from>World!</note>");

// Mostrar el contenido del nodo <to>.
echo "To: " . $xml->to . "<br>";

// Mostrar el contenido del nodo <from>.
echo "From: " . $xml->from . "<br>";

// Mostrar todo el XML como cadena (incluyendo el texto que rodea a los nodos).
echo "<br>XML completo:<br>";
echo $xml->asXML();
?>
