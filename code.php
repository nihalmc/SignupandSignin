<?php 
 $conn=mysqli_connect("localhost","root","","registration");
 if(isset($_POST['register'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $enp=md5($password);
    $sql="INSERT INTO `user_data`(`username`,`password`)
    VALUES('$username','$enp')";
    mysqli_query($conn,$sql);
 }

 ?>


