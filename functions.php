<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
    echo "<script type='text/javascript'>alert('You must login first');</script>";
    header('location: login.php');
  }

?>
<?php
//include_once 'connection.php';
//echo"heeree";
$con=mysql_connect("localhost","root","12345678");

mysql_select_db("mykitchen");

$q=mysql_query("select * from items");
echo"Admin : ".$_SESSION['username']."<br><br>";
echo "<a href='insertForm.html'>Insert New</a><br><br><br>";
echo "<table width=100% border=2>";
echo "<tr><th>id</th><th>category</th><th>name</th><th>View</th><th>Update</th><th>Delete</th></tr>";
$counter=1;
while($row=mysql_fetch_array($q))
{
	$id=$row["id"];
	echo "<tr>";
	echo "<td>".$counter."</td>";
	echo "<td>".$row["category"]."</td>";
	echo "<td>".$row["name"]."</td>";
	echo "<td><a href='view.php?id2=$id'>View</a></td>";
	echo "<td><a href='updateForm.php?id2=$id'>Update</a></td>";
	echo "<td><a href='delete.php?id2=$id'>Delete</a></td>";
	echo "</tr>";
	$counter++;
}

echo "</table>";
mysql_close($con);
echo "<a href='login.php?logout='1''>Logout</a>";

?>