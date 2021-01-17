<!DOCTYPE html>
<html>
<head>
<title>Borrow Book</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<form action= "borrow.php" method = "post">
  <input type="text" placeholder="Member ID" name="memberID"><br><br>
  <input type="text" placeholder="ISBN" name="isbn"><br><br>
  <input placeholder="Due Date" type="text" onfocus="(this.type='date')" id="date" name="due_date"><br><br>
  <input type="submit"  placeholder="Borrowe BOOK" name="send"></a>
</form>

<a href="showBorrowers.php"  class="button button1">Borrowers List</a>
<a href="activeRes.php"  class="button button2">Active Reservation</a>
<a href="expiredRes.php"  class="button button3">Expired Reservation</a>

<?php
$host = "localhost:3307";
$user = "root";
$password = "root";
$dbName = "library";
$conn = mysqli_connect($host, $user, $password,$dbName);

$MemberID = $_POST['memberID'];
$Isbn = $_POST['isbn'];
$Due_date = $_POST['due_date'];
$Send = $_POST['send'];

if($Send){
$query = "INSERT INTO borrow(mem_id,isbnn,due_date)VALUE('$MemberID','$Isbn','$Due_date') ";
$result = mysqli_query($conn,$query);
}
?>
</body>
</html>