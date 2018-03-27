<!DOCTYPE html>
<html>
<head>
	<title>Bai 3</title>
</head>
<body>
<form method="post" name="form">
            Name:<input type="text" name="name"><br><br>
            E-Mail:<input type="text" name="Email"><br><br>
            Website:<input type="text" name="Website"><br><br>
            Comment:<textarea rows="5" cols="20" name="Comment"></textarea><br><br>
            Gender:<input type="radio" name="gender">Female
                    <input type="radio" name="gender">Male<br><br>
            <input type="submit" value="submit" name="submit"
            
</form>
<?php
if(isset($_POST['name'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$comment = $_POST['comment'];
	$gender = $_POST['gender'];
	echo "Name: $name <br>";
	echo "Email: $email <br>";
	echo "Website: $website <br>";
	echo "Comment: $comment <br>";
	echo "Gender: $gender";
}	
?>
</body>
</html>