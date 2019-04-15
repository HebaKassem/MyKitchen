<html>
<head>
    <title>Update Data</title>
</head>
 
<body>
<?php
include_once 'ivud.php';
	$update = new ivud();
	
	$id=$_POST["id3"];
	$category=$_POST["category"];
	$name=$_POST["name"];
	$ingredients=$_POST["ingredients"];
	$preparation=$_POST["preparation"];
	$picture=$_POST["picture"];

	$update->update($id,$category, $name,$ingredients,$preparation, $picture);


?>
</body>
</html>