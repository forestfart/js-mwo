<?php

// Jeśli nie przekazano szukanego łańcucha znaków, nie da się wyszukiwać.
if(empty($_GET['state'])) {
   echo "<city>Nie przesłano województwa</city>";
} else {
   // Usunięcie białych znaków z początku oraz końca przekazanego wyszukania.
   $search = trim($_GET['state']);
   switch($search) {
      case "PM" :
         $result = "[ { 'value' : 'gda', 'title' : 'Gdańsk' }, " . 
                   "{   'value' : 'gdy', 'title' : 'Gdynia' } ]";
         break;
      case "DS" :
         $result = "[ { 'value' : 'wro', 'title' : 'Wrocław'   }, " .
                   "  { 'value' : 'wał', 'title' : 'Wałbrzych' }, " .
                   "  { 'value' : 'leg', 'title' : 'Legnica'   } ]";
         break;
      case "SL" :
         $result = "[ { 'value' : 'kat', 'title' : 'Katowice' }, " .
                   "  { 'value' : 'gli', 'title' : 'Gliwice'  }, " .
                   "  { 'value' : 'zab', 'title' : 'Zabrze'   }, " .
                   "  { 'value' : 'byt', 'title' : 'Bytom'    } ]";
         break;
      case "WP" :
         $result = "[ { 'value' : 'poz', 'title' : 'Poznań' } ]";
         break;
      default :
         $result = "[ { 'value' : '', 'title' : 'Nie odnaleziono miast' } ]";
         break;
   }

   echo $result;
}
?>
