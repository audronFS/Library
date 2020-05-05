<!DOCTYPE html>
<!--open session-->
<?php session_start();
 require_once "AccountFuncs.php";
 use function Library\checkForAccount;
 use function Library\setUpAccount;?>
 


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Member Register</title>
        <link href="JsStyle.css" rel="stylesheet" type="text/css"/>
        <style>
              @import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap');
              @import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap');
        body {font-family: 'Raleway', sans-serif;
                  font-size: 40px }
        form {font-family: 'Work Sans', sans-serif;
                  font-size: 28px;padding-left:10px}
              #yes:hover {opacity:0.5;} 
              .font{font-size: 20px;
                    font-weight:bold;
              color: white;}
        </style> 
    </head>
        
    <div style="margin: 20px; padding: 10px;"> 
    <div class="row" >
        
 <!--       <div class=" col-sm-6 text-center  mx-auto margin rounded mx-auto d-block"  style = "background-color: #DCEDFF; margin: 50px; max-width: 500px; max-height: 400px;">
        <form action="" method="POST" style =" margin: 10px;" >
            <h2> Register Staff Member </h2>
             
            Library Area Code: <input  type="text"   name="name" class="form-control"  placeholder=" Area Code" autofocus/>
            User ID: <input  type="email"   name="email" class="form-control" />
            Password: <input  type="date"   name="birthdate" class="form-control"  />
            <br><br>
          
            <input  type="submit" value="OK" class="btn btn-light" style="height:50px; width:200px; "/>
           
        </form>
        </div>-->
 
        <div  class="row container-fluid" >   
           <div id="yes"  class=" col-md-4 text-center rounded" style = "background-color: #FFCCCC; font-family: 'Raleway', cursive; font-size: 28px;
                   cursor: pointer; margin:20px" onclick="window.location = 'loginPage.php'">
                  <- GO BACK TO LOGIN PAGE </div> 
            <div class=" col-md-6 text-center" style = "background-color:white; margin: 5px">  
            </div>
         </div>
    
        <div class=" col-sm-6 text-center mx-auto margin rounded mx-auto d-block " style = " background-color:#EDEDED; margin: 50px;">
        <form action="" method="POST" style =" margin: 10px;"  >
            <h2> REGISTER ACCOUNT </h2>
             <hr style="height:2px;border-width:0;color:gray;background-color:white">
            <br>
            <div class="form-inline form-group justify-content-center">
               <label for="FIRSTname" >Name</label>
                     <input  type="text"  id="FIRSTname"  name="firstName" class="form-control form-control-lg mb-2 mr-sm-2 "  style =" margin-left:10px;" placeholder="First Name" autofocus required/>
                 <label for="LASTname">Surname</label>
                    <input  type="text" id="LASTname"  name="lastName" class=" form-control form-control-lg mb-2 mr-sm-2" style =" margin-left:10px;" placeholder="Last Name" required/>
                </div>
               
            

          <div class="form-group row">
                 <label for="inputEmail" class="col-sm-4 col-form-label" style="padding:10px">Email</label>
                  <div class="col-sm-8" style="padding:10px">
                   <input type="email" id="inputEmail"  name="eMail" class="form-control form-control-lg col-sm-8 col-form-label" placeholder="Email" required/>
                     </div>
                        <label for="birth" class="col-sm-4 col-form-label" style="padding:10px" >Date of Birth</label>
                         <div class="col-sm-8" style="padding:10px">
                          <input  type="date" id="birth"  name="dateOfBirth" class="form-control form-control-lg col-sm-5 col-form-label"  required/>
                           </div>
                  <label for="inputAdress" class="col-sm-4 col-form-label" style="padding:10px">Home Address</label>
                     <div class="col-sm-8" style="padding:10px">
                      <input  type="text"  id="inputAdress" name="homeAddress" class="form-control form-control-lg col-sm-8 col-form-label" placeholder="Current Address"   required/>
                       </div>
                       <label for="numb" class="col-sm-4 col-form-label" style="padding:10px">Phone Number</label>
                         <div class="col-sm-8" style="padding:10px">
                          <input  type="text"  id="numb" name="phoneNum" class="form-control form-control-lg col-sm-8 col-form-label" placeholder="Contact Number"  required />
                          </div>
          </div>
            
            <div class="form-inline form-group justify-content-center">
               <label for="pw" style =" margin-left:10px;" >Account Password</label>
                     <input  type="text"  id="pw"  name="password" class="form-control form-control-lg mb-2 mr-sm-2 "  style =" margin-left:10px;" placeholder="password" autofocus required/>
       
                     <br>
                     <br>
                     <br>
            
                <input  type="submit" value="REGISTER" class="col-sm-8 btn btn-success font" name ="submitbutton" 
                    style="height:50px; width:200px;  "/>
                
                    </div>
            
                </form> 
                </div>
            </div> 
   
    </div>
  
        <?php
        
            if (!empty($_POST)){
                $firstName = filter_input(INPUT_POST,'firstName',FILTER_SANITIZE_STRING);
                $lastName = filter_input(INPUT_POST,'lastName',FILTER_SANITIZE_STRING);
                $eMail = filter_input(INPUT_POST,'eMail',FILTER_SANITIZE_EMAIL);
                $dateOfBirth = filter_input(INPUT_POST,'dateOfBirth',FILTER_SANITIZE_STRING);
                $homeAddress = filter_input(INPUT_POST,'homeAddress',FILTER_SANITIZE_STRING);
                $phoneNum = filter_input(INPUT_POST,'phoneNum',FILTER_SANITIZE_STRING);
                $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
        
                if (isset($_POST["submitbutton"])){
              
                        $_SESSION["firstName"]=$firstName;
                        $_SESSION["lastName"]=$lastName;
                        $_SESSION["eMail"]=$eMail;
                        $_SESSION["dateOfBirth"]= $dateOfBirth;
                        $_SESSION["homeAddress"]= $homeAddress;
                        $_SESSION["phoneNum"]= $phoneNum;
                        $_SESSION["password"] = $password;
                 
                        $foundAcc = (checkForAccount() > 0);
                        //need to set staff member up - but not coded yet so I'll set to false
                        $staffmember = FALSE;
                        if (!$foundAcc){
                          setupAccount($staffmember);
                        }
                        

                }else {
                    echo "You have not entered all user data required for a valid session.<br>";
                    echo "Generate exception with an error message box and allow user to resubmit";
                }
            }
            if(!empty($_SESSION)){
                unset($_SESSION["firstName"]);
                unset($_SESSION["lastName"]);
                unset($_SESSION["eMail"]);
                unset($_SESSION["dateOfBirth"]);
                unset($_SESSION["homeAddress"]);
                unset($_SESSION["phoneNum"]);
            }
            session_destroy();
        ?>
    </body>
</html>
