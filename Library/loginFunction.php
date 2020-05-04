<?php
 function Connect_db(){

         $DB_DSN = "mysql:host=localhost;dbname=jolibrary";
         $DB_USER = "root";
         $DB_PASSWORD = "";
         
           try { $pdo = new PDO($DB_DSN, $DB_USER,$DB_PASSWORD);      
        } catch (PDOException $e) {
            die ($e->getMessage());
        }
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
  }
    
   function check_Staff_Pw(){
      
//check if the button has been pressed
//insert data into variable       
            if (isset ($_POST["s_enter"])){
            $staffId = $_REQUEST["staffId"];
            $staffPass = $_REQUEST["spassword"];
//SQL prepare statemnt           
             $stmt = $pdo->prepare("SELECT * FROM staff WHERE staff_id =:staffId");
             
             $stmt->bindParam(":staffId", $staffId);
           
             $stmt->execute();   
           
             $rows = $stmt->fetchAll();
             
             foreach ($rows as $row) {
//if the data in the column, staff pw isnt working ...                 
             if ($row["staff_password"] !== $staffPass){
              echo "Incorrect Password";}
              else {
                  echo "Welcome";
              }
//              // include another page instead of welcome
         }

         }
    }
    
    function check_Acc_Pw(){
//check if the button has been pressed
//insert data into variable    
        
            if (isset ($_POST["a_enter"])){
             $accountLibNo = $_REQUEST["libcard"];  
             $accountPass = $_REQUEST["apassword"];
        
//SQL prepare statement          
             $stmt = $pdo->prepare("SELECT * FROM library_member WHERE libcard_number =:accountLibNo");
             
             $stmt->bindParam(":accountLibNo", $accountLibNo);
        
             $stmt->execute();  
             
             $rows = $stmt->fetchAll();
            
             foreach ($rows as $row) {
                 
// password verify is doing the checking 
//password_verify is a check function for account pw and the assigned hash
//if the password ISNOT verified ...                  
             if (!password_verify($accountPass, $row["hash_pw"])){               
              echo "Incorrect Password";}
              else {
              echo "Welcome";}
                  //include the other webpage instead of welcome
             }
             }     
    }
  
    function Add_Admin(){
  
          if (isset ($_POST["update_member"])){
         
           // admin will change now 
          //name would  be declared i.e. $name = John
              
        $status = "admin"; 
        $stmt = $PDO->prepare("UPDATE library_member SET account_status =:status WHERE first_name =:name");
                        // need another query statement to join tables/update staff table  
    
        $stmt->bindParam(":status", $status);
        $stmt->bindParam(":name", $name);
        
        $stmt->execute();
       
     
        echo "You have updated" . $name . $surname . "to Admin user";
            
              
         }    
            }
            
            
       
       
    
    