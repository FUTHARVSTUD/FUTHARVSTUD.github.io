<?php
	include "connect.php";
	date_default_timezone_set('Asia/Kolkata');
?>
<?php
	function test_input($data) {
    $data = trim($data);

    $data = htmlspecialchars($data);
	    return $data;
}
?>
<?php
	if(isset($_POST['Name_']))
	{
		$name = test_input($_POST['Name_']);
		$mobile = test_input($_POST['Mobile']);
		$class = test_input($_POST['class']);
		$i=1;
		$sql="INSERT INTO `custmr_data`(`Name_`, `Mobile`, `class`) VALUES (?,?,?)";
		$stmt= $con->prepare($sql);
		$stmt->bindParam($i++,$name);
		$stmt->bindParam($i++,$mobile);
		$stmt->bindParam($i++,$class);
		if($stmt->execute())
		{
			header("Location:../index.php");
		}
		else {
			echo error_reporting(E_ALL);
			header("Location:../index.php?try_again");		
		}
	}
	else
	{
		header("Location:../index.php");
		exit();
	}
?>
