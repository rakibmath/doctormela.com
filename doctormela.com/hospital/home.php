<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./home.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospital's registration</title>
</head>

<body>
<form action="home.php" method="post" enctype="multipart/form-data">
<div class="container-fluid text-center bg-dark">
      <h1>হাসপাতালের রেজিস্ট্রেশন ফর্ম</h1>
</div>
    
<div class="container hospital" >

<br>


   <div class="forn-group">
        <label for="image">ছবিঃ</label>
                 <br>
        <input type="file" name="image" class="form-control">
   </div>

<br>

   <div class="forn-group">
        <label for="name">হাসপাতলের নামঃ</label>
                       <br>
       <input type="text" name="name" class="form-control" placeholder="হাসপাতলের নাম" required >
   </div>

<br>

   <div class="forn-group">
       <label for="মোবাইল"> মোবাইলঃ</label>
                       <br>
       <input type="text"  name="phone" class="form-control" placeholder="যেমনঃ 01850-914896" required>
   </div>

<br>

   <div class="forn-group">
       <label for="email">ই-মেইলঃ</label>
                      <br>
       <input type="email"  name="email" class="form-control" placeholder="যেমনঃ mozahidhossain@gmail.com">
   </div>

<br>

   <div class="forn-group">
       <label for="nid">পরিচালকের নামঃ  </label>
                    <br>
       <input type="text"  name="pname" class="form-control" placeholder="পরিচালকের নাম" required>
   </div>

<br>

   <div class="forn-group">
       <label for="birthday">পরিচালকের মোবাইল নাম্বারঃ</label>
                     <br>
       <input type="text"  name="pphone" class="form-control" placeholder="পরিচালকের মোবাইল নাম্বার">
   </div>

<br>

   <div class="forn-group">
       <label for="blood">কত সনে প্রতিষ্ঠিতঃ   </label>
                <br>
       <input type="text"  name="esta" class="form-control" placeholder="কত সনে প্রতিষ্ঠিত">
   </div>

<br>

   <div class="forn-group">
       <label for="servic">বিশেষ কোন সেবা যা সচরাচর অন্যদের নাইঃ </label>
                     <br>
       <textarea type="text" name="make" rows="2"  class="form-control" placeholder="বিশেষ সেবাসমূহ  " required></textarea>
   </div>

<br>

   <div class="forn-group">
       <label for="ocopation"> প্রদেয় সেবাসমূহঃ  </label>
              <br>
       <textarea type="text" name="seba" rows="2"  class="form-control" placeholder="প্রদেয় সেবাসমূহ" required></textarea>
    </div>
 
<br>

   <div class="forn-group">
       <label for="education">ডকুমেন্টরী (যদি থাকে): </label>
                <br>
       <input type="text" name="docu"  class="form-control" placeholder="video">
   </div>

<br>

   <div class="forn-group">
       <label>যেসব ডাক্তার বসেনঃ</label>
             <br>
       <textarea type="text" name="doctor"  rows="2" class="form-control" placeholder="যেসব ডাক্তার বসেন" required> </textarea>
    </div>

    <hr>

            <strong style="margin-left: 20%;">ডাক্তার মেলা ডট কমের স্বাস্থ্যকর্মীর</strong>


   <div class="forn-group">
       <label>নামঃ</label>
                <br>
       <input type="text" name="dname"  class="form-control" placeholder="নাম">
   </div>

<br>

   <div class="forn-group">
       <label>আইডি নাম্বারঃ</label>
               <br>
       <input type="text" name="did"  class="form-control" placeholder="21567467">
   </div>

   <div class="forn-group">
       <label for="মোবাইল"> মোবাইলঃ</label>
               <br>
       <input type="text" name="dphone"  class="form-control" placeholder="01850-914896" required>
   </div>
   <br>


</div>

<br>


<div class="container ">
  <button type="submit" class="btn btn-primary" name="submit" id="submit"value="Submit" formnovalidate="formnovalidate">Submit</button>
</div>

<br>
</form>
</body>
</html>
    
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

$esta = $_REQUEST['esta'];

$make = $_REQUEST['make'];

$seba = $_REQUEST['seba'];

$docu = $_REQUEST['docu'];

$doctor = $_REQUEST['doctor'];

$dname = $_REQUEST['dname'];

$did = $_REQUEST['did'];

$dphone = $_REQUEST['dphone'];

if(!empty($image_name)){

    $loc = "hospital_pic/";

    move_uploaded_file($image_tmp_name,$loc.$image_name);
    

   }else{
       echo "your file is empty.";
   }


$con = mysqli_connect('localhost','root','','doctor_db');
if(!$con){
    die("Not connected." .mysqli_error());
}
$query = "INSERT INTO `hospital` (`image`, `name`, `phone`, `email`, `pname`, `pphone`, `esta`, `make`, `seba`, `docu`, `doctor`, `dname`, `did`, `dphone`) VALUES ('$image_name', '$name', '$phone', '$email', '$pname', '$pphone', '$esta', '$make', '$seba', '$docu', '$doctor', '$dname', '$did', '$dphone')";

$result = mysqli_query($con, $query);
if($result){
    echo "insert successfully.";
}
else{
    echo "not insert successfully.";
}

}
 ?>