<?php
class connection{

	var $host="localhost";
	var $db="myKitchen";
	var $username="root";
	var $password="";
	
	var $connect;

	function connect()
	{	
		$this->connect=mysql_connect($this->host,$this->username,$this->password);
		mysql_select_db($this->db);		
		//echo"<h1>U r connected</h1>";
	}
	function disconnect(){
		if(isset($this->connect))
			mysql_close($this->connect);

	}
}

?>