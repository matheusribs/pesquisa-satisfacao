<?php
header('Content-Type: application/json');

$conn = mysqli_connect("127.0.0.1:3306","root","","bdpesquisa");

$sqlQuery = "SELECT sum(p1) as p1, sum(p2) as p2, sum(p3) as p3, sum(p4) as p4, sum(p5) as p5 from clientes";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>