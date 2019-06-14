<?php
	include_once("database.php");
	
	$data = array();
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		if(isset($_POST['function']) && isset($_POST['email']) && isset($_POST['pass']) && $_POST['function'] == "login")
		{
			$email = $_POST['email'];
			$pass = $_POST['pass'];

			$sql = "select id,fname,lname,age,email,phone,type_id,position,address from user where email = ? && password = password(?)";
			$stmt = $db->prepare($sql);
			$stmt->bind_param("ss",$email,$pass);
			$stmt->execute();
			$result = $stmt->get_result();
			if($result->num_rows > 0)
			{
				$data['status'] = 'valid';
				while($row = $result->fetch_assoc())
				{
					$data['info'] = $row; 
				}
			}
		}
	}
	echo json_encode($data);
	$db->close();

?>