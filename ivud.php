<?php
include_once 'connection.php';
/**
 * 
 */
class ivud extends connection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add($category, $name,$ingredients, $preparation, $picture)
    {
        $query="insert into items (category,name,ingredients,preparation,picture) values
            ('$category','$name','$ingredients','$preparation','$picture')";
    

        $result = $this->connection->query($query);
        
          
        if ($result)
        {
             header("location:functions.php");
        }
        else
        {
             echo "Not inserted";

        }       
    }

/*
public function select($category, $name)
    {   

        $query="SELECT * FROM items WHERE category=\"$category\" and name=\"$name\""; 
        $result = $this->connection->query($query);
        
        if ($result == false) {
            echo" <font color='red'><h1>Error: can't select ".$name." from table items.</h1>";
            return false;

        } else{
            echo "<font color='lightgreen'><h1> ".$name." is successfully selected from table items.</h1>";
            return true;

        } 
    }

*/

public function update($id,$category, $name,$ingredients,$preparation, $picture)
    {   

        $query="update items set  category='$category',name='$name',ingredients='$ingredients', preparation='$preparation',picture='$picture'  where id=$id ";
        
               $result = $this->connection->query($query);

        if ($result)
        {
            header("location:functions.php");
        }
        else
        {
            echo "Not Updated";

        }


    }


 public function delete($id) 
    { 

        $query="DELETE FROM items WHERE id=$id"; 
        $result = $this->connection->query($query);
        
if ($result)
{
    header("location:functions.php");
}
else
{
    echo "Not Deleted";

}
       /* if ($result == false) {
            echo" <font color='red'><h1>Error: can't delete from table items.</h1>";
            return false;

        } else{
            echo "<font color='lightgreen'><h1> is successfully deleted from table items.</h1>";
            return true;

        }*/
    }


    public function viewAll($query)
    {        
        $result = $this->connection->query($query);
        
        if ($result == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }

}

?>