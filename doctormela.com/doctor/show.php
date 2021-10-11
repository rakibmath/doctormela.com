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
                    <th>ID</th>
                    <th>IMAGE</th>
                    <th>Doctor Name</th>
                    
                    <th>Speshalist</th>
                    <th>study</th>
                    <th>Govt Code</th>
                    
                    <th>chamber list</th>
                    <th>Serial</th>
                     
                </tr>
            </thead>

  
  <?php 

    while( $row = mysqli_fetch_assoc($adanprodan)){

       $id = $row['ID'];
       $image = $row['image'];
       $name = $row['pname'];
       $valo = $row['valo'];
       $porasuna = $row['porasuna'];
       $code = $row['code'];
       $bosa = $row['bosa'];
?>
    <tbody>
        <tr>
            <td><?php echo $id; ?></td>
            <td><img width ="50px" src="doctor_pic/<?php echo $image; ?>"></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $valo; ?></td>
            <td><?php echo $porasuna; ?></td>
            <td><?php echo $code; ?></td>
            <td><?php echo $bosa; ?></td>
            <td>01984381362</td>
           
            
            
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