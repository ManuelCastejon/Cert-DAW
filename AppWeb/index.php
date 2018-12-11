<?php


class Site{
    public static function main(){

        // cargar INIT

        // list($_REQUEST, $_SERVER, $_GET, $_POST)

        // var_dump
        
        $url = $_GET['dispatch'];

        switch ($url) {
            case 'noticias':
                # code...
                echo "Seccion noticias";
                break;
            case 'usuarios':
                # code...
                echo "Seccion usuarios";
                break;
            case 'articulos':
                # code...
                echo "Seccion articulos";
                break;
            
            default:
                # code...
                break;
        }
      

       

       
    }
}


// ejecución
try {
    // inicio.....
    Site::main();

    define('AREA', 'C');

} catch (\Throwable $th) {
    //throw $th;
}

?>