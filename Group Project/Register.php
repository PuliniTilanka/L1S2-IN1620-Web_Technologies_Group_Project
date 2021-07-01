<!DOCTYPE HTML>
<html>
<head>
<title>PHP dara Type</title>
</head>
<body>
<?php
$conn = mysqli_connect('local host','root','','mydb');
if ($conn)
{
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else
{
    echo "Connection was Successful<br>";
}
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$nic = $_REQUEST['nic'];
$school = $_REQUEST['school'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO student VALUES ('$nic','$first_name','$last_name','$phone','$email','$school','$password')";

if(mysqli_query($conn,$sql))
{
    echo "<h3>Data stored in a database Successfully</h3>"
}
else
{
    echo "ERROR: Sorry $sql. ".mysqli_error($conn);
}
mysqli_error($conn);

?>

</body>
</html>
