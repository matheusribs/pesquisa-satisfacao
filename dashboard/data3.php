<?php
header('Content-Type: application/json');

$conn = mysqli_connect("127.0.0.1:3306","root","","bdpesquisa");

$sqlQuery = "SELECT sum(p11) as p11, sum(p12) as p12, sum(p13) as p13, sum(p14) as p14, sum(p15) as p15 from clientes";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>