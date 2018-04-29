<?
   header("Content-type: text/xml");
   if ($_GET["menu"] == "1")
      $menuitems = array('Szynka', 'Indyk', 'Wołowina');
   if ($_GET["menu"] == "2")
      $menuitems = array('Pomidor', 'Ogórek', 'Ryż');
   echo '<?xml version="1.0" ?>';
   echo '<menu>';
   foreach ($menuitems as $value)
   {
      echo '<menuitem>';
      echo $value;
      echo '</menuitem>';
   }
   echo '</menu>';
?>
