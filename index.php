<?php
 
  // si en la URL está el parámetro días....
 if (isset($_GET['xdias']) ) { 
    // capturo el valor del parámetro días
  $Xdias = $_GET['xdias'];

  // acumulador de la SUMA
  $suma = 0;
  // repito Xdías  el siguiente bloque
  for ($i=1; $i<=$Xdias; $i++)  
  {
    // acumulo la suma
    $suma = $suma + $i;

    if ($suma<20)
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
      else
      {  
        print "Error!! has superado los 20 días de vacaciones";
        break;
      }
  }
}
else {
  print "Error!!, ejecuta index.php?tabla=5 ";
}

?>
