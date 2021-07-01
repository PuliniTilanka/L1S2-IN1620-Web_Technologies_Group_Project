<?php
//connect db
$conn = mysqli_connect('localhost','root','','senora');

$data=json_decode(file_get_contents("php://input"));

//storing data
$fname= mysqli_real_escape_string($conn,$data->fname);
$lname= mysqli_real_escape_string($conn,$data->lname);
$ID= mysqli_real_escape_string($conn,$data->ID);
$phoneNo= mysqli_real_escape_string($conn,$data->phoneNo);
$email= mysqli_real_escape_string($conn,$data->email);
$school= mysqli_real_escape_string($conn,$data->school);
$password= mysqli_real_escape_string($conn,$data->password);

//inserting data
$sql = "INSERT INTO student(fname, lname, ID, phoneNo,email,school,password) VALUES ('$fname','$lname','$ID','$phoneNo','$email','$school','$password')";

mysqli_query($conn,$sql);

?>
