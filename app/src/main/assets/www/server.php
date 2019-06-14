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
		else if(isset($_POST['function']) && $_POST['function'] == "getBoundaryData")
		{
			if( isset($_POST['boundary']))
			{
				$boundary_id = $_POST['boundary'];
				$sql ="SELECT b.id as boundary_id,pl.name as plant_name,b.condition_b as plant_status FROM boundary b join plant p on (b.plant_id = p.id) WHERE b.id = ? ";
				$stmt = $db->prepare($sql);
				$stmt->bind_param("s",$boundary_id);
				$stmt->execute();

				$result = $stmt->get_result();

				if($result->num_rows > 0)
				{
					$data['status'] = "available";
					while($row = $result->fetch_assoc())
					{
						$data['info'] = $row;
					}
				}
				else
				{
					$data['status'] = "unavailable";
				}
			}
		}
		else if(isset($_POST['function']) && $_POST['function'] == "updateBoundaryData")
		{
			$sql = "insert into boundary_report";
			$stmt;
			$data['current'] = "here1";
			if(isset($_POST['boundary_id']) && isset($_POST['date']) && isset($_POST['detail']))
			{
				$boundary_id = $_POST['boundary_id'];
				$date = $_POST['date'];
				$detail = $_POST['detail'];

				$sql .= "(date,boundary_id,description) values (?,?,?)";
				$stmt = $db->prepare($sql);
				$stmt->bind_param("sss",$date,$boundary_id,$detail);
				$stmt->execute();
			}
			else if(isset($_POST['boundary_id']) && isset($_POST['date']))
			{
				$boundary_id = $_POST['boundary_id'];
				$date = $_POST['date'];
				
				$sql .= "(date,boundary_id) values (?,?)";
				$stmt = $db->prepare($sql);
				$stmt->bind_param("ss",$date,$boundary_id);
				$stmt->execute();
			}
			
			
			
			if(mysqli_affected_rows($db) > 0)
			{
				$boundary_id = $_POST['boundary_id'];
				$status = $_POST['status'];
				$sql2 = "UPDATE boundary SET condition_b = ? WHERE id = ?";

				$stmt2 = $db->prepare($sql2);

				$stmt2->bind_param("ss",$status,$boundary_id);

				$stmt2->execute();

				if(mysqli_affected_rows($db) > 0)
				{
					$data['status'] = "complete";
				}
				else
				{
					$data['status'] = "failed2";
				}
			}
			else
			{
				$data['status'] = "failed1";
			}
		}
		else if(isset($_POST['function']) && $_POST['function'] == "activity_list")
		{
			if(isset($_POST['worker_id']))
			{
				$worker_id = $_POST['worker_id'];
				if(isset($_POST['sdate']) && isset($_POST['edate']))
				{
					$sdate = $_POST['sdate'];
					$edate = $_POST['edate'];
					$sql = "SELECT a.activity_id,a.title,time(a.start_date) as stime,DATE_FORMAT(date(a.start_date), '%d/%m/%Y') as sdate,time(a.end_date) as etime,DATE_FORMAT(date(a.end_date) , '%d/%m/%Y') as edate,a.status FROM user_activity u JOIN activity a ON(u.activity_id = a.activity_id) WHERE u.organizer_id = ? AND (date(a.start_date) = ? OR date(a.end_date) = ?)";
					$stmt = $db->prepare($sql);
					$stmt->bind_param("sss",$worker_id,$sdate,$edate);
				}
				else 
				{
					$sql = "SELECT a.activity_id,a.title,time(a.start_date) as stime,DATE_FORMAT(date(a.start_date), '%d/%m/%Y') as sdate,time(a.end_date) as etime,DATE_FORMAT(date(a.end_date) , '%d/%m/%Y') as edate,a.status FROM user_activity u JOIN activity a ON(u.activity_id = a.activity_id) WHERE u.organizer_id = ? ";
					$stmt = $db->prepare($sql);
					$stmt->bind_param("s",$worker_id);

				}

				$stmt->execute();
				$result = $stmt->get_result();
				if($result->num_rows > 0)
				{
					$data['status'] = "available";
					$temp = array();
					while($row = $result-> fetch_assoc())
					{
						$temp[] = $row;
					}
					$data['info'] = $temp;
				}
				else
				{
					$data['status'] = "unavailable";
				}
			}
			
		}
		else if(isset($_POST['function']) && $_POST['function'] == "item_list")
		{
			$sql = "";
			$user_id = $_POST['user_id'];
			if(isset($_POST['filter']))
			{
				$sql = "SELECT si.user_id ,si.item_id,i.name,i.type,si.quantity FROM USER u JOIN storekeeper_item si ON(u.id = si.user_id) JOIN item i ON (si.item_id = i.id) WHERE si.user_id = ? ";
				$stmt = $db->prepare($sql);
				$stmt->bind_param("s",$user_id);
			}
			else
			{
				$sql = "SELECT si.user_id ,si.item_id,i.name,i.type,si.quantity FROM USER u JOIN storekeeper_item si ON(u.id = si.user_id) JOIN item i ON (si.item_id = i.id) WHERE si.user_id = ? ";
				$stmt = $db->prepare($sql);
				$stmt->bind_param("s",$user_id);
			}

			
			$stmt->execute();
			$result = $stmt->get_result();

			if($result->num_rows > 0)
			{
				$data['status'] = "available";
				$temp = array();
				while($row = $result->fetch_assoc())
				{
					$temp[] = $row;
				}
				$data['info'] = $temp;
			}
			else
			{
				$data['status']= "unavailable";
			}
			
		}
		else if(isset($_POST['function']) && $_POST['function'] == "for_schedule")
		{
			$sql = "SELECT user.id as id,activity.title as title,activity.start_date as start,activity.end_date as end,activity.status as status, activity.start_date as sdate, activity.end_date as edate, user.fname as organizer,activity.color as color FROM user JOIN user_activity ON (user.id = user_activity.organizer_id) JOIN  activity ON (user_activity.activity_id = activity.activity_id) WHERE status='Approved'";
			$stmt=$db->prepare($sql);
			$stmt->execute();
			$result = $stmt->get_result();

			if($result->num_rows>0)
			{
				//$data['status'] = "valid";
				$temp = array();
				
				while($row = $result->fetch_assoc())
				{
					$temp[] = $row;
				}
				$data = $temp;

			}
		}
		else
		{
			$data['Function_POST'] = array(
			"1"=>"login",
			"2"=>"getBoundaryData",
			"3"=>"updateBoundaryData",
			"4"=>"activity_list",
			"5"=>"item_list"
		);
		}
	}
	else
	{
		$data[] = array(
			"1"=>"login",
			"2"=>"getBoundaryData",
			"3"=>"updateBoundaryData",
			"4"=>"activity_list",
			"5"=>"item_list"
		);
	}
	echo json_encode($data);
	$db->close();

?>