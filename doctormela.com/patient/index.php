<?php 
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>FILTERS</title>
<style type="text/css">
    body {
        margin: 0;
        padding: 0;
        font-family: "Helvetica",sans-serif;
    }
    #filters{
        margin-left: 10%;
        margin-top: 2%;
        margin-bottom: 2%;

    }
    </style>
</head>
<body>
    <div id = "filters">
    <span>Fetch results by &nbsp;</span>
        <select name="fetchval" id="fetchval">
            <option value="" disabled="" selected="">select filter</option>
            <option value="rasel" >rasel</option>
            <option value="rakib" >rakib</option>
            <option value="sakib" >sakib</option>
            <option value="sadin" >sadin</option>
</select>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>sr no</th>
                <th>Username</th>
                <th>Date</th>
                <th>Post Title</th>
                <th>Post Image</th>
            </tr>
        </thead>
         <tbody>

         <?php 
             $query = "SELECT * FROM post";
             $r = mysqli_query($con,$query);
             while($row = mysqli_fetch_assoc($r)){

             
         ?>
            <tr>
                <td><?php  echo $row['p_no']?></td>
                <td><?php  echo $row['p_username']?></td>
                <td><?php  echo $row['p_tmg']?></td>
                <td><?php  echo $row['p_title']?></td>
                <td><img src="patient_pic/<?php  echo $row['p_img']?>" class="img-responsive img-thumbnail" width="150"></td>
            </tr>

            <?php 
                }
            ?>
         </tbody>
    </table>
</div>
            
    <script type="text/javascript">
        $(document).ready(function(){
            $("#fetchval").on('change',function(){
                var value = $(this).val();
                //alert(value);

                $.ajax({
                    url:"fetch.php",
                    type:"POST",
                    data: 'request=' + value;

                    beforeSend:function(){
                        $(".container").html("<span>Working....</span>");
                    },
                    success:function(data){
                        $(".container").html(data);
                    }
                });
            });
        });
    </script>
    
</body>
</html>