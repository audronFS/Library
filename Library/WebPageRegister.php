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
        <link href="StyleSheetforForm.css" rel="stylesheet" type="text/css"/>
        
    </head>
        
    <div style="margin: 20px; padding: 10px; ">
    
    <div class="row">
        <div class=" col-sm-12 text-center" style = "background-color:#FFCCCC; padding: 10px; font-family: 'Rubik', sans-serif;">
    
            <div class=" col-sm-12 text-center" style = "background-color: #EDEDED; font-family: 'Patua One', cursive;"> 
             <h3> LIBRARY REGISTRATION </h3>
            </div>   
        </div>
       
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
    
    
        <div class=" col-sm-6 text-center mx-auto margin rounded mx-auto d-block " style = "background-color: #DCEDFF ; padding: 40px; margin: 50px;">
        <form action="" method="POST" style =" margin: 10px; " >
            <h2> Create Account </h2>
                    First Name: <input  type="text"   name="firstName" class="form-control"  placeholder="First Name" autofocus/>
                    Last Name: <input  type="text"   name="lastName" class="form-control"  placeholder="Last Name" />
                    Email: <input  type="email"   name="eMail" class="form-control" placeholder="Email" />
                    Date of Birth: <input  type="date"   name="dateOfBirth" class="form-control"  />
                    Home Address: <input  type="text"   name="homeAddress" class="form-control" placeholder="Current Address"   />
                    Phone Number: <input  type="text"   name="phoneNum" class="form-control" placeholder="Contact Number"   />
                <br><br>
         
            <input class="form-check-input " type="checkbox" name ="staff"  value="staff member"/>
           Staff :
            &nbsp;&nbsp; &nbsp; &nbsp;
           <br><br>
          
            <input  type="submit" value="OK" class="btn btn-light" name ="submitbutton" 
                    style="height:50px; width:200px; "/>
           
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
                $staff_member = isset($_POST['staff']);
        
                if (!empty($firstName)&& !empty($lastName)&& !empty($eMail)&& !empty($dateOfBirth)&& !empty($homeAddress)
                   && !empty($phoneNum)){
              
                        $_SESSION["firstName"]=$firstName;
                        $_SESSION["lastName"]=$lastName;
                        $_SESSION["eMail"]=$eMail;
                        $_SESSION["dateOfBirth"]= $dateOfBirth;
                        $_SESSION["homeAddress"]= $homeAddress;
                        $_SESSION["phoneNum"]= $phoneNum;
                 
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
