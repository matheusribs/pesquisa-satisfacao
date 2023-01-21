<?php
header('Content-Type: application/json');

$conn = mysqli_connect("127.0.0.1:3306","root","","bdpesquisa");

$sqlQuery = "SELECT sum(p5 = 1) as p1, 
                    sum(p5 = 2) as p2, 
                    sum(p5 = 3) as p3, 
                    sum(p5 = 4) as p4, 
                    sum(p5 = 5) as p5,
                    sum(p5 = 6) as p6,
                    sum(p5 = 7) as p7,
                    sum(p5 = 8) as p8,
                    sum(p5 = 9) as p9,
                    sum(p5 = 10) as p10
                    from perguntas";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>