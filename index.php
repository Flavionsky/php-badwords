<?php
$string= "ciao brutta persona";
echo "<p>".$string. " ". strlen($string)."</p>"; 

$badword = $_GET["badword"];
$newString = str_replace($badword, "***", $string);
echo "<p>".$newString. " " .strlen($newString). "</p>"; 
?>
