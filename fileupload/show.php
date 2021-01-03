<?php 
include 'config.php';
include 'class/Id.php'; 
include 'class/Show.php'; 

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=`, initial-scale=1.0">
	<title>The uploaded file is</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- <img src="upload/udemy.jpeg" alt="ia"> -->
	<div class="wrap">
		<!-- <div class="card">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png" alt="image">
			<h3>name</h3>


		</div> -->
		<?php


			$idfrom=new Id($con);
			$realid=$idfrom->ri();
			// print_r($realid);
			
			foreach ($realid as $ids)
			{
				// echo $ids['id'];
				$TheID=$ids['id'];
				// print_r($TheID)."<br/>";
				// print_r($ids);
				$shows=new Show($con,$TheID);

				echo '

						<div class="card">
						<img src="'.$shows->show_image().'" alt="image">

						<h3>'.$shows->show_name().'</h3>

						</div>



				';
				
			}

			?>
			<!-- <span>U+1F345</span> -->
	</div>

</body>
</html>
