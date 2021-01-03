<?php 

class Id
{
	private $con;
	private $love=array();
	public function __Construct($con)
	{
		$this->con=$con;
		$qq=mysqli_query($this->con,"SELECT id FROM data");
		
		// $arr=mysqli_fetch_array($qq);
		while($row = mysqli_fetch_array($qq))
		{
		   	array_push($this->love,$row);
		}

	}
	public function ri()
	{
		return $this->love;
	}
}


 ?>