<?php
require "Login_function.php";   
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Raleway&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap');
           
            body {font-family: 'Raleway', sans-serif;
                  font-size: 40px }
            form {font-family: 'Work Sans', sans-serif;
                  font-size: 28px;padding-left:10px}
              #yes:hover {opacity:0.5;}          
        </style>
         <title>HTTP POST</title>
    </head>
    <body>
              <div class="container-fluid "style=" margin: 5px; padding: 40px;" >     
           
    <div class="row justify-content-center">
        
       <div class=" col-md-12 text-center" style = "font-family: 'Patua One', cursive;"> 
           <h3>Welcome to our Library </h3>
        </div>   
        
        <div class=" col-sm-12 text-center" style = "background-color:white; margin: 5px">
           </div>
        
     <div  class="row container-fluid" >
               <div id="yes"  class=" col-md-8 text-center rounded" style = "background-color: #D0F4DE; font-family: 'Raleway', cursive; font-size: 28px;
                   cursor: pointer;" onclick="window.location = 'https://www.w3schools.com'">
                   GO TO HOME PAGE  </div>                       <!-----add your link here-->
          
          
          
         <div class=" col-xs-1 text-center" style = "background-color:white; margin: 5px">
           </div>
        
               <div id="yes"  class=" col-md-3 text-center rounded" style = "background-color:#FFFEC7; font-family: 'Raleway', cursive; font-size: 28px;
                   cursor: pointer;" onclick="window.location = 'https://www.w3schools.com'">
                   REGISTER </div>                            <!-----add your link here-->
          
          
          
         </div>
        <div class=" col-sm-12 text-center" style = "background-color:white; margin: 5px">
           </div>
        
        
        
            <div class=" col-lg-5 text-center rounded " style = "background-color: #C1E0F7;  border-radius: 10px;" > 
                <br>
                <h2 class="text-justify" style="padding-left:10px"> STAFF LOGIN </h2>
              <hr style="height:2px;border-width:0;color:gray;background-color:white">
         <form action="" method="POST" style =" margin: 10px; padding: 40px;" >
           STAFF ID <input  type="text"   name="staffId" class="form-control form-control-lg" />
           <br>
            PASSWORD <input  type="text"   name="spassword" class="form-control form-control-lg" />
            <br><br>
            <input  type="submit" name="s_enter" value="LOGIN" class="btn btn-light" style="height:50px; width:200px;  font-size: 20px"/>
        </form>
            </div>
        
         <div class=" col-lg-1 text-center" style = "background-color:white; margin: 5px">
           </div>
         
        
        <div class=" col-lg-5 text-center rounded" style = "background-color: #DCEDFF;  border-radius: 10px;">
            <br>
                 <h2 class="text-justify" style="padding-left:10px "> SIGN IN </h2>
                <hr style="height:2px;border-width:0;color:gray;background-color:white">
        <form action="" method="POST" style =" margin: 10px; padding: 40px;" >
            LIBRARY CARD NUMBER <input  type="text"   name="libcard" class="form-control form-control-lg" placeholder="LC" autofocus/>
                <br>
            PASSWORD <input  type="text"   name="apassword" class="form-control form-control-lg" />
            <br><br>
         
            <input  type="submit" name ="a_enter" value="LOGIN" class="btn btn-light " style="height:50px; width:200px; font-size: 20px;"/>
           
        </form>
        </div>
            
            <?php
            
             ?>
         
       </div>
        
        </div>
       
        
            
      
    </body>
   
</html>