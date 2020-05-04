<?php

        const DB_DSN = "mysql:host=localhost;dbname=jolibrary";
        const DB_USER = "root";
        const DB_PASSWORD = "";
       

  function Connect_db(){

           try { $pdo = new PDO(DB_DSN, DB_USER,DB_PASSWORD);      
        } catch (PDOException $e) {
            die ($e->getMessage());
        }
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
  }
  
  
 function Register(){
     
         $password = $_POST["reg_password"];
//creating security code         
          $hash = password_hash($password, PASSWORD_DEFAULT);
          
//sql stamemnt - adding security code and password
          $stmt = $PDO->prepare("INSERT INTO library_member (password,hash_pw)
                            VALUES (:password, :hash)");
                          
   
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":hash", $hash);
        
        $stmt->execute();
       
         echo "Thank You, Your Library Details Will be Emailed to You";
        
        
 }
 
 function Update_Password(){
      
     $hash = password_hash($password, PASSWORD_DEFAULT);
     
     $stmt = $PDO->prepare("UPDATE library_member SET password =:password, hash_pw=:hash WHERE first_name = 'John' ");
                          
   
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":hash", $hash);
        $stmt->execute();
       
       
        echo "You have updated your password";
          
 }