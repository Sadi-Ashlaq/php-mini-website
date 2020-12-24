<?php
$userName    = $_POST ['name'];
$passWord    = $_POST ['password'];
$rePassword  = $_POST ['repassword'];
$phoneNumber = $_POST ['phonenumber'];

$serverName= 'localhost';
$userName= 'root';
$passWord= '';
$dbname= 'mystore';
​
$connection = new mysqli($servername,$username,$password,$dbname);
​
if($connection->connect_error){
    echo 'error';
}else{
    echo 'connected successfully';
}
​
if(isset($_POST['submit'])){

$sql = 'CREATE TABLE MyStory (id int(11) AUTO_INCREMENT PRIMARY KEY,firstname varchar(32),lastname varchar(32),email varchar(50))';
​
$sql = "INSERT INTO users (firstname, lastname, email) Values ('$userName', '$passWord', '$phoneNumber')";
​
if($connection->query($sql) == TRUE){
    echo 'new Table has been created';
}else{
    echo 'error'.$sql.'<br>'.$connection->error;
}
​
}
​
?>