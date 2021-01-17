<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Add Member</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<form action= "member.php" method = "post">
  <input type="text" placeholder="Name" name="name"><br><br>
  <input type="text" placeholder="Phone" name="phone"><br><br>
  <input type="text" placeholder="Address" name="address"><br><br>
  <input type="submit"  placeholder="ADD" name="send"></a>
</form>

<a href="showMembers.php"  class="button button1">Members List</a>

<?php
$host = "localhost:3307";
$user = "root";
$password = "root";
$dbName = "library";
$conn = mysqli_connect($host, $user, $password,$dbName);

$Name = $_POST['name'];
$Phone = $_POST['phone'];
$Address = $_POST['address'];
$Send = $_POST['send'];

  if($Send){
$query = "INSERT INTO member(name,phone,address)VALUE('$Name','$Phone','$Address')";
$result = mysqli_query($conn,$query);
echo"done";
}
?>
</body>
</html>

