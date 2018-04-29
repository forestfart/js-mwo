<?php

// Jeśli nie przekazano szukanego łańcucha znaków, nie da się wyszukiwać.
if(empty($_GET['state'])) {
   echo "<city>Nie przesłano województwa</city>";
} else {
   // Usunięcie białych znaków z początku oraz końca przekazanego wyszukania.
   $search = trim($_GET['state']);
   switch($search) {
      case "PM" :
         $result = "<city><value>gda</value><title>Gdańsk</title></city>" .
                   "<city><value>gdy</value><title>Gdynia</title></city>";
         break;
      case "DS" :
         $result = "<city><value>wro</value><title>Wrocław</title></city>" .
                   "<city><value>wał</value><title>Wałbrzych</title></city>" .
                   "<city><value>leg</value><title>Legnica</title></city>";
         break;
      case "SL" :
         $result = "<city><value>kat</value><title>Katowice</title></city>" .
                   "<city><value>gli</value><title>Gliwice</title></city>" .
                   "<city><value>zab</value><title>Zabrze</title></city>" .
                   "<city><value>byt</value><title>Bytom</title></city>";
         break;
      case "WP" :
         $result = "<city><value>poz</value><title>Poznań</title></city>";
         break;
      default :
         $result = "<city><value></value><title>Nie odnaleziono miast</title></city>";
         break;
      }
      $result ='<?xml version="1.0" encoding="UTF-8" ?>' .
               "<cities>" . $result . "</cities>";

   header("Content-Type: text/xml; charset=utf-8");

   echo $result;
}
?>
