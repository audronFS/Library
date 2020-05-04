<?php
const DB_DSN = 'mysql:host=localhost;dbname=group_library_v4_new_fk';
const DB_USER = 'root';
const DB_PASS = '';

//  add a new book
function setUpNewBook(){
    try {
    // connect to database
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
    }catch (PDOException $e) {
	die($e->getMessage()); 
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//   add to library_book table
    $lb = $pdo->prepare("INSERT INTO library_book(title,Edition,ISBN) 
         VALUES (:title,:edition,:isbn)");
    $lb->execute(['title' => $_SESSION['title'],'edition' => $_SESSION['edition'],'isbn' => $_SESSION['isbn']]);
//    $lb->execute(['title' => $_POST['title'],'edition' => $_POST['edition'],'isbn' => $_POST['isbn']]);
    
//    add to book_item table
    $li = $pdo->prepare("INSERT INTO book_item(Dewey_decimal) 
         VALUES (:deweyDecimal)");
    $li->execute(['deweyDecimal' => $_SESSION['deweyDecimal']]);
    
 //   add to author_record table
    $ar = $pdo->prepare("INSERT INTO author_record(First_name,Last_name) 
         VALUES (:firstName,:lastName)");
    $ar->execute(['firstName' => $_SESSION['firstName'],'lastName' => $_SESSION['lastName']]);
    
//    add to publisher_record table
    $p = $pdo->prepare("INSERT INTO publisher_record(Publisher_name) 
         VALUES (:publisherName)");
    $p->execute(['publisherName' => $_SESSION['publisherName']]);
    
//    add to library_category table
    $c = $pdo->prepare("INSERT INTO library_category(Subject_keyword) 
         VALUES (:category)");
    $c->execute(['category' => $_SESSION['category']]);
    


    echo 'New book record added';                        
                                               
}  
//   $stmt->closeCursor();   