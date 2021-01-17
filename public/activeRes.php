<!DOCTYPE html>
<html>
<head>
<title>Active Reservation</title>
<link href="table.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<table>
<th>ID</th>
<th>NAME</th>
<th>BOOK TITLE</th>
<th>ISBN</th>
<th>BORROWE DATE</th>
<th>DUE DATE</th>
<th>DAYS LEFT</th>

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

$query = "SELECT * FROM active_reservation";
$result = mysqli_query($conn,$query);

if($result){
  while($row =mysqli_fetch_assoc($result)){
 
    //Count how many days left
    $date1=date_create($row['borrow_date']);
    $date2=date_create($row['due_date']);
    $diff=date_diff($date1,$date2);

    echo "<tr><td>" . $row['mem_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['title'] . "</td><td>" . $row['isbn'] . "</td><td> ". $row['borrow_date'] . "</td><td>".$row['due_date'] ."</td><td>".$diff->format("%a days") . "</td></tr>" ;
  }
}
?>
</body>
</html>