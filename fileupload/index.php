<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File upload</title>
</head>
<body>
	<div class="mainContent">
		<div class="FormContainer">
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<input type="text" placeholder="Name" name="username" class="bl" required>
			<input type="file" name="photoFile" class="bl">
			<button type="submit" name="submit">Submit</button>
		</form>
		</div>
		<!-- <img src="upload/ude" alt=""> -->
	</div>
</body>
</html>