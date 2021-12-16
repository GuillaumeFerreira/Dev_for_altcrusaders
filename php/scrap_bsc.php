<?php
require 'simplehtmldom/simple_html_dom.php';

$mystring = file_get_html('https://bscscan.com/token/0x2456e44c617d6231bb06492fa7337ee2f552bf61')->plaintext;
$findme = "addresses";
$pos = strpos($mystring, $findme);





$url = 'https://bscscan.com/token/generic-tokentxns2?m=normal&contractAddress=0x2456e44C617d6231bB06492Fa7337eE2f552BF61&a=0x62ed46357d2ddbfd23e772f36b256826a7b5e005&sid=4b11fca3e5685668a94fb566a12d941e&p=1';
   $path = 'https://bscscan.com/token/generic-tokentxns2?m=normal&contractAddress=0x2456e44C617d6231bB06492Fa7337eE2f552BF61&a=0x62ed46357d2ddbfd23e772f36b256826a7b5e005&sid=4b11fca3e5685668a94fb566a12d941e&p=1'; // A remplir avec l'url de la page web a aspirer
   $fp = @fopen($path, "r");

   $chaine = '';

   if($fp) {
      while(!feof($fp)) {
      $chaine .= fgets($fp,1024);
      }

   echo $chaine;
   }
   else {
   echo "Impossible d'ouvrir la page $path";
   }

?>