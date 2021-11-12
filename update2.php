<meta charset="utf-8" />
<?php
include('condb.php');
foreach($_POST['update']  as $item=>$value){
$sql = "UPDATE menu2 SET amount=$value WHERE ID=$item";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
Header("Location: member2.php");
}

exit;
mysqli_close($con);
?>