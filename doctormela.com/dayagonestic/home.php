<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="home.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dayagosnistic senter</title>
</head>

<body>
    <form action="home.php" method="POST" enctype="multipart/form-data">
     <div class="container-fluid text-center bg-dark">
            <h1>ডায়াগনোস্টিক সেন্টারের রেজিস্ট্রেশন </h1>
      </div>
    
      
<div class="container" style="background-color: rgba(16, 95, 95, 0.671);border: 3px solid rgba(218, 12, 12, 0.829);">

    
<br>
   <div class="form-group">
        <label for="image">ছবিঃ</label>
        <br>
        <input class="form-ctonrol"id="i" type="file" name="image" id="image" >
   </div>

<div class="form-group">
        <label for="name">ডায়াগনোস্টিকের নামঃ</label>
        <br>
        <input type="text"class="form-ctonrol"id="i" name="name" placeholder="ডায়াগনোস্টিকের নাম" required >
</div>

<div class="form-group">
        <label for="মোবাইল"> মোবাইলঃ</label>
        <br>
        <input type="text"class="form-ctonrol"id="i" name="phone" placeholder="যেমনঃ 01850-914896" required>
</div>

<div class="form-group">
        <label for="email">ই-মেইলঃ</label>
        <br>
        <input type="email"class="form-ctonrol"id="i" name="email" placeholder="যেমনঃ mozahidhossain@gmail.com">
</div>

<div class="form-group">
        <label for="nid">পরিচালকের নামঃ  </label>
        <br>
        <input type="text"class="form-ctonrol"id="i" name="pname" placeholder="পরিচালকের নাম" required>
</div>

<div class="form-group">
        <label for="birthday">পরিচালকের মোবাইল নাম্বারঃ</label>
        <br>
        <input type="text"class="form-ctonrol"id="i" name="pphone" placeholder="পরিচালকের মোবাইল নাম্বার">
</div>

<div class="form-group">
        <label for="blood">কত সনে প্রতিষ্ঠিতঃ </label>
        <br>
        <input type="text" class="form-ctonrol"id="i"name="sal" placeholder="কত সনে প্রতিষ্ঠিত">
</div>

<div class="form-group">
        <label for="servic">বিশেষ কোন সেবা যা সচরাচর অন্যদের নাইঃ </label>
        <br>
        <textarea rows="2" type="text"class="form-ctonrol"id="i" name="bseba" placeholder="বিশেষ সেবাসমূহ  " required></textarea>
</div>

<div class="form-group">
        <label for="ocopation"> প্রদেয় সেবাসমূহঃ  </label>
        <br>
        <textarea rows="2" type="text"class="form-ctonrol"id="i" name="seba" placeholder="প্রদেয় সেবাসমূহ" required></textarea>
</div>

 <div class="form-group">
        <label for="education">ডকুমেন্টরী (যদি থাকে): </label>
        <br>
        <input type="text"class="form-ctonrol"id="i" name="docu" placeholder="video">
</div>

<div class="form-group">
        <label>যেসব ডাক্তার বসেনঃ</label>
        <br>
        <textarea rows="2" type="text"class="form-ctonrol"id="i" name="doctor" placeholder="যেসব ডাক্তার বসেন" required></textarea>
</div>

<hr>
   
    <strong style="margin-left: 20%;">ডাক্তার মেলা ডট কমের স্বাস্থ্যকর্মীর</strong>

<div class="form-group">
        <label>নামঃ</label>
          <br>
        <input type="text"class="form-ctonrol"id="i" name="dname" placeholder="নাম">
</div>

<div class="form-group">
        <label>আইডি নাম্বারঃ</label>
        <br>
        <input type="text" class="form-ctonrol"id="i" name="did" placeholder="21567467">
</div>

<div class="form-group">
        <label for="মোবাইল"> মোবাইলঃ</label>
        <br>
        <input type="text"class="form-ctonrol"id="i" name="dphone" placeholder="01850-914896" required>
</div>

  
</div>
<br>

<div class="container ">
  <button type="submit" class="btn btn-primary" name="submit" id="submit"value="Submit" formnovalidate="formnovalidate">Submit</button>
</div>
<br>
</form>
</body>
</html>
<?php

if(isset($_REQUEST['submit'])){

    $pic = $_FILES['image'];
$image_name = $pic['name'];
$image_tmp_name = $pic['tmp_name'];

$name = $_REQUEST['name'];

$phone= $_REQUEST['phone'];

$email = $_REQUEST['email'];

$pname = $_REQUEST['pname'];

$pphone = $_REQUEST['pphone'];

$sal = $_REQUEST['sal'];

$bseba = $_REQUEST['bseba'];

$seba = $_REQUEST['seba'];

$docu = $_REQUEST['docu'];

$doctor = $_REQUEST['doctor'];

$dname = $_REQUEST['dname'];

$did = $_REQUEST['did'];

$dphone = $_REQUEST['dphone'];

if(!empty($image_name)){

    $loc = "dayagonestic_pic/";

    move_uploaded_file($image_tmp_name,$loc.$image_name);
    

   }else{
       echo "your file is empty.";
   }


$con = mysqli_connect('localhost','root','','doctor_db');
if(!$con){
    die("Not connected." .mysqli_error());
}
$query = "INSERT INTO `dayagonestic` (`image`, `name`, `phone`, `email`, `pname`, `pphone`, `sal`, `bseba`, `seba`, `docu`, `doctor`, `dname`, `did`, `dphone`) VALUES ('$image_name', '$name', '$phone', '$email', '$pname', '$pphone', '$sal', '$bseba', '$seba', '$docu', '$doctor', '$dname', '$did', '$dphone')";
$result = mysqli_query($con, $query);
if($result){
    echo "insert successfully.";
}
else{
    echo "not insert successfully.";
}

}
 ?>
    
