<html>
<head>
    <title>Delete Data</title>
</head>
 
<body>
<?php
	include_once 'ivud.php';
	
	$id=$_GET["id2"];

	$delete = new ivud();
	
	$delete->delete($id);
    
   mysql_close($con);

?>
</body>
</html>