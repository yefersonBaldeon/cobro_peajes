

<?php

$a=$_POST["cobrar"];
$c=0;
$i=0;

$cnt1=(int)$_POST["eje"];

include("precio.php");





if($a=="auto"){
    $c=(int)$auto;
    $opcion="autos";
    $i=3;
}


else if($a=="camioneta"){

    $c=(int)$camioneta;
    $opcion="camioneta";
    $i=4;
}


else if($a=="publico"){

    $c=(int)$publico;
    $opcion="publico";
    $i=5;
}
    

else if($a=="carga"){
    $c=(int)$carga*$cnt1;
    $opcion="carga";
    $i=6;
}


//echo $c;

//session_start();

$usuario=$_SESSION["usuario"];

$coneccion=mysqli_connect("localhost","root","","login");


$consulta="SELECT*FROM usuarios where usuaio='$usuario'";

$resultado=mysqli_query($coneccion,$consulta);

if(!$resultado){

    echo "hay un error al consultar";
}


else{

    $filas=mysqli_num_rows($resultado);
    $contenido = mysqli_fetch_array($resultado);

    $actual=$contenido[$i];  
    $actual+=$c;  

    }


$consulta2="UPDATE usuarios set $opcion='$actual' where usuaio='$usuario'";

$resultado2=mysqli_query($coneccion,$consulta2);



    if(!$resultado2){

            echo "hay un error al consultar 2-------------------";
            }
    else{

    ?>

    <script>
        alert("Se guardo en la base de datos")
    </script>

    <?php
        header("location: home.php");
        
    }

    ?>
