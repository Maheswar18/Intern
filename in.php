<?php 



if(isset($_POST['contactform']))

{

        define('DB_HOST', 'localhost');
define('DB_USER', 'mahesh');
define('DB_PASS', '123456');
define('DB_NAME', 'labda');

var user=$_POST['name'];
var email=$_POST['email'];
var ph=$_POST['phone'];
var age=$_POST['age'];


$conn=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($conn->connect_error)
{
    die('connection failder'.$conn->connect_error);
}
echo 'connected';

$sql="insert into data values('$user','$email','$ph','$age')";
$result=mysqli_query($conn,$sql);
}

?>