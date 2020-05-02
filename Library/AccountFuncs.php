<?php
const DB_DSN = 'mysql:host=localhost;dbname=group_library_v4';
const DB_USER = 'root';
const DB_PASS = '';

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

    /*$stmt = $pdo->query( "SELECT id_member FROM library_member
                         WHERE (first_name = 'Maisie') AND (last_name = 'Smith') 
                                AND (DATE_FORMAT(birth_date,'%d-%m-%Y') = '12-03-1987')");*/
    //retrieve the id member value for the user details if it exists
    
   /* $stmt = $pdo->query( "SELECT id_member FROM library_member
                         WHERE (first_name = '$accountDetails[firstName]') AND (last_name = '$accountDetails[lastName]') 
                                AND (birth_date = '$accountDetails[dateOfBirth]')");*/
    $stmt = $pdo->query( "SELECT * FROM library_member
                         WHERE (first_name = '$_SESSION[firstName]') AND (last_name = '$_SESSION[lastName]')"); 
    //simple display for results
    $num_rows = 0;
    foreach ($stmt as $row){
        echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[6]."<br>";
        $num_rows++;
        }
     return $num_rows;
    //disconnect from database
    unset($stmt);
}

function setUpAccount(){
    try {
      // connect to database
      $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
    }catch (PDOException $e) {
	die($e->getMessage()); 
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("INSERT INTO library_member(first_name,last_name,birth_date,address,phone_number,email) 
		VALUES (:firstName,:lastName,:dateOfBirth,:homeAddress,:phoneNum,:eMail)");
    $stmt->execute(['firstName' => $_SESSION['firstName'],'lastName' => $_SESSION['lastName'],'dateOfBirth' => $_SESSION['dateOfBirth'],'homeAddress' => $_SESSION['homeAddress'],'phoneNum' => $_SESSION['phoneNum'],'eMail' => $_SESSION['eMail']]);
    
    $stmt = $pdo->query( "SELECT * FROM library_member");
                         
    //simple display for results
    foreach ($stmt as $row){
        echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[6]."<br>";
        }
    //disconnect from database
    unset($stmt);

}
