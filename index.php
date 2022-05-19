


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

<div class="container mt-5">



<div class="row" style="height: 400px">

    <div class="col-md-8 ">

    <div class="text-center ">



    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="fondo2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="fondo3.jpg" class="d-block w-100" alt="...">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    </div>


    </div>

    <div class="col-md-4 blanco py-4 py-auto" style="height: 700px;">

        <form action="validar.php" method="post">

        <h1 class="text-center mb-5 text-primary" >SISTEMA DE PEAJES</h1>

        <h2 class="text-center mb-5">Autentificación de usuario</h1>   


        <div class="mb-3">
         <label for="usuario" class="form-label" >Usuario</label>
        <input type="text" class="form-control" id="usuario" placeholder="Escriba su nombre" autofocus name="usuario" autocomplete="off">
        </div>

        <div class="mb-5">
        <label for="contraseña" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="contraseña" placeholder="Escriba su contraseña" name="contraseña" autocomplete="off">
        </div>


        <div class="d-grid gap-2">
            <input type="submit" value="Ingresar" class="btn btn-success">            
        </div>

        </form>


    </div>


</div>










<!-- container -->
</div>





</body>
</html>