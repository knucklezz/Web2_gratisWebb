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

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gratiswebb";


$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT id, namnforetag, gorforetag, syfteforetag, infoforetag, teleforetag, emailforetag FROM information";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
              echo "<table class='active table table-hover'><tr class='active'><th>ID</th><th>Namn på företaget</th><th>Vad gör företaget</th><th>Vad är deras syfte</th><th>Information om företaget</th><th>Telefon till företaget</th><th>Email till företaget</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) { 
     	echo "<tr class='active'><td>".$row["id"]."</td><td>".$row["namnforetag"]."</td><td>".$row["gorforetag"]."</td><td>".$row["syfteforetag"]."</td><td>".$row["infoforetag"]."</td><td>".$row["teleforetag"]."</td><td>".$row["emailforetag"]."</td></tr>" ;
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>





</body>
</html>