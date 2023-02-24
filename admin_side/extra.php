<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> ufirst page</title>
  <script src="js/emp.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<style>


  .final{

background-color:grey;
padding-bottom: 20%;


}
.container{

box-sizing: border-box;
}




.buttons 
{
width: 200px;
margin: 0 auto;
display: inline; 
border: none;
}

.action_btn
{
  text-align: center;
width: 200px;
margin: 0 auto;

}


.main{
 
  font-size: larger;
  font-weight: 20%;
  text-align: center;
}

#secondpage
{
  text-align: center;
  font-size:medium;
  letter-spacing: 0.5px;
}



</style>
<body>  
<div class="final">

    <?php include 'unavbar.php'?>
<?php

     $hostname = "localhost";
     $username = "root";
     $password = "";
     $databaseName = "user_db";
       
     function dbcon(){
      $con = mysqli_connect('localhost', 'root', "", 'user_db');
      return  $con;
     }


     $con= dbcon();
     $sql="select location from afirstpage";
     $result = mysqli_query($con,$sql);  

?>
    <div class="container">
    <br><br>
    
        <h2 style="text-align:center;text-decoration:underline;"><b>EV RECHARGE SERVICE<b></h2>
        <br>
     
        <br>
        <h3 style="text-align:center;text-decoration:underline;"> <b>Search Bunk</b></h3>
        <br>
        <br>
    
        <div class="main">
        <form action="<?php htmlentities($_SERVER['PHP_SELF']) ?>"
        method="POST">
        <label for="bunklocation"> CHOOSE BUNK LOCATION:</label>

        <select name="location" id="location" required onchange="fetchemp()">
        <option value="none" selected disabled hidden></option>
      
        
           <?php

         while ($rows = mysqli_fetch_array($result))
         {
           $k=$rows['location'];
          echo'<option value=" '.$k. '">'.$k.'</option>';
         }

           ?>
           <br>
           <br>
           <br>
           <br>
    </select>
        <br>
        <br><br>
</div>





 <div id = secondpage>
    <form method="POST">
      <div class ="form">
      <label for="location" >LOCATION</label>
        <input type="text" id="location" name="location" >
        <br>
        <br>

        <label for="slot_id" >SLOT ID</label>
        <input type="text" id="slot_id" name="slot_id">
        <br>
        
        <br>
        <label for="slots">SlOT AVAILABILITY</label>
        <input type="text"  id="slots" name="slots">
        <br>
        <br>
        <label for="required_slots">Enter Required No Of Slots</label>
        <input type="text"  id="required_slots" name="required_slots">
        <br>

     
       
</div>
        </div>
     </body>
     </html>