<?php 
$sql="SELECT * FROM customers";
$server = "localhost";
$user = "root";
$password = "";
$dbname = "silvaplatter";
$connect =mysqli_connect($server,$user,$password,$dbname);

$result = mysqli_query($connect,$sql);
while($row=mysqli_fetch_assoc($result)){?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['customerid']; ?></td>
  <td><?php echo $row['fullname']; ?></td>
  <td><?php echo $row['phone']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['address']; ?></td>
</tr>
<?php }
?>

