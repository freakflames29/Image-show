<?php 

class Insert
{
	private $con;
	public function __Construct($con)
	{
		$this->con=$con;
	}
	public function insert_it($name,$path)
	{
		$query="INSERT INTO data VALUES(NULL,'$name','$path')";
		$fire=mysqli_query($this->con,$query);
		
		return $fire;
	}
}


 ?>