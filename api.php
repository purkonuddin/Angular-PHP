<?php
	header("Access-Control-Allow-Origin:*");
	header("Content-Type: application/json; charset=UTF-8");

	$conn = new mysqli("localhost", "root", "*****", "post");

	$result = $conn->query("SELECT * FROM user");

	$outp = "";
	while($rs = $result->fetch_array(MYSQLI_ASSOC)){
		if($outp != "") { $outp .= ",";}
		$outp .= '{"Name":"' . $rs["name"] . '",';
		$outp .= '"City":"' . $rs["status"] . '",';
		$outp .= '"Country":"' . $rs["image"] . '"}';
	}

	$outp = '{"records":['.$outp.']}';
	echo $outp;
	?>
