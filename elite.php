<?php
include('condb.php');
include('conmenu.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/Css" href="css/Web.css">
<link rel="stylesheet" type="text/Css" href="css/in.css">
	<title>รายการ</title>
</head>
<body>
	<div class="link">
                <H3><ul>
                        <li><a class="active" href="admin.php" target="myframe">หน้าแรก</a></li>
                        <li><a href="elite.php" target="myframe">แจ้งยอดหมด</a></li>
                        <li><a href="in.php" target="myframe">เพิ่มรายการอาหาร</a></li>
                        <li><a href="day.php" target="myframe">ยอดขายต่อวัน</a></li>
                        <li><a href="m.php" target="myframe">ยอดขายต่อเดือน</a></li>
                        <li><a href="y.php" target="myframe">ยอดขายต่อปี</a></li>
						<li style="float: right" target="myframe"><a href="logout.php">ออกจากระบบ</a></li>
                    
                        
                      </ul></H3>
        </div>
<tr>
<center><td height="300" bgcolor="#99FFCC" colspan="5">
<form id="form1" name="form1" method="post" action="">
<table width="795" height="49" border="1" cellpadding="5" cellspacing="0" bordercolor="#3366FF">
<tr>
<td width="52" bgcolor="#66CCFF" class="style7"><div align="center" class="style8">ลำดับ</div></td>
<td width="186" bgcolor="#66CCFF" class="style7"><div align="center" class="style8">รายชื่ออาหาร</div></td>
<td width="109" bgcolor="#66CCFF" class="style7"><div align="center" class="style8">สินค้า</div></td>
</tr></center>
<tr>
<?php while($row = $result->fetch_assoc()): ?>
  <tr>
   <td><?php echo $row['ID']; ?></td>
   <td class="name">
    <?php echo $row['name']; ?>
   </td>
   <td><?php echo $row['ant']; ?></td>
   
   
 <?php endwhile ?>
</table>
    <br>
    <br>
    <br>
 <center>
<form action="" method="POST">
   <input type="text" name="ID" placeholder="เลือกรายการจากลำดับ" /></Br>
   <input type="text" name="ant" placeholder="" /></Br>
   <td><input type="submit" name="update" value="ยืนยัน" /></td>
            </form>
</body>
</html>



<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'login_db');

if(isset($_POST['update']))
{
  $ID = $_POST['ID'];

  $query = "UPDATE menu SET ant='$_POST[ant]' where ID='$_POST[ID]'";
  mysqli_query($connection, "SET NAMES 'utf8' ");
  $query_run = mysqli_query($connection,$query);

  if($query_run)
  {
	$ID = $_POST['ID'];

	$query = "UPDATE menu2 SET ant='$_POST[ant]' where ID='$_POST[ID]'";
	mysqli_query($connection, "SET NAMES 'utf8' ");
	$query_run = mysqli_query($connection,$query);
  }
    if($query_run)
  {
	$ID = $_POST['ID'];

	$query = "UPDATE menu3 SET ant='$_POST[ant]' where ID='$_POST[ID]'";
	mysqli_query($connection, "SET NAMES 'utf8' ");
	$query_run = mysqli_query($connection,$query);
  }
  if($query_run)
  {
	$ID = $_POST['ID'];

	$query = "UPDATE menu4 SET ant='$_POST[ant]' where ID='$_POST[ID]'";
	mysqli_query($connection, "SET NAMES 'utf8' ");
	$query_run = mysqli_query($connection,$query);
  echo("<meta http-equiv='refresh' content='0.5'>");
}
}
?>