<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="responsivedoctorid.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor's registration form</title>
</head>
<body>
<form action="doctor.php" method="post" enctype="multipart/form-data">

       <div class="container-fluid text-center bg-dark">
            <h1>ডাক্তারের আইডি / Registration Form </h1>
        </div> 


        <div class="container" style="background-color: rgba(16, 95, 95, 0.671);border: 3px solid rgba(218, 12, 12, 0.829);">
  

  
<div class="form-group">
    <label for="image">ছবিঃ</label>
    <br>
    <input type="file" id="i" name="image" class="from-control" >

  </div>

<div class="form-group">
    <label for="name">নামঃ</label>
     <br>
    <input type="text" id="i" name="pname" class="from-control" placeholder="....আপনার নাম....">
</div>

<div class="form-group">
    <label for="মোবাইল"> মোবাইলঃ</label><br>
    <input type="text"id="i" name="phone" placeholder="যেমনঃ 01850-914896"class="from-control">
</div>

<div class="form-group">
     <label for="email">ই-মেইলঃ</label><br>
     <input type="email"class="from-control" id="i" name="pemail" placeholder="যেমনঃ mozahidhossain@mgail.com">
</div>

<div class="form-group">
      <label for="nid">এন আইডিঃ </label><br>
      <input type="text"class="from-control" id="i" name="pnid" placeholder="যেমনঃ 6113115921358">
</div>

<div class="form-group">
      <label for="birthday">জন্ম তারিখঃ</label><br>
      <input type="text" id="i" name="pdate" class="from-control">
</div>

<div class="form-group">
      <label for="blood">ব্লাড গ্রুপঃ </label><br>
      <input type="text"class="from-control" id="i" name="group" placeholder="...A+...">
</div>

<div class="form-group">
      <label for="catagory" >কেমন ডাক্তারঃ </label><br>
    <select id="z" name="valo" class="custom-select mb-3">
      <option selected>কেমন ডাক্তার </option>
      <option value="এ্যালোপ্যাথি">এ্যালোপ্যাথি</option>
      <option value="হোমিওপ্যাথি">হোমিওপ্যাথি</option>
      <option value="আর্য়ুবেদ">আর্য়ুবেদ</option>
      <option value="ইউনানী">ইউনানী</option>

    </select>
</div>

<div class="form-group">
      <label for="education">পড়াশোনা/ট্রেনিং/যোগ্যতাঃ</label><br>
      <textarea type="text"class="from-control" id="i" name="porasuna" rows="2" placeholder="MBBS/FCPS"></textarea>
</div>

<div class="form-group">
      <label for="govt.code"> সরকারি কোডঃ </label><br>
      <input type="text" id="i" name="code" placeholder="018386" class="from-control"> 
</div> 

<div class="form-group">
      <label for="currentworkplace">বর্তমান কর্মস্থলঃ</label><br>
      <input type="text" id="i"name="bortoman"  placeholder="বর্তমান কর্মস্থল"class="from-control">
</div>
<div class="form-group">
      <label for="chamber">কোথায় কোথায় বসেন / চেম্বারঃ</label><br>
      <textarea type="text" name="bosa" id="i"placeholder="চেম্বারসমূহ " rows="2" class="from-control"></textarea>
</div>

<div class="form-group">
      <label for="bio">বায়োগ্রাফিঃ </label><br>
      <input type="text" name="bio" id="i" class="from-control" >
</div>

<div class="form-group">
      <label>স্থায়ী ঠিকানাঃ</label><br>
      <input type="text" id="i" name="tikana" class="from-control" placeholder="স্থায়ী ঠিকানা">
</div>

<div class="form-group">
      <label>বর্তমান ঠিকানাঃ</label><br>
      <input type="text" id="i" name= "btikana" class="from-control" placeholder="বর্তমান ঠিকানা ">
</div>


</div>

<br>

<div class="container ">
  <input type="submit" class="btn btn-primary" name="submit" id="submit"value="Submit"></input>
</div>

<br>
</div>
</form>


</body>
</html>

<?php 
   
   if(isset($_REQUEST['submit'])){

       $pic = $_FILES['image'];

       $image_name =  $pic['name'];
       $tmp_name = $pic['tmp_name'];

        $pname = $_REQUEST['pname'];

        $phone = $_REQUEST['phone'];

       $pemail = $_REQUEST['pemail'];

       $pnid = $_REQUEST['pnid'];

       $pdate = $_REQUEST['pdate'];

       $group = $_REQUEST['group'];

       $valo = $_REQUEST['valo'];

       $porasuna = $_REQUEST['porasuna'];

       $code = $_REQUEST['code'];

       $bortoman = $_REQUEST['bortoman'];

       $bosa = $_REQUEST['bosa'];

       $bio = $_REQUEST['bio'];

       $tikana = $_REQUEST['tikana'];

       $btikana = $_REQUEST['btikana'];

      
       

       if(!empty($image_name)){

        $loc = "doctor_pic/";

        move_uploaded_file($tmp_name,$loc.$image_name);
        

       }else{
           echo "your file is empty.";
       }

    

         $connection = mysqli_connect('localhost','root','','doctor_db');

    if(!$connection){
       
        die("Not conected.". mysqli_error());
    }

        $query = "INSERT INTO `doctor_list` (`image`, `pname`, `phone`, `pemail`, `pnid`, `pdate`, `blood`, `valo`, `porasuna`, `code`, `bortoman`, `bosa`, `bio`, `tikana`, `btikana`) ";
        $query .= "VALUES ('$image_name', '$pname', '$phone', '$pemail', '$pnid', '$pdate', '$group','$valo', '$porasuna', '$code', '$bortoman', '$bosa', '$bio', '$tikana', '$btikana')";
       
        
        
 
    

        $result = mysqli_query($connection,$query);

        if($result){
            echo "Insert successfully";
        }else{
            echo "NOt insert successfully";
        }

       

   }



?>