<!DOCTYPE html>
<html>
<head>
<link href="table.css" rel="stylesheet" type="text/css"/>
<title>Members List</title>
</head>

<body>
<table>
<th>ID</th>
<th>User Name</th>
<th>Phone</th>
<th>Address</th>

  <?php
$host = "localhost:3307";
$user = "root";
$password = "root";
$dbName = "library";
$conn = mysqli_connect($host, $user, $password,$dbName);

$query = "SELECT * FROM member";
$result= mysqli_query($conn,$query);
if($result){
  while($row =mysqli_fetch_assoc($result)){
    echo "<tr><td>"  . $row['mem_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['address'] . "</td></tr>";
  }
}
?>
</body>
</html>
