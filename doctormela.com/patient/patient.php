<!DOCTYPE html>
<html lang="en">
 <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="responsivepatient'sid.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient's registation</title>
</head>
<body>
  
<form action="patient.php" method="post" enctype="multipart/form-data">

<div class="container-fluid text-center bg-dark">
          <h1>রোগীর আইডি খোলার ফর্ম</h1>
</div>
    
<div class="container" style="background-color: rgba(16, 95, 95, 0.671);border: 3px solid rgba(218, 12, 12, 0.829);">


<div class="forn-group">
      <label for="image">ছবিঃ</label>
          <br>
      <input type="file" id="i" name="image" class="form-control" >
</div>
<br>

<div class="forn-group">
<label for="name">নামঃ</label>
<br>
<input type="text"class="form-control" id="i" name="pname" placeholder="....আপনার নাম....">
</div>
<br>

<div class="forn-group">
<label for="মোবাইল"> মোবাইলঃ</label>
<br>
<input type="text" class="form-control" id="i" name="pphone" placeholder="যেমনঃ 01850-914896">
</div>
<br>

<div class="forn-group">
<label for="email">ই-মেইলঃ</label>
<br>
<input type="email"class="form-control" id="i" name="pemail" placeholder="যেমনঃ mozahidhossain@gmail.com">
</div>
<br>

<div class="forn-group">
<label for="nid">এন আইডিঃ </label>
<br>
<input type="text"class="form-control"id="i" name="pnid" placeholder="যেমনঃ 6113115921358">
</div>
<br>

<div class="forn-group">
<label for="birthday">জন্ম তারিখঃ</label>
<br>
<input type="date" id="i" name="pbirth" class="form-control">
</div>
<br>

<div class="forn-group">
<label for="blood">ব্লাড গ্রুপঃ </label>
<br>
<select name="pblood" id="z" class="custom-select mb-3">
      <option selected value="A+"> A+ </option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+"> AB+ </option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select><br><br>
</div>

<strong style= "margin-left: 65px;">রোগীর / গার্ডিয়ানের -</strong>
<div class="form-check">
      <input type="checkbox" class="form-check-input" id="checkbox" >
      <label class="form-check-label" id="m">স্থায়ী সমস্যা</label>
</div>

 <div class="form-check" name="prblem">
      <input type="checkbox" class="form-check-input" id="checkbox">
      <label class="form-check-label" id="m">বর্তমান সমস্যা</label>
</div>
<br>

<div class="forn-group">
    <label for="ocopation"> পেশাঃ </label>
    <br>
 <select id="z" name="ppesha"  class="custom-select mb3">
    <option value="ব্যাবসা ">ব্যাবসা</option>
    <option value="চাকরি">চাকরি</option>
    <option value="কৃষি">কৃষি</option>
    <option value=" গার্মেন্ট কর্মী">গার্মেন্ট কর্মী</option>
    <option value="গৃহিনী">গৃহিনী</option>
    <option value=" দিন মজুর">দিন মজুর</option>
    <option value="মুক্তিযোদ্ধা">মুক্তিযোদ্ধা</option>
    <option value=" প্রতিবন্ধী">প্রতিবন্ধী</option>
    <option value="অতি দরিদ্র">অতি দরিদ্র</option>
 </select>
</div>
<br>
<div class="forn-group">
    <label for="education">রোগীর ইতিহাসঃ </label>
      <br>
    <textarea id="i" name="phistory" type="text"class="form-control" rows="2" placeholder="রোগীর সমস্যা বিষয়ক সকল তথ্য "></textarea>
</div>
<br>

<div class="forn-group">
    <label>স্থায়ী ঠিকানাঃ</label>
  <br>
    <input type="text"id="i" name="tikana" class="form-control"placeholder="স্থায়ী ঠিকানা">
 </div>   
<br>

 <div class="forn-group">
    <label>বর্তমান ঠিকানাঃ</label>
 <br>
    <input type="text" id="i" name=" btikana" class="form-control" placeholder="বর্তমান ঠিকানা">
</div>
    <hr>
    
    <strong style="margin-left: 30%;">পরিচয়দানকারীর (যার ডক্টরমেলা ডট কমে একাউন্ড আছে) </strong>
<br><br>
<div class="forn-group">
    <label>নামঃ</label>
  <br>
    <input type="text" id="i" name="dname" class="form-control" placeholder="নাম">
</div>
<br>

<div class="forn-group">
    <label>আইডি নাম্বারঃ</label>
  <br>
    <input type="text" id="i" name="did" class="form-control" placeholder="যেমনঃ 21567467">
</div>
<br>

<div class="forn-group">
    <label for="মোবাইল"> মোবাইলঃ</label>
<br>
<input type="text" id="i" name="dphone" class="form-control" placeholder="যেমনঃ 01850-914896"><br><br>
</div>




</div>
<br>
<div class="container ">
  <input type="submit" class="btn btn-primary" id="submit" value="Submit" name="submit"></button>
</div>
<br>  
</form>

</body>
</html>
<?php 
   
   if(isset($_REQUEST['submit'])){


    $pic = $_FILES['image'];

    $image_name =  $pic['name'];
    $image_tmp_name = $pic['tmp_name'];

      

        $pname = $_REQUEST['pname'];

        $phone = $_REQUEST['pphone'];

       $pemail = $_REQUEST['pemail'];

       $pnid = $_REQUEST['pnid'];

       $pdate = $_REQUEST['pbirth'];

       $pblood = $_REQUEST['pblood'];


       $ppesha = $_REQUEST['ppesha'];

       $phistory = $_REQUEST['phistory'];
       $tikana = $_REQUEST['tikana'];

       $btikana = $_REQUEST['btikana'];

       $dname = $_REQUEST['dname'];
       $did = $_REQUEST['did'];
       $dphone = $_REQUEST['dphone'];
       

       if(!empty($image_name)){

        $loc = "patient_pic/";
    
        move_uploaded_file($image_tmp_name,$loc.$image_name);
        
    
       }else{
           echo "your file is empty.";
       }
      

    

         $con = mysqli_connect('localhost','root','','patient');

    if(!$con){
        die("Not conected.". mysqli_error());
    }
$query = "INSERT INTO `patients` (`image`, `pname`, `phone`, `pemail`, `pnid`, `dob`, `pblood`, `ppesha`, `phistory`, `tikana`, `btikana`, `dname`, `did`, `dphone`) VALUES ('$image_name', '$pname', '$phone', '$pemail', '$pnid', '$pdate', '$pblood', '$ppesha', '$phistory', '$tikana', '$btikana', '$dname', '$did', '$dphone')";

$result = mysqli_query($con,$query);

        if($result){
            echo "Insert successfully";
           
        }else{
            echo "Not insert successfully";
        }

       

   }



?>
