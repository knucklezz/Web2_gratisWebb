<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 <link rel="stylesheet" type="text/css" href="./css/form_style.css">

    <meta charset="UTF-8">
    <title>Formulär</title>

</head>

<body>

<div class="backgorund-form">


<h1 class="text-center">Tackar</h1>
<p class="text-center">Tack för din ansökan, Vi kommer att kontakta dig så snart som möjligt.</p>


<div class="col-sm-12">
  <div class="text-center">
     <a href="form.html"> <button class="btn btn-default">Tillbaka</button></a>
  </div>
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

$sql = "INSERT INTO information (id, namnforetag, gorforetag, syfteforetag, infoforetag, teleforetag, emailforetag)
VALUES ('id', '$_POST[namnforetag]', '$_POST[gorforetag]', '$_POST[syfteforetag]', '$_POST[infoforetag]', '$_POST[teleforetag]', '$_POST[emailforetag]')";


if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>
</html>