<?php

$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];



session_start();


$coneccion=mysqli_connect("localhost","root","","login");

$consulta="SELECT*FROM usuarios where usuaio='$usuario' and  contraseña='$contraseña'";

$resultado=mysqli_query($coneccion,$consulta);

if(!$resultado){

    echo "hay un error";
}


else{

$filas=mysqli_num_rows($resultado);

if($filas){

    $_SESSION["usuario"]=$usuario;
    header("location: home.php");
    

}




else{
    

session_destroy();    
include("index.php");
?>
<h1><br><br><br><br><br><br> Error al ingresar los datos</h1>
<?php
}




//     echo "funciona";

//     $arreglo=mysqli_fetch_array($resultado);

//    echo $arreglo(); 
//    echo $arreglo[1];

}
?>

