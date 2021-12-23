<?php


if(!isset($_POST['btnsignup'])){
header("location: signup.php");
}
$ten = $_POST['txtten'];
$ho = $_POST['txtho'];
$email =$_POST['txtemail'];
$matkhau =$_POST['txtpass'];
$conn = mysqli_connect('localhost','root','','db_btlnhom10');
if(!$conn){
die("vvvv");
}
$sql01 = "SELECT * FROM nguoidung WHERE Email = '$email'";
$result01 = mysqli_query($conn,$sql01);
$password_hash = password_hash($matkhau, PASSWORD_DEFAULT);
if(mysqli_num_rows($result01)>0){
    $error = "Email đã tồn tại vui lòng nhập email khác";
    header("location: signup.php?error=$error");
}else{
$sql02 = "INSERT INTO nguoidung(Ten,Ho,Email,Matkhau) VALUES('$ten','$ho','$email','$password_hash')";
$result02 = mysqli_query($conn,$sql02);
if($result02==true){
header("location:signin.php");
}else{
header("location:signup.php");
    
}
}

?>