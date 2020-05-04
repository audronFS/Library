<!DOCTYPE html>
<!--open session-->
<?php session_start();
require_once "AddBookFunction.php";

?>

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
    <div class=" col-sm-12 text-center" style = " padding: 10px; font-family: 'Rubik', sans-serif;">
        
        <div  class="row container-fluid" >   
           <div id="yes"  class=" col-md-4 text-center rounded" style = "background-color: #FFCCCC; font-family: 'Raleway', cursive; font-size: 28px;
                   cursor: pointer; margin:20px" onclick="window.location = 'searchPage.php'">
                  <- GO BACK TO HOME PAGE </div> 
            <div class=" col-md-6 text-center" style = "background-color:white; margin: 5px">  
            </div>
         </div>

    
        <div class=" col-sm-6 text-center mx-auto margin rounded mx-auto d-block " style = "background-color: #00BFB2; padding: 40px; margin: 50px;">
        <form action="" method="POST" style =" margin: 10px; " >
            <h2> Add a new book</h2>
            Title: <input  type="text"   name="title" class="form-control"  placeholder="Book title" autofocus/>
            <div class="form-row">                  
                <div class="col">
                   <label for="firstName">Author first name:</label>
                   <input type="text" name="firstName" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                   <label for="lastName">Author last name:</label>
                   <input type="text" name="lastName" class="form-control" placeholder="Last name">
                </div>
            </div>
            Publisher: <input  type="text"   name="publisherName" class="form-control" placeholder="Publisher name" autofocus />
            <div class="form-group">
                <label for="category">Category: (select one):</label>                
                <select name="category" class="custom-select"class="form-control" id="category">
                <!--<select class="form-control" id="category">-->
                  <option>Children's Fiction</option>
                  <option>Leisure</option>
                  <option>Horror</option>
                  <option>Romance</option>
                  <option>Comedy</option>
                  <option>Cookery</option>
                  <option>Computer Science</option>
                  <option>Fiction</option>
                  <option>History</option>
                </select>
            Edition: <input  type="number"   name="edition" class="form-control" placeholder="Book edition number"/>
            ISBN: <input  type="text"   name="isbn" class="form-control" placeholder="Book ISBN number"/>
            Dewey Decimal: <input  type="text"   name="deweyDecimal" class="form-control" placeholder="Dewey decimal number (location)"/>

            <br><br>
          
            <input  type="submit" value="OK" class="btn btn-light" style="height:50px; width:200px; "/>
           
        </form>
        </div>
        </div>
    </div>
    </div>  
        <?php
            if (!empty($_POST)){
                $title = filter_input(INPUT_POST,'title',FILTER_SANITIZE_STRING);
                $firstName = filter_input(INPUT_POST,'firstName',FILTER_SANITIZE_STRING);
                $lastName = filter_input(INPUT_POST,'lastName',FILTER_SANITIZE_STRING);
                $publisherName = filter_input(INPUT_POST,'publisherName',FILTER_SANITIZE_STRING);
                $category = filter_input(INPUT_POST,'category',FILTER_SANITIZE_STRING);
                $edition = filter_input(INPUT_POST,'edition',FILTER_SANITIZE_STRING);
                $isbn = filter_input(INPUT_POST,'isbn',FILTER_SANITIZE_EMAIL);
                $deweyDecimal = filter_input(INPUT_POST,'deweyDecimal',FILTER_SANITIZE_STRING);
                
                  if (!empty($title)){
//                if (!empty($title)&& !empty($edition)&& !empty($isbn)&& !empty($deweyDecimal)&& !empty($firstName)
//                   && !empty($lastName)){              
                        
                        $_SESSION["title"]=$title;
                        $_SESSION["firstName"]=$firstName;
                        $_SESSION["lastName"]=$lastName;
                        $_SESSION["publisherName"]=$publisherName;
                        $_SESSION["category"]=$category;
                        $_SESSION["edition"]= $edition;
                        $_SESSION["isbn"]= $isbn;
                        $_SESSION["deweyDecimal"]= $deweyDecimal;
                        
                 
//                        $foundAcc = (checkForAccount() > 0);
//                        if (!$foundAcc){
                          setUpNewBook();
//                        }
//                        
//
                }else {
                    echo "You have not entered all user data required for a valid session.<br>";
                    echo "Generate exception with an error message box and allow user to resubmit";
                }
            
            if(!empty($_SESSION)){                
                unset($_SESSION["title"]);
                unset($_SESSION["edition"]);
                unset($_SESSION["isbn"]);
                unset($_SESSION["deweyDecimal"]);
                unset($_SESSION["firstName"]);
                unset($_SESSION["lastName"]);
            }
            }
            session_destroy();
        ?>
    </body>
</html>