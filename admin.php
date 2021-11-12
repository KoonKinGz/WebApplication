<?php session_start(); 
include('condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: ../logout.php");  
  }  
?>
<meta http-equiv="refresh" content="1"/>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/Css" href="css/Web.css">
	<title>รายการ</title>
</head>
<body>
	<form action="logout.php">
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
	


	<IMG SRC="img/a.jpg" width="300" height="300">
	
<DIV STYLE="position:absolute; top:250px; left:70px; width:200px; height:25px">
<CENTER><FONT SIZE="+2" COLOR="00ff00"><A HREF = 't1.php'>  โต๊ะ1  </A>
<?php
include('condb.php');
$num_result = mysqli_query($con, "SELECT COUNT(amount) as total_count FROM menu WHERE amount >=1 ") or exit(mysqli_error($con));
$row = mysqli_fetch_object($num_result);
echo "<font color=\"red\">$row->total_count</font>";
?> <br></FONT></CENTER>
</DIV>

<IMG SRC="img/a.jpg" width="300" height="300">
<DIV STYLE="position:absolute; top:250px; left:375px; width:200px; height:25px">
<CENTER><FONT SIZE="+2" COLOR="00ff00"><A HREF = 't2.php'>  โต๊ะ2  </A>
<?php
include('condb.php');
$num_result = mysqli_query($con, "SELECT COUNT(amount) as total_count FROM menu2 WHERE amount >=1 ") or exit(mysqli_error($con));
$row = mysqli_fetch_object($num_result);
echo "<font color=\"red\">$row->total_count</font>";
?>
<br></FONT></CENTER>
</DIV>

<IMG SRC="img/a.jpg" width="300" height="300">
<DIV STYLE="position:absolute; top:250px; left:690px; width:200px; height:25px">
<CENTER><FONT SIZE="+2" COLOR="00ff00"><A HREF = 't3.php'>  โต๊ะ3  </A>
<?php
include('condb.php');
$num_result = mysqli_query($con, "SELECT COUNT(amount) as total_count FROM menu3 WHERE amount >=1 ") or exit(mysqli_error($con));
$row = mysqli_fetch_object($num_result);
echo "<font color=\"red\">$row->total_count</font>";
?>
<br></FONT></CENTER>
</DIV>

<IMG SRC="img/a.jpg" width="300" height="300">
<DIV STYLE="position:absolute; top:250px; left:995px; width:200px; height:25px">
<CENTER><FONT SIZE="+2" COLOR="00ff00"><A HREF = 't4.php'>  โต๊ะ4  </A>
<?php
include('condb.php');
$num_result = mysqli_query($con, "SELECT COUNT(amount) as total_count FROM menu4 WHERE amount >=1 ") or exit(mysqli_error($con));
$row = mysqli_fetch_object($num_result);
echo "<font color=\"red\">$row->total_count</font>";
?>
<br></FONT></CENTER>
</DIV>
	</form>
	
</body>
</html>