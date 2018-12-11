<?php
 
  // si en la URL está el parámetro días....
 if (isset($_GET['xdias']) ) { 
    // capturo el valor del parámetro días
  $Xdias = $_GET['xdias'];
  // repito Xdías  el siguiente bloque
  for ($i=1; $i<=$Xdias; $i++)  
  {
    // si $i es PAR
    if ($i % 2 == 0) 
    {
      print "<b>Hoy es el día $i<br></b>";
    }
    else
    {
      print "Hoy es el día $i<br>";  
    }     
  }
}
else {
  print "Error!!, ejecuta index.php?tabla=5 ";
}

?>
