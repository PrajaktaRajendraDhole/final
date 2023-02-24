<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search slot page</title>
  
</head>
<style>
.container
{
background-color:grey;
height:70x;
width: 100%;
}


.MainPage
{
  background-color:grey;
}


.Search_slot
{
  text-align: center;
  font-size:large;
  letter-spacing: 0.5px;
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
width: 200px;
margin: 0 auto;
display: inline;
}



</style>
<body>
    

       <div class="container">
        <h2 style="text-align:center;text-decoration:underline;"><b>EV RECHARGE SERVICE<b></h2>
        <br>
    
      <div class=MainPage>
      <br>
      <h3 style="text-align:center;text-decoration:underline;"> <b>Search Slot </b></h3>
     
      <br>
      <br>
      
      <div class=Search_slot>
        <label for="bunklocation" >BUNK LOCATION</label>
        <input type="text" id="bunklocation" name="bunklocation">
        <br>
        
        <br>
        <label for="mobile_no">MOBILE NUMBER</label>
        <input type="text"  id="mobile_no" name="mobile_no">
        <br>
        
       
        <br>
        <br>
        <div class="buttons">

<div class="action_btn">


<button name="Search" class="action_btn cancel" type="submit" value="Cancel" onclick="myFunction2()">Search</button>

<p id="saved"></p>

</div>
         <br>
        <br>
    
     </div>
     </div>
     </div>
     </body>