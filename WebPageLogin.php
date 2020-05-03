<!DOCTYPE html>
<!--open session-->
<?php session_start();
 require_once "AccountFuncs.php"?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Member Login</title>
        <link href="StyleSheetforForm.css" rel="stylesheet" type="text/css"/>
        
    </head>
        
    <div style="margin: 20px; padding: 10px; ">
    
    <div class="row">
        <div class=" col-sm-12 text-center" style = "background-color:#FFCCCC; padding: 10px; font-family: 'Rubik', sans-serif;">
    
            <div class=" col-sm-12 text-center" style = "background-color: #EDEDED; font-family: 'Patua One', cursive;"> 
             <h3> M. A . R . J </h3>
            </div>   
        
        <p>
        Welcome to the library </p>
        </div>
       
        <div class=" col-sm-6 text-center  mx-auto margin rounded mx-auto d-block"  style = "background-color: #DCEDFF; margin: 50px; max-width: 500px; max-height: 400px;">
        <form action="" method="POST" style =" margin: 10px;" >
            <h2> Staff Login </h2>
             
            Library Area Code: <input  type="text"   name="name" class="form-control"  placeholder=" Area Code" autofocus/>
            User ID: <input  type="email"   name="email" class="form-control" />
            Password: <input  type="date"   name="birthdate" class="form-control"  />
            <br><br>
          
            <input  type="submit" value="OK" class="btn btn-light" style="height:50px; width:200px; "/>
           
        </form>
        </div>
    
    
        <div class=" col-sm-6 text-center mx-auto margin rounded mx-auto d-block " style = "background-color: #00BFB2; padding: 40px; margin: 50px;">
        <form name="myform" onsubmit="return validateForm()" action="" method="POST" style =" margin: 10px; " >
            <h2> Register Member </h2>
            First Name:<span style="color: red">*</span>
            <input required name="Firstname" type="text"  class="form-control" placeholder="First Name"/>
            Last Name:<span style="color: red">*</span>
            <input required name="Lastname" type="text" class="form-control"  placeholder="Last Name" />
            Email:<span style="color: red">*</span>
            <input required name="Email" type="email"   name="eMail" class="form-control" placeholder="Email" />
            Date of Birth: <input  type="date" class="form-control"  />
            Home Address:<span style="color: red">*</span>
            <input required name="Address" type="text"  class="form-control" placeholder="Current Address"   />
            Phone Number: <input  type="text"   name="phoneNum" class="form-control" placeholder="Contact Number"   />
                <br><br>
         
            <input class="form-check-input " type="checkbox" name ="gender"  value="female"/>
           Female:
            &nbsp;&nbsp; &nbsp; &nbsp;
            <input class="form-check-input" type="checkbox" name="gender" value="male"/>
            Male:
           <br><br>
          
            <input  type="submit" value="OK" class="btn btn-light" style="height:50px; width:200px; "/>
           
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
        
                if (!empty($firstName)&& !empty($lastName)&& !empty($eMail)&& !empty($dateOfBirth)&& !empty($homeAddress)
                   && !empty($phoneNum)){
              
                        $_SESSION["firstName"]=$firstName;
                        $_SESSION["lastName"]=$lastName;
                        $_SESSION["eMail"]=$eMail;
                        $_SESSION["dateOfBirth"]= $dateOfBirth;
                        $_SESSION["homeAddress"]= $homeAddress;
                        $_SESSION["phoneNum"]= $phoneNum;
                 
                        $foundAcc = (checkForAccount() > 0);
                        if (!$foundAcc){
                          setupAccount();
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