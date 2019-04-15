<?php

$id=$_GET["id2"];

$con=mysql_connect("localhost","root","");

mysql_select_db("mykitchen");

$q=mysql_query("select * from items where id=$id");

$row=mysql_fetch_array($q);

mysql_close($con);
?>


<form action="http://localhost/IT_Project/myKitchen/myKitchen/update_ok.php" method="post">
 update by category and name :
 <br><br>
    <table class='table table-hover table-responsive table-bordered'>
 <input type="hidden" name="id3" value="<?php echo $id;?>">

        <tr>
            <td>Category</td>
            <td><input type="text" name="category" id="category"/></td>
        </tr>
 
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" id="name" /></td>
        </tr>
 
        <tr>
            <td>Ingredients</td>
            <td><textarea name='ingredients' class='ingredients'></textarea></td>
        </tr>
         <tr>
            <td>Preparation</td>
            <td><textarea name='preparation' class='preparation'></textarea></td>
        </tr>
        
        <tr>
            <td>Picture</td>
            <td><input type="text" name="picture" id="picture"/></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Update">
            </td>
        </tr>
 
    </table>
</form>