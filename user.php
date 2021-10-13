<?php
    include 'models/header_user.php';
    include 'models/footer_dash.php';
    include 'conexion.php';
    $username = $_GET["user"];
    $temp = new Connection();
    $conn = $temp->getConnection();
    $data = $temp->user_data($username,$conn);
?>

<div class="container mt-3 mb-3">
  <div class="row">
    <div class="col-3">
      <div class="card bg-success bg-opacity-25" style="width: 18rem;">
        <img src="sources/1.jpg" class="card-img-top rounded-circle">
        <h5 class="card-title text-center mt-2">Información</h5>
        <div class="card-body">
          <p class="card-text text-center">Username: <?php echo $username?></p></p>
          <p class="card-text text-center">Nombre: <?php echo $data["name"]?></p></p>
          <p class="card-text text-center">Apellidos: <?php echo $data["lastname"]?></p></p>
          <p class="card-text text-center">Edad: <?php echo $data["age"]?></p></p>
        </div>
      </div>
    </div>

    <div class="col">
      hi
    </div>
  </div>

  <div class="row  mt-3 mb-3">
    <div class="col-3">
      <div class="card" style="width: 18rem;">
        <h5 class="card-title mt-2 text-center">Última sesión</h5>
        <div class="card-body">
          <p class="card-text text-center">Repeticiones: </p></p>
          <p class="card-text text-center">Duración: </p></p>
          <p class="card-text text-center">Fecha: </p></p>
          <p class="card-text text-center">Ang máx:</p></p>
          <p class="card-text text-center">Vel máx:</p></p>
          <p class="card-text text-center">Vel prom:</p></p>
          <p class="card-text text-center">Acc máx:</p></p>
          <p class="card-text text-center">Acc prom:</p></p>
        </div>
      </div>
    </div>
  </div> 
</div>

