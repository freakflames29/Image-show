<?php 

class Show
{
	private $con;
	private $data;
	public function __Construct($con,$id)
	{
		$this->con=$con;

		$query="SELECT * FROM data WHERE id='$id'";	
		$fire=mysqli_query($this->con,$query);
		$res=mysqli_fetch_array($fire);
		$this->data=$res;
	}

	public function show_name()
	{
		
			return $this->data['name'];
	}
	public function show_image()
	{
		return $this->data['image'];
	}

	public function show_id()
	{
		return $this->data['id'];

	}
}



 ?>