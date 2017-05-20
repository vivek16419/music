<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>list of music</title>



</head>
<body>
<h1>List of Music</h1>

<?php
//Step 1 - connect to the database
$conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200361499',  'gc200361499',  '0nVzCXwARD');

//Step 2 - create the SQL command
$sql = "select * from song";

//Step 3 - preparing sql command
$cmd = $conn->prepare($sql);

//Step 4 - execute the command
$cmd = execute();

//Step 5 - store the result
$song = $cmd->fetchAll();

//Step 6 - remove the database connection
$conn = null;

//Step 7 - loop over the results and display them to the screen
echo '<table class="table table-striped table-hover">
            <tr><th>SongName</th>
                    <th>SingerName</th>
                    <th>WriterName</th>
                    <th>SongType</th>
              </tr>';

foreach($song as $song)
{
    echo '<tr>
                   <td>'.$song['songName'].'</td>
                  <td>'.$song['singerName'].'</td>
                  <td>'.$song['writerName'].'</td>
                  <td>'.$song['songType'].'</td>
          </tr>';
}
echo '</table>';
?>
</body>
</html>



















