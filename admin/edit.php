<?php print('{}');
	require("../db.php");
	$data = json_decode(file_get_contents('php://input'), true);

	if(count($data)==1){
		$sql = "DELETE FROM cources WHERE id='".$data['row_id']."'";
		mysqli_query($con,$sql);
	}
	else{
		$query = mysqli_query($con,"SELECT * FROM cources WHERE id='".$data['row_id']."' ");
		if(mysqli_num_rows($query)==0){
			$sqli = "INSERT INTO cources (code, name, type, pre_req)
					VALUES ('".$data['code']."','".$data['name']."','".$data['type']."','".$data['pre_req']."')";
			mysqli_query($con,$sqli);
		}
		else{
			$sqli = "UPDATE cources SET code='".$data['code']."',name='".$data['name']."',type='".$data['type']."',pre_req='".$data['pre_req']."' WHERE id='".$data['row_id']."' ";
			mysqli_query($con, $sqli);
		}
	}
	die;
	
?>