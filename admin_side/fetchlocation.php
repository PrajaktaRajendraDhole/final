<?php

function dbcon(){
    $con = mysqli_connect('localhost', 'root', "", 'user_db');
    return  $con;
   }


   $con= dbcon();
   $k=$_POST["x"];
   $sql="select * from afirstpage where id ={$k}";
   $result = mysqli_query($con,$sql);
   while($rows = mysqli_fetch_array($result))
    {

     $data['name1']=$rows["location"];
     $data['name2']=$rows["slot_id"];
     $data['name3']=$rows["no_of_slots"];


   }
    
echo json_encode($data);


?>