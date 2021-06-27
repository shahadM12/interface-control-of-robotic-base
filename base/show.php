
<table>
<th>#</th>
<th>L</th>
<th>R</th>
<th>S</th>
<th>B</th>
<th>F</th>


<?php


$host = "localhost"; 
$username = "root";    
$password = ""; 
$dbname = "interface";

$conn = new mysqli($host, $username, $password, $dbname);


$query = "SELECT * FROM int_base";
$result = mysqli_query($conn,$query);

if ($result){
  while($row = mysqli_fetch_assoc($result)){

      echo "<tr><td>" . $row['id'] . "</td><td>" . $row['Left_value'] . "</td><td>" . $row['Right_value'] . "</td><td>" . $row['Stop_value'] . "</td><td>" . $row['Backward_value'] . "</td><td>" . $row['Forward_value'] . "</td></tr>" ;
  
  
  }
  echo "</table>";
}
else{
  echo "يوجد خطا";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>show data</title>

    <style>


body{
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: 2% 30%; 
}

table, td, th {  
  border: 1px solid white;
  text-align: center;
  color:white;

}

table {
  border-collapse: collapse;
  float: right;
  width: 30%;
  margin-top: 100px ;
  margin-right: 50px;
}

th, td {
  padding: 10px;
  border-bottom: 1px solid #ddd;
}



</style>

</head>

<body>
   


  <footer>
    <br><p>Copyright @2021 | Designed With by: Shahad Alsady<br>
    <a href="mailto:shahad680.s6@gmail.com">shahad680.s6@gmail.com</a></p>
  </footer>
</body>
</html>

