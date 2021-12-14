<?php
require 'simplehtmldom/simple_html_dom.php';

$mystring = file_get_html('https://altcrusaders.io/about/')->plaintext;
$findme = "Connect with 1398 like-minded individuals and freely discuss your favorite topics or tokens without fear of censorship or commercial use of your data";
$pos = strpos($mystring, $findme);

echo(substr($mystring, $pos+13, 4)) ;

?>