<?php
$con = mysqli_connect('Localhost','root');
if ($con) {
    echo"connection successfull";
}else {
    echo"connection failed";
}
mysqli_select_db($con,'photos');

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];

$query= "INSERT INTO  users (name, email, number) VALUES ('$name','$email','$number')";

mysqli_query($con,$query);
header('location:index.php#Contact Me')

?>