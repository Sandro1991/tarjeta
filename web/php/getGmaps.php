<?php
require_once 'db.php'; //Conexion con la base de datos tarjetaroja

$query="SELECT * from complejo WHERE  ID_comp = 1";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
}

# JSON-encode the response
echo $json_response = json_encode($arr);
?>