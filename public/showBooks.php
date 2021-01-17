<!DOCTYPE html>
<html>
<head>
<link href="table.css" rel="stylesheet" type="text/css"/>
<title>Books List</title>
</head>

<body>
<table>
<th>ISBN</th>
<th>Title</th>
<th>Release Date</th>

  <?php
$host = "localhost:3307";
$user = "root";
$password = "root";
$dbName = "library";
$conn = mysqli_connect($host, $user, $password,$dbName);

$query = "SELECT * FROM book";
$result= mysqli_query($conn,$query);
if($result){
  while($row =mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $row['isbn'] . "</td><td>" . $row['title'] . "</td><td>" . $row['release_date'] . "</td><td>";
  }
}
?>
</body>
</html>
