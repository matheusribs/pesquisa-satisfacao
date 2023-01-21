<?php
header('Content-Type: application/json');

$conn = mysqli_connect("127.0.0.1:3306","root","","bdpesquisa");

$sqlQuery = "SELECT sum(p4 = 1) as p1, sum(p4 = 2) as p2, sum(p4 = 3) as p3, sum(p4 = 4) as p4, sum(p4 = 5) as p5 from perguntas";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>