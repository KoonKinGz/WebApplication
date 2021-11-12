<title>โต๊ะ 3</title>
<table class="table table-bordered"><br>
<center><h1> โต๊ะ 3 </h1></center>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
include('condb.php'); 
error_reporting(0);

$query = "SELECT * FROM menu3 ORDER BY ID ASC";
$result = mysqli_query($con, $query)  or die("Error:" . mysqli_error()); 
echo "<table class='table table-bordered' align='center' width='300'>";
echo "<tr align='center' bgcolor='#CCCCCC'>
  <td>ลำดับ</td>
  <td>ชื่อ</td>
  <td>ราคา</td>
  <td>จำนวน</td>
  <td>สั่งรายการ</td>
  <td>รวม</td>
</tr>";
 foreach($result as $row){
  echo "<form action='update3.php' method='post'>";
  echo "<tr>";
  echo "<td align='center'>" .$row["ID"] .  "</td> "; 
  echo "<td align='center'>" .$row["name"] .  "</td> ";
  echo "<td align='center'>" .$row["prices"] .  "</td> ";
  echo "<td align='center'>" .$row["amount"] .  "</td> ";
  echo "<td align='center'> <input type='number' name='update[$row[ID]]' value='$row[amount]' min='0' ></td>"; 

  $prices = $row["prices"];
  $amount = $row["amount"];
  $sum = $prices*$amount;
  $total = $total + $sum;
}
echo "<td>$total</td>";
echo "</tr>";
  echo "<tr>";
  echo "<td colspan='3' align='right'> สั่งอาหาร <button type='submit'>ยืนยัน</button>    </td>";
  echo "<tr>";
  echo '</form>';
echo "</table>";
mysqli_close($con);
?>