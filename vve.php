
<?php
    if(isset($_POST['submit']))
	$username = $_POST['username'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$language=$_POST['language'];
	$lan="";
	
		$conn = mysqli_connect('localhost','root','','new');
		

	if (!$conn) {
		echo "connection failed"."<br>";
	}else{
		foreach ($language as $lang) {
			$lan .=$lang.",";
		}

	 	$query = "INSERT INTO project(username,password,gender,language) values('$username','$password','$gender','$lan')";

		$result = mysqli_query($conn,$query);
		

		if (!$result) {
			die('query failed'.mysqli_error());
		}else{
			echo "connection sucessful";
			}	
    }
	
	 ?>

