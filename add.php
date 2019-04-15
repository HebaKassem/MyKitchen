<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
include_once 'ivud.php';
	$insert = new ivud();
	$category=$_POST["category"];
	$name=$_POST["name"];
	$ingredients=$_POST["ingredients"];
	$preparation=$_POST["preparation"];
	$picture=$_POST["picture"];

	$insert->add($category, $name,$ingredients, $preparation, $picture);

?>
</body>
</html>