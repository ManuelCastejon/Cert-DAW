<?php
 
// declaro variables con los valores en ES/EN
$es = "El coche de mi padre está en casa";
$en = "My father's car is at home";

// obtengo el valor  es / en 
// http://localhost/Ejercicios/index.php?idioma=es
// http://localhost/Ejercicios/index.php?idioma=en
$idioma = $_GET['idioma']; // es / en 
//  es igual que $es o $en
echo $$idioma;  


?>
