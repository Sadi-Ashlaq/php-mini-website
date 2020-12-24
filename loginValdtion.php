<?php
section_start();
$userName = $_POST['username'];
$passWord = $_POST['password'];

$users = array ( 'User' => 'Sadi'  , 'Pass' => 'sadi123'  , 'Role' => 'Admin',
                 'User' => 'Laith' , 'Pass'=> 'laith123'  , 'Role' => 'User' ,
                 'User' => 'Sara'  , 'Pass' => 'sara123'  , 'Role' => 'User' ,
                 'User' => 'Omar'  , 'Pass' => 'omar123'  , 'Role' => 'User' ,
                 'User' => 'Lara'  , 'Pass' => 'Lara123'  , 'Role' => 'User'
              );
              foreach ($users as $user => $pass) {
                if($userName != $user['User'] && $passWord != $pass['Pass'] ) {
                  if($va)
                   header("location:admin.php");
                }
              else{
                echo "You Are :".$User['role'];
                    }
                  }
?>