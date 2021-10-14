<?php include 'models/header_dash.php'; ?>
<?php include 'models/footer_dash.php'; ?>
<?php
    include_once "conexion.php";
    $temp = new Connection();
    $conn = $temp->getConnection();
    $sql = "SELECT * FROM user";
    $result = $conn ->query($sql);
?>

<div class="container-fluid mt-5">
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
                            <th scope="col-2">Clínica</th>
                            <th scope="col-1">Edad</th>
                            <th scope="col" class = "text-center">Más</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            foreach($result as $row){
                                $username = $row["username"];
                        ?>
                        <tr>
                            <td scope="row"><?php echo $row["lastname"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo  $row["clinic"]; ?></td>
                            <td><?php echo  $row["age"]; ?></td>
                            <td class = "text-center"><p><a href="user.php?user=<?php echo $username?>">...</a></p></td>
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