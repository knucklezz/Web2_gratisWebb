<!DOCTYPE html>

	<?php
	session_start();
	?>

<html>
<head>
 <link rel="stylesheet" type="text/css" href="./css/form_style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <meta charset="UTF-8">

	<title>login</title>
</head>
<body>

	<div class="backgorund-form">

	<div class="center_div">
		<form class="form-horizontal" action="login.php" method ="post">
            <div class="form-group">
                <label>Username: </label>
                <input type="text" name="username" class="form-control" placeholder="username"/>
            </div>
            <div class="form-group">
                <label>Password: </label>
                <input type="password" name="password" class="form-control" placeholder="password" />
            </div>
            <div class="form-group">
                <input class="btn btn-default" type="submit" value="Submit"/>
            </div>    
        </form>
      </div>

</div>

	   <?php
	   	$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "gratiswebb";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



		$adminusername = 'bush';
		$adminpassword = 'did911';

	   	if(!empty($_POST['username'])) {



	   	if($_POST['username'] == $adminusername && $_POST['password'] == $adminpassword) {
	   		$_SESSION['valid'] = true;
	   		$_SESSION['timeout'] = time();
	   		$_SESSION['username'] = 'bush';
	   		echo "Fuck emil ";
	   		header("location: admin.php");
	   	}else {
	   		echo "kys" ;
	   	}

}


$conn->close();
	   ?>

</body>
</html>