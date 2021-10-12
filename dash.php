<?php
include_once "conexion.php";

$temp = new Connection();
$conn = $temp->getConnection();

$sql = "SELECT username FROM user";

$result = $conn ->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $row["username"];
    }
    
}
else {
    //Wrong password or usrname
    echo "1";
}