<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practise</title>
</head>
<body>
    <form action="home.php" method="post" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="enter your name">
        <br><br>
        <input type="password" name="password" placeholder="password"><br><br>

        <input type="number" name="phone" placeholder="enter your phone">
        <br><br>

        <input type="email" name="email" placeholder="enter your email">

        <br><br>
        <input type="text" name="nid" placeholder="enter your nid">
        <br><br>

        <input type="file" name="picture" value="upload">
        <br><br>


        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php

if(isset($_REQUEST['submit'])){
$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$nid = $_REQUEST['nid'];

$pic = $_FILES['picture'];
$image_name = $pic['name'];
$image_tmp_name = $pic['tmp_name'];


if(!empty($image_name)){

    $loc = "doctor_pic/";

    move_uploaded_file($image_tmp_name,$loc.$image_name);
    

   }else{
       echo "your file is empty.";
   }


$con = mysqli_connect('localhost','root','','test');
if(!$con){
    die("Not connected." .mysqli_error());
}
$query = "INSERT INTO `rakib` (`Name`, `password`,`mobile`,`email`,`nid`,`picture`) VALUES ('$user', '$pass','$phone','$email','$nid','$image_name')";

$result = mysqli_query($con, $query);
if($result){
    echo "insert successfully.";
}
else{
    echo "not insert successfully.";
}

}
 ?>