<?php

$con = mysqli_connect('localhost', 'root');
if($con){
    echo "Connection Successfull";
}
else{
    echo "Cannot connected at the moment";
}

mysqli_select_db($con,'example');

$UserName = $_POST['User_Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$MobileNo = $_POST['Mobile_No'];

// $query = "INSERT INTO 'userinfodata'( 'User Name', 'Email', 'Password', 'Mobile No') VALUES ('$UserName','$Email','$Password ','$MobileNo')";
$query = "INSERT INTO `userinfodata`( `User Name`, `Email`, `Password`, `Mobile No`) VALUES ('$UserName','$Email','$Password','$MobileNo')";
mysqli_query($con,$query); 

echo"$query";


header('location:index.php');
?>