<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AFirst page</title>
  
</head>
<style>
  .mainpage{

    background-color:grey;
    padding: 0 0;
    padding-bottom: 20%;
  }
  
  label{
    
    width:120px;
    height: 20px;
    display: inline-block;
    border-radius: 40px;
    margin-left:10px;
    font-size: 20px;

  }


input
{
 width: 269px;
 height: 30px;
 border: black 2px;
 font-size: x-large;
 
  }

#Firstpage
{
  text-align: center;
  font-size:medium;
  letter-spacing: 0.5px;
}

 .btn{  
    color:black;
     justify-content: center;
      outline:5px black;
      border: 3px solid black;
      border-radius:50px;
      height: 50px;
      width: 80px;
      font-weight: bold;
      outline: black;
      font-size: 50px;
     
 }

</style>
<body >
  <div class ="mainpage">
    
    <?php include 'aNavbar.php'?>
    <br>
        <h2 style="text-align:center;text-decoration:underline;"><b>EV RECHARGE SERVICE<b></h2>
        <br>
      <hr>
      <h3 style="text-align:center;text-decoration:underline;"> <b> Create EV Bunk  </b></h3>
      <br>
      <br>
      
      <div id="Firstpage">
      <form method="POST">
  <div class ="form">
        <label for="location" >LOCATION</label>
        <input type="text" id="location" name="location"required size=23 >
        <br>
        <br>
        <br>
        <label for="slot_id" >SLOT ID</label>
        <input type="text" id="slot_id" name="slot_id"required size=23>
        <br>
        <br>
        <label for="no_of_slots">NO OF SLOTS</label>
        <input type="text"  id="no_of_slots" name="no_of_slots" required size=23>
        <br>
        <br>
        <label for="mobile_no">MOBILE NUMBER</label>
        <input type="text"  id="mobile_no" name="mobile_no"required  size=23 maxlength="12" >
        <br>
        <br>
        <label for="slot_capacity">SLOT CAPACITY</label>
        <input type="text" id="slot_capacity" name="slot_capacity"required size=23>
        <br>
        <br> 
        <label for="min_time_to_charge">MIN TIME TO CHARGE</label>
        <input type="text"  id="min_time_to_charge" name="min_time_to_charge"required  size=23 >
        <br>
        <br>
        <br>
        <div class="input_feild">
        <input type="submit"  name="insert"  class ="btn" value="Add slot">
        </div>
        <br>
        <br>
</div>
        </form>
     </div>
</div>
     

     <?php
      if(isset($_POST['insert']))
       {
         $hostname = "localhost";
         $username = "root";
         $password = "";
         $databaseName = "user_db";


         $location = $_POST['location'];
         $slot_id= $_POST['slot_id'];
         $no_of_slots= $_POST['no_of_slots'];
         $mobile_no= $_POST['mobile_no'];
         $slot_capacity= $_POST['slot_capacity'];
         $min_time_to_charge= $_POST['min_time_to_charge'];

         $connect = mysqli_connect($hostname, $username, $password, $databaseName);

         if($location !="" && $slot_id !="" && $no_of_slots !="" && $mobile_no !="" &&  $slot_capacity !="" &&  $min_time_to_charge !="")
         {
          $query = "INSERT INTO afirstpage ( location, slot_id, no_of_slots, mobile_no, slot_capacity, min_time_to_charge) VALUES ('$location',' $slot_id','$no_of_slots','$mobile_no',' $slot_capacity','$min_time_to_charge')";
          $result = mysqli_query($connect,$query);

          if ($result)
         {
           echo"data enter succesfully";
         }
   
         else
        {
          echo"failed";
        }

      }
      else

      {
        echo"<script>alert(' please fill the details');</script>";
      }
        
    }

     ?>
     </body>
</html>