
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


<form action="enviar_cobro.php" method="post">

<h1 class="text-center mb-5 text-primary" >Cobro de peaje vehicular</h1>

<h2 class="text-center mb-5">Tipo de vehículo</h1>   

<?php  include("precio.php") ?>
<div class="form-check mb-3">
  <input class="form-check-input" type="radio" name="cobrar" id="auto" value="auto">
  <label class="form-check-label" for="auto">
    Automóvil
  </label>
</div>

<div class="form-check mb-3">
  <input class="form-check-input" type="radio" name="cobrar" id="camioneta" value="camioneta">
  <label class="form-check-label" for="camioneta">
    Camioneta
  </label>
</div>

<div class="form-check mb-3">
  <input class="form-check-input" type="radio" name="cobrar" id="publico" value="publico">
  <label class="form-check-label" for="publico">
    Transporte público
  </label>
</div>

<div class="form-check mb-1">
  <input class="form-check-input" type="radio" name="cobrar" id="carga" value="carga">
  <label class="form-check-label" for="carga">
    Transporte de Carga
  </label>
</div>

<div class="mb-3 mx-3" >
    <label for="contraseña" class="form-label" >Ejes: </label>
    <input type="number" class="form-control text-center" id="eje" value="1" name="eje" min="1" max="2" step="1" style="width: 90px;">
    </div>


<label id="etiqueta1" class="form-label mb-3 text-danger">Cobrar S/: </label>
<label id="etiqueta" class="form-label mb-3"></label>


<div class="d-grid gap-2">
    <input type="submit" value="Registrar" class="btn btn-success" id="boton">            

  
</div>

</form> 

<!-- <button id="boton">ingresar</button> -->

</div>




<script>

var boton=document.getElementById("boton")
var a= document.getElementById("auto");


function verificar(){

var cnt=<?php echo $carga; ?>*document.getElementById("eje").value;


if(document.getElementById("auto").checked){
    document.getElementById("etiqueta").innerHTML=<?php echo $auto; ?>;

}   

else if(document.getElementById("camioneta").checked){
    document.getElementById("etiqueta").innerHTML=<?php echo $camioneta; ?>;
    
}

else if(document.getElementById("publico").checked){
    document.getElementById("etiqueta").innerHTML=<?php echo $publico; ?>;  
}

else if(document.getElementById("carga").checked){
    document.getElementById("etiqueta").innerHTML=cnt;   
}


else{
    document.getElementById("etiqueta").innerHTML="Marcar una opcion";
}
}

verificar();
var intervalo=setInterval(verificar,500);

</script>


</body>
</html>


