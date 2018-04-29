<?php

// Jeśli nie przekazano szukanego łańcucha znaków, nie da się wyszukiwać.
if(empty($_GET['state'])) {
   echo "Nie przesłano województwa";
} else {
   // Usunięcie białych znaków z początku oraz końca przekazanego wyszukania.
   $search = trim($_GET['state']);
   switch($search) {
      case "PM" :
         $result = "<option value='Gdańsk'>Gdańsk</option>" .
                   "<option value='Gdynia'>Gdynia</option>";
         break;
      case "DS" :
         $result = "<option value='Wrocław'>Wrocław</option>" .
                   "<option value='Wałbrzych'>Wałbrzych</option>" .
                   "<option value='Legnica'>Legnica</option>";
         break;
      case "SL" :
         $result = "<option value='Katowice'>Katowice</option>" .
                   "<option value='Gliwice'>Gliwice</option>" .
                   "<option value='Zabrze'>Zabrze</option>" .
                   "<option value='Bytom'>Bytom</option>";
         break;
      case "WP" :
         $result = "<option value='Poznań'>Poznań</option>";
         break;
      default :
         $result = "Nie odnaleziono miast";
         break;
      }
   echo $result;
}
?>