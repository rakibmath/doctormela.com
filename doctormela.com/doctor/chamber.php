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
$query = "SELECT * FROM doctor_list";
 $adanprodan = mysqli_query($con,$query);

 $count = mysqli_num_rows($adanprodan);

 if($count > 0){

  ?> 
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Chamber</th>
                    <th>Number</th>
                     
                </tr>
            </thead>

  
  <?php 

    while( $row = mysqli_fetch_assoc($adanprodan)){

     
       $chamber = $row['bosa'];
       $number = $row['number'];
?>
    <tbody>
        <tr>

            <td><?php echo $chamber; ?></td>
            <td><?php echo $number; ?></td>
           
            
            
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