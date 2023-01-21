<?php
header('Content-Type: application/json');

$conn = mysqli_connect("127.0.0.1:3306","root","","bdpesquisa");

$sqlQuery = "SELECT sum(p6) as p6, sum(p7) as p7, sum(p8) as p8, sum(p9) as p9, sum(p10) as p10 from clientes";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>