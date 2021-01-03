<?php

include 'class/Insert.php'; 
include 'config.php';

if (isset($_POST['submit']))
{
	$name=$_POST['username'];
	$file=$_FILES['photoFile'];
	// print_r($file);

	$filename=$file['name'];
	$filepath=$file['tmp_name'];
	$fileerror=$file['error'];

	if ($fileerror==0)
	{
		$destination='upload/'.$filename;
		// echo $destination;
		move_uploaded_file($filepath,$destination);
		$ob=new Insert($con);
		$res=$ob->insert_it($name,$destination);
		if ($res)
		{
			header("Location:show.php");
			# code...
		}
		else
		{
			echo "galti";
		}
	}
}

 ?>