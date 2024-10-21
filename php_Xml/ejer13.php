<?php
// Definición de un documento XML que describe un libro con capítulos
$xml=<<<XML
<book xmlns:chap="http://example.org/chapter-title">
  <title>My Book</title>
  <chapter id="1">
    <chap:title>Chapter 1</chap:title>
    <para>Donec velit. Nullam eget tellus...</para>
  </chapter>
  <chapter id="2">
    <chap:title>Chapter 2</chap:title>
    <para>Lorem ipsum dolor sit amet....</para>
  </chapter>
</book>
XML;

// Crear un objeto SimpleXMLElement a partir de la cadena XML
$sxe = new SimpleXMLElement($xml);

// Registrar el espacio de nombres 'chap' para poder usarlo en las consultas XPath
$sxe->registerXPathNamespace('c', 'http://example.org/chapter-title');

// Realizar una consulta XPath para obtener todos los elementos 'chap:title'
$result = $sxe->xpath('//c:title');

// Iterar sobre los resultados de la consulta y mostrar cada título de capítulo
foreach ($result as $title) {
  echo $title . "<br>"; // Imprime el contenido de cada elemento 'chap:title' seguido de un salto de línea
}
?>
