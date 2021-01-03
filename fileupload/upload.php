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

	$expLoadedFileName=explode(".",$filename); //getting out the file extension and name in array
	$tmpExtension=strtolower(end($expLoadedFileName));//getting out the extension name

	$isAllowed=array("jpg","jpeg","png");//which extension is allowed

	if (in_array($tmpExtension,$isAllowed))//checking the extension is in array or not
	{
		if ($fileerror==0)
		{

			$newName=uniqid("SD",true).".".$tmpExtension;//giving the new name of the file a uinqid
			$destination='upload/'.$newName;
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
	else
	{
		echo "File type is not allowed";
	}

	
}

 ?>