<?php
//including the database connection file
include_once 'ivud.php';
 
$view = new ivud();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM items ";
$result = $view->viewAll($query);
//echo '<pre>'; print_r($result); exit;
?>
 
<html>
<head>    
    <title>View Data</title>
</head>
 
<body> 
    <table width='100%' border=2>
 
    <tr bgcolor='#CCCCCC'>
        <td>ID</td>
        <td>Category</td>
        <td>Name</td>
        <td>Ingredients</td>
        <td>Preparation</td>
        <td>Picture</td>
    </tr>
    <?php 
    $id=$_GET["id2"];
    foreach ($result as $key => $res) {
        if($res['id']==$id || is_null($id))
        {
            echo "<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['category']."</td>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['ingredients']."</td>"; 
            echo "<td>".$res['preparation']."</td>";
            echo "<td>"."<img src='images\\".$res['picture']."'width=100px height=100px></td>";
            echo "</tr>"; 
        }
    }
    ?>
    </table>
</body>
</html>