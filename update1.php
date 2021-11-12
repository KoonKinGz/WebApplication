<meta charset="utf-8" />
<?php
include('condb.php');
foreach($_POST['update']  as $id=>$value){
$sql = "UPDATE menu SET amount=$value WHERE ID=$id";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
Header("Location: member1.php");
}

exit;
mysqli_close($con);
?>