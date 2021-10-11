<?php 
$con = mysqli_connect('localhost','root','','doctor_db');
$query = "SELECT * FROM doctor_list";
$adanprodan = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>doctor list</title>
</head>
<body>
  <div class="">
    <h2> Doctor Information </h2>

    <table border="1px">
      <tr>
        <th>id</th>
        <td>id</td>
      </tr>

      <tr>
        <th>image</th>
        <td>pic</td>
      </tr>

      <tr>
        <th>name</th>
        <td>nam</td>
      </tr>

      <tr>
        <th>valo</th>
        <td>pic</td>
      </tr>
      <tr>
        <th>porasuna</th>
        <td>pic</td>
      </tr>

      <tr>
        <th>code</th>
        <td>pic</td>
      </tr>
    </table>
  </div>
</body>
</html>