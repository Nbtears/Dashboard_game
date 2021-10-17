<?php
    include 'models/header_user.php';
    include 'models/footer_dash.php';
    include 'conexion.php';

    $time = 0;
    $username = $_GET["user"];
    $temp = new Connection();
    $conn = $temp->getConnection();
    $data = $temp->user_data($username,$conn);
    $sesion = $temp->user_sesions($username,$conn);
    $info = $temp->user_game($sesion["id"],$conn);
    $all = $temp->all_sesion($username,$conn);
    $time = $temp->total_time($username,$conn);
?>

<div class="container-fluid mt-3 mb-3">
  <div class="row">
    <div class="col-md-6 col-lg-2">
      <div class="row">
        <div class="card bg-success text-center bg-opacity-25 mt-3 mb-3"">
          <img src="sources/1.jpg" class="card-img-top rounded-circle">
          <h5 class="card-title text-center mt-2">Información</h5>
          <div class="card-body">
            <p class="card-text text-center">Username: <?php echo $username?></p></p>
            <p class="card-text text-center">Nombre: <?php echo $data["name"]?></p></p>
            <p class="card-text text-center">Apellidos: <?php echo $data["lastname"]?></p></p>
            <p class="card-text text-center">Edad: <?php echo $data["age"]?></p></p>
            <p class="card-text text-center">Clínica: <?php echo $data["clinic"]?></p></p>
            <p class="card-text text-center">Diagnóstico: <?php echo $data["injury"]?></p></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card bg-success text-center bg-opacity-25 mt-2 mb-3"">
          <h5 class="card-title text-center mt-2">Total de sesiones</h5>
          <div class="card-body">
            <p class="card-text text-center"><?php echo $all->num_rows?></p></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card bg-success text-center bg-opacity-25 mt-2 mb-3"">
          <h5 class="card-title text-center mt-2">Tiempo total</h5>
          <div class="card-body">
            <p class="card-text text-center"><?php echo $time?> min</p></p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-10">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="card bg-light mt-3 mb-2">
            <h5 class="card-title text-center mt-3 mb-3">Última sesión</h5>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-2">
          <div class="card bg-success bg-opacity-25 mt-3 mb-2">
            <h5 class="card-title text-center mt-3">Duración</h5>
            <div class="card-body">
              <p class="card-text text-center"><?php echo $sesion["duration"]?> min</p></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-2">
          <div class="card bg-success bg-opacity-25 mt-3 mb-2">
            <h5 class="card-title text-center mt-3">Ángulo max</h5>
            <div class="card-body">
              <p class="card-text text-center"><?php echo $info["angle_max"]?>°</p></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-2">
          <div class="card bg-success bg-opacity-25 mt-3 mb-2">
            <h5 class="card-title text-center mt-3">Velocidad max</h5>
            <div class="card-body">
              <p class="card-text text-center"><?php echo $info["vel_max"]?></p></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-2">
          <div class="card bg-success bg-opacity-25 mt-3 mb-2">
            <h5 class="card-title text-center mt-3">Velocidad prom</h5>
            <div class="card-body">
              <p class="card-text text-center"><?php echo $info["vel_avg"]?></p></p>
            </div>
          </div>  
        </div>

        <div class="col-md-6 col-lg-2">
          <div class="card bg-success bg-opacity-25 mt-3 mb-2">
            <h5 class="card-title text-center mt-3">Aceleración max</h5>
            <div class="card-body">
              <p class="card-text text-center"><?php echo $info["acc_max"]?></p></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-2">
          <div class="card bg-success bg-opacity-25 mt-3 mb-2">
            <h5 class="card-title text-center mt-3">Aceleración prom</h5>
            <div class="card-body">
              <p class="card-text text-center"><?php echo $info["acc_avg"]?></p></p>
            </div>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="card bg-light mt-3 mb-2">
            <h5 class="card-title text-center mt-3 mb-3">Gráficas de avance</h5>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="card mt-3 mb-2">
            <div class="card-body">
              <canvas id="angle" width="50" height= "35"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="card mt-3 mb-2">
            <div class="card-body">
              <canvas id="rep" width="50" height= "35"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="card mt-3 mb-2">
            <div class="card-body">
              <canvas id="Vel_Acc" width="50" height= "35"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="card mt-3 mb-2">
            <div class="card-body">
              <canvas id="Avg" width="50" height= "35"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="main.js"></script>
<script>
 const obj = <?php $graf = $temp->all_games($username,$conn); ?>;
   setData(obj);
</script>
