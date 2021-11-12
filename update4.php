<meta charset="utf-8" />
<?php
include('condb.php');
foreach($_POST['update']  as $item=>$value){
$sql = "UPDATE menu4 SET amount=$value WHERE ID=$item";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
Header("Location: member4.php");
}

exit;
mysqli_close($con);
?>