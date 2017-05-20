<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Music</title>
</head>
<body>
<h2>About Music..........</h2>
<?php
$songName = $_POST['songName'];
echo 'Song Name:'. $songName .'<br />';

$singerName = $_POST['singerName'];
echo 'Singer Name: '. $singerName .'<br />';

$writerName = $_POST['writerName'];
echo 'Singer Name: '. $writerName .'<br />';

$songType = $_POST['songType'];
echo 'Song Type: '. $songType .'<br />';


//send the song name, singer name, writer name, song type to the database
//Step 1 - connect to the database
$conn = new PDO('mysql:host=aws.computerstudi.es:dbname=gc200361499',  'gc200361499',  '0nVzCXwARD');

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//Step 2 - create the SQL statement
$sql = "insert into song (songName, singerName, writerName, songType) 
                values (:songName, :singerName, :writerName, :songType)";

//Step 3 - prepare the SQL
$cmd = $conn->prepare($sql);
$cmd->bindParam(':songName', $songName, PDO::PARAM_STR, 20);
$cmd->bindParam(':singerName', $singerName, PDO::PARAM_STR, 20);
$cmd->bindParam(':writerName', $writerName, PDO::PARAM_STR, 20);
$cmd->bindParam(':songType', $songType, PDO::PARAM_STR, 10);


//Step 4 - exectute the SQL command
$cmd->execute();

//Step 5 - disconnect from  database
$conn = null;

//Step 6 - redirect to the another web page
header('location:listmusic.php');
?>

</body>
</html>






