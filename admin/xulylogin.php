<?php
$er='';
$user='';
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST["name"];
$pass=$_POST["password"];
$db=mysqli_connect("34.230.84.57","gaucon","123@123a","onlineshop");
$sql="SELECT * FROM admin_info WHERE admin_name='{$name}' AND admin_password='{$pass}'";
$rs=mysqli_query($db, $sql);
$user = mysqli_fetch_assoc($rs);
if(mysqli_num_rows($rs)){
    $_SESSION['user'] = $user['admin_name'];
    $user = $name;
   header('location: index.php');
}
else{
    $er="User name or password is incorrect";
    include('Login.php');
}
}
?>
