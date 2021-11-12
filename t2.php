<meta http-equiv="refresh" content=""/>
<?php
  $con= new mysqli('localhost', 'root', '', 'login_db');
mysqli_query($con, "SET NAMES 'utf8' ");

if ($con->connect_error) {
    die("Something wrong.: " . $con->connect_error);
  }

$sql = "SELECT * FROM menu2 WHERE amount>=1 ";
$result = $con->query($sql);

error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/Css" href="css/web.css">
    <link rel="stylesheet" type="text/Css" href="css/in.css">
    <title>โต๊ะ 2</title>
</head>
<body>

<center><h1> โต๊ะ 2 </h1>

<tr>
<td height="300" bgcolor="#99FFCC" colspan="5">
<form id="form1" name="form1" method="post" action="">
<table width="795" height="49" border="1" cellpadding="5" cellspacing="0" bordercolor="#3366FF">
<tr>
<td width="186" bgcolor="#66CCFF" class="style7"><div align="center" class="style8">รายชื่ออาหาร</div></td>
<td width="109" bgcolor="#66CCFF" class="style7"><div align="center" class="style8">ราคา</div></td>
<td width="52" bgcolor="#66CCFF" class="style7"><div align="center" class="style8">จำนวน</div></td>
<td width="52" bgcolor="#66CCFF" class="style7"><div align="center" class="style8">ราคารวม</div></td>
<td width="52" bgcolor="#66CCFF" class="style7"><div align="center" class="style8">รวม</div></td></center>

</tr>

<tbody>
            <?php while($row = $result->fetch_assoc()): ?>
  <tr>
   <td class="name">
    <?php echo $row['name']; ?>
   </td>
   <td><?php echo $row['prices']; ?></td>
   <td><?php echo $row['amount']; ?></td>

  <?php
  $prices = $row['prices'];
  $amount = $row['amount'];
  $sum = $prices*$amount;
              $total = $total + $sum



  ?>

   
   <td><?php echo $sum; ?></td>
   <?php
   ?>

 <?php endwhile ?>
<td><?php echo $total; ?></td>
</table><br>
<form action="" method="POST">
<td><input type="submit" name="update" value="จ่ายเงินเสร็จแล้ว" /></td>

<td><input type="submit" name="update2" value="เคลียร์โต๊ะ" /></td>
   </form>
   
 <A HREF = "admin.php"> กลับหน้าหลัก </A> <br>
</table>
</body>
</html>





<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'login_db');

if(isset($_POST['update']))
{
  $ID = $_POST['ID'];

  $query = "INSERT INTO history (name,prices,amount)
  SELECT name,prices,amount
  FROM menu2
  WHERE amount>=1";
  
   $query_run = mysqli_query($connection,$query);
}


if(isset($_POST['update2']))
{
  $ID = $_POST['ID'];

  $query = "UPDATE menu2
  SET amount='0'";
  $query_run = mysqli_query($connection,$query);
  echo("<meta http-equiv='refresh' content='0.5'>");
}
?>

