<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>uLogout page</title>
  
</head>
<style>
h1,h2 
{
    text-align: center;
    font-size: 10cm;
}
#container 
{
    text-align: center;
    font-size:80px;
    padding: 30px;
    border-radius: 10px;
    margin: 20px;
}

.btn
{
    border: round;
font-family: "Roboto",sans-serif;
    font-style: italic;
    font-weight: bold;
    background-color:darksalmon;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    color: #fff;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: box-shadow, transform;
    transition-property: box-shadow, transform;
}


.btn:hover, .btn:focus, .btn:active
{
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    ;
}

</style>
<body style background="https://electricvehicles.in/wp-content/uploads/2021/03/Maharashtra-1.jpg;">
<?php include 'unavbar.php' ?>

    <div class="container">
    <h1><b> Thank you for using ev-charging center</b></h1>
    <h2><b> Visit Again</b></h2>
    <div id="container">
    <button name="logout" class="btn" type="submit" value="logout"  ><a href ="http://localhost/admin_side/home_page.php">Logout</button>       
   </div>
    <br>
        


    </div>
</body>