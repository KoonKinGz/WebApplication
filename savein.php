<mate charset ="utf-8" />
<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<?php include('condb.php');

$name = $_POST['name'];
$prices = $_POST['prices'];




	$sql = " INSERT INTO menu
	(name, prices)
	VALUES
	('$name', '$prices')";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
    $sql = " INSERT INTO menu2 
	(name, prices)
	VALUES
	('$name', '$prices')";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
    $sql = " INSERT INTO menu3
	(name, prices)
	VALUES
	('$name', '$prices')";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
    $sql = " INSERT INTO menu4
	(name, prices)
	VALUES
	('$name', '$prices')";
	
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
	
	mysqli_close($con);
			
			
	if ($result){
		echo "<script type='text/javascript'>";
		echo"alert('Success');";
	    echo"window.location = 'in.php';";
		echo "</script>";
		echo("<meta http-equiv='refresh' content='0.5'>");
		}
		else {	
				echo "<script type='text/javascript'>";
				echo "alert('error!');";
				echo"window.location = 'insert.php'; ";
				echo"</script>";
	}


?>