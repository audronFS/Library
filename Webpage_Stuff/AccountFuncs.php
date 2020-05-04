<?php
namespace Library;

const DB_DSN = 'mysql:host=localhost;dbname=jolibrary';
const DB_USER = 'root';
const DB_PASS = '';

use \PDO;

function checkForAccount(){
    //prepare a select statement for database using firstname, lastname, member ID
    //if there is a database entry which is valid for all 3 then all fine for logging in,
    //otherwise return a results set displaying names that correspond and ask them to select 
    //which one is theirs - if none then ask them to register
    //if trying to register then raise 
    //an exception to say that there is already an account in that name and again display all names - if they 
    //dont select from those entries then take them back to register form
    //if no database entry then you can insert data into the database and return a member ID - on the welcome page
    
    try {
      // connect to database
      $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
    }catch (PDOException $e) {
	die($e->getMessage()); 
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query( "SELECT * FROM library_member
                         WHERE (first_name = '$_SESSION[firstName]') AND (last_name = '$_SESSION[lastName]')"); 
    //simple display for results
    $num_rows = 0;
    foreach ($stmt as $row){
        //echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[6]."<br>";
        $num_rows++;
        }
     return $num_rows;
    //disconnect from database
    unset($stmt);
}

function setUpAccount($register_staff){
    try {
      // connect to database
      $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
    }catch (PDOException $e) {
	die($e->getMessage()); 
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
      
    if($register_staff){  
        $stmt = $pdo->prepare("INSERT INTO staff_member(first_name,last_name,birth_date,address,phone_number,email, hash_pw, password) 
		VALUES (:firstName,:lastName,:dateOfBirth,:homeAddress,:phoneNum,:eMail,:hash, :password)");
          $stmt->bindParam(":hash", $hash);
        
    }else{
        
        $hash = password_hash($_SESSION["password"], PASSWORD_DEFAULT);
        
        $stmt = $pdo->prepare("INSERT INTO library_member(first_name,last_name,birth_date,address,phone_number,email, hash_pw, password) 
		VALUES (:firstName,:lastName,:dateOfBirth,:homeAddress,:phoneNum,:eMail,:hash, :password)");
  
    }
        
    $stmt->execute(['firstName' => $_SESSION['firstName'],'lastName' => $_SESSION['lastName'],'dateOfBirth' => $_SESSION['dateOfBirth'],'homeAddress' => $_SESSION['homeAddress'],'phoneNum' => $_SESSION['phoneNum'],'eMail' => $_SESSION['eMail'],['hash_pw' => $hash], 'password' =>$_SESSION["password"]]);
    
    $stmt = $pdo->query( "SELECT * FROM library_member");
                         
    //simple display for results
    foreach ($stmt as $row){
        echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[6]."<br>";
        }
    //disconnect from database
    unset($stmt);

}
