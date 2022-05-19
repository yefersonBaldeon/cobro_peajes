<?php

session_start();

if(!isset($_SESSION["usuario"])){

    header("location: index.php");
}
session_abort();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">


</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    
<?php
include("navegacion.php")
?>

<div class="container blanco py-5 mt-5" style="width:400px;"> 

<h1 class="text-center mb-5 text-primary" >Tarifas de Peaje Vehicular</h1>


    <form action="enviar_tarifas.php" method="post">
   

    <div class="mb-3">
    <label for="usuario" class="form-label" >Automóvil</label>
    <input type="number" class="form-control" id="auto" value=<?php  include("precio.php");
    echo $auto; ?> autofocus name="auto">
    </div>

    <div class="mb-3">
    <label for="contraseña" class="form-label">Camioneta</label>
    <input type="number" class="form-control" id="camioneta" value=<?php echo $camioneta; ?> name="camioneta">
    </div>

    
    <div class="mb-3">
    <label for="contraseña" class="form-label">Transporte público</label>
    <input type="number" class="form-control" id="publico" value=<?php echo $publico; ?> name="publico">
    </div>

    
    <div class="mb-5">
    <label for="contraseña" class="form-label">Transporte de carga</label>
    <input type="number" class="form-control" id="carga" value=<?php  echo $carga; ?> name="carga">
    </div>

    <div class="d-grid gap-2">
        <input type="submit" value="Asignar tarifas" class="btn btn-success">            
    </div>

    </form>




</div>



</body>
</html>