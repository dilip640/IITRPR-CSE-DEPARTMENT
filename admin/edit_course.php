<?php print('{}');
	require("../db.php");
	$data = json_decode(file_get_contents('php://input'), true);
	if($data['type']=='credit'){
		$credits='';
		for($i=0;$i<5;$i++)
			$credits=$credits.$data[$i].'#';
		$sqli = "UPDATE course_detail SET credits='".$credits."' WHERE id='".$data['id']."' ";
		mysqli_query($con, $sqli);
	}
	else if($data['type']=='syllabus'){
		$sqli = "UPDATE course_detail SET syllabus='".$data['syllabus']."' WHERE id='".$data['id']."' ";
		mysqli_query($con, $sqli);
	}
	else if($data['type']=='m_text'){
		$sqli = "UPDATE course_detail SET m_text='".$data['m_text']."' WHERE id='".$data['id']."' ";
		mysqli_query($con, $sqli);
	}
	else if($data['type']=='r_text'){
		$sqli = "UPDATE course_detail SET r_text='".$data['r_text']."' WHERE id='".$data['id']."' ";
		mysqli_query($con, $sqli);
	}
	else if($data['type']=='pre_req'){
		$sqli = "UPDATE course_detail SET pre_req='".$data['pre_req']."' WHERE id='".$data['id']."' ";
		mysqli_query($con, $sqli);
	}
	else if($data['type']=='ins_info'){
		$sqli = "DELETE from instructer_info WHERE course_id='".$data['id']."' and id='".$data['ins_info_id']."'";
		mysqli_query($con, $sqli);
	}
?>