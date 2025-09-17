<?php

$conn= mysqli_connect("localhost", "root", "", "library");
if (!$conn){
    die("Error!");

}
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "Select * from staff where email = '$email' and password = '$password' ";
$result = mysqli_query ($conn, $sql);

if (mysqli_num_rows($result)>0){
    header("Location:close.html");
    exit();
}else{
    echo "login failed";

mysqli_close($conn);}

?>
