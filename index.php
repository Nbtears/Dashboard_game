<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>
<?php
    include_once "conexion.php";
    $temp = new Connection();
    $conn = $temp->getConnection();
    $sql = "SELECT * FROM user";
    $result = $conn ->query($sql);
    $row = $result->fetch_assoc();
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card-header text-center">
                Lista de pacientes
            </div>
            <div class="p-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col-3">Apellidos</th>
                            <th scope="col-3">Nombre(s)</th>
                            <th scope="col-2">Diagnóstico</th>
                            <th scope="col-2">Clínica</th>
                            <th scope="col-1">Edad</th>
                            <th scope="col-1">More</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            foreach($result as $row){
                        ?>
                        <tr>
                            <td scope="row"><?php echo $row["lastname"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["injury"]; ?></td>
                            <td><?php echo  $row["clinic"]; ?></td>
                            <td><?php echo  $row["age"]; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>