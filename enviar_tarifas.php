<?php

$auto=(int)$_POST["auto"];
$camioneta=(int)$_POST["camioneta"];
$publico=(int)$_POST["publico"];
$carga=(int)$_POST["carga"];

$coneccion=mysqli_connect("localhost","root","","login");

$consulta2="UPDATE precios set auto='$auto', camioneta='$camioneta',publico='$publico',carga='$carga'";

$resultado2=mysqli_query($coneccion,$consulta2);



    if(!$resultado2){

            echo "hay un error al consultar 2-------------------";
            }
    else{

    ?>


    <?php
        header("location: home.php");
        
    }

    ?>