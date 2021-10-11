<style>
    th, td, table{
        text-align: center;
        margin: 0px auto;
        border-bottom: 2px solid black;
  border-collapse: collapse;
  font-size: 130%;
  padding: 10px 20px;
    }
    th{
        background-color: black;
        color: white;
        padding: 10px 20px;
    }


</style>
<?php 


$con = mysqli_connect('localhost','root','','doctor_db');
if(!$con){
    die("Not connected." .mysqli_error());
}
$query = "SELECT * FROM hospital";
 $adanprodan = mysqli_query($con,$query);

 $count = mysqli_num_rows($adanprodan);

 if($count > 0){

  ?> 
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>IMAGE</th>
                    <th>NAME</th>
                    <th>SEBA</th>
                     
                </tr>
            </thead>

  
  <?php 

    while( $row = mysqli_fetch_assoc($adanprodan)){

       $id = $row['ID'];
       $image = $row['image'];
       $name = $row['name'];
       $seba = $row['seba'];
?>
    <tbody>
        <tr>
            <td><?php echo $id; ?></td>
            <td><img width ="50px" src="hospital_pic/<?php echo $image; ?>"></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $seba; ?></td>
            
            
        </tr>
    </tbody>
<?php 
    }
?>
</table>  
<?php
    
 }
 else{
     echo "you don't have any data in your database";
 }



?>