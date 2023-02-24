<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> ufirst page</title>
  <script   src="js/emp.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<style>


  .final{

background-color:grey;
padding-bottom: 40%;


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



</style>
<body>  
<div class="final">

    <?php include 'unavbar.php'?>
<?php

     $hostname = "localhost";
     $username = "root";
     $password = "";
     $databaseName = "user_db";
     
      
     $connect = mysqli_connect($hostname, $username, $password, $databaseName);
     if(!$connect){
      echo"failed";
     }
     $query = "select * from afirstpage";
          $run= mysqli_query($connect,$query);

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

         while ($data = mysqli_fetch_array($run))
         {

          echo"<option value='$data[1]'>$data[1] </option> ";
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

<div class="buttons">

<div class="action_btn">
<button name="Search" class="action_btn submit" type="submit" value="cancle" onclick="myFunction()" ><a href ="http://localhost/admin_side/usecondpage.php">BOOK SLOT</button>

</div>
  <br>
 </div>

     
       
</div>
        </div>
     </body>
     </html>