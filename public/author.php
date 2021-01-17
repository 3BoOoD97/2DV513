<!DOCTYPE html>
<html>
<head>
<title>Add Author</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<form action= "author.php" method = "post">
  <input type="text" placeholder="Name" name="name"><br><br>
  <input type="text" placeholder="Phone" name="phone"><br><br>
  <input type="text" placeholder="Email" name="email"><br><br>
  <input type="submit"  placeholder="ADD AUTHOR" name="send"></a>
</form>

<a href="showAuthor.php" class="button button1">SHOW AUTHORS</a>

<?php
$host = "localhost:3307";
$user = "root";
$password = "root";
$dbName = "library";
$conn = mysqli_connect($host, $user, $password,$dbName);

$Name = $_POST['name'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$Send = $_POST['send'];

  if($Send){
$query = "INSERT INTO author(name,phone,email)VALUE('$Name','$Phone','$Email')";
$result = mysqli_query($conn,$query);
}
?>

</body>
</html>