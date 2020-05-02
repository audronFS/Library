<?php

$query=$_REQUEST['searching'];
$servername = "localhost";
$username = "root";
$password = "";

try {
    //1.OBJETO CONEXION
    $pdo = new PDO("mysql:host=$servername;dbname=library", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    //2.OBJETO STATEMENT=almacen=resulset --> query(): prepare()+execute() pero tienen sus propios metodos y son para consultas menos numerosas
   $stm= $pdo->prepare("SELECT a.title, a.ISBN, b.First_name, b.Last_name
FROM library_book a INNER JOIN author_record b 
ON a.fk_author_id=b.Author_ID 
WHERE a.title LIKE ?");
   
   //3.se ejecuta como un array
   $stm->execute(array("%$query%"));//nombre proveniente del _POST
   
       //4.este fetch crea un array asociativo y se recorre con el while
   
  echo "<table style='border: 1px solid black; background-color: #00BFB2; margin-right: 50px'>";   
    echo "<tr style= 'border: 1px solid #CCC;'>";
    echo "<th style= 'border: 1px solid #CCC;width:600px'> Title</th>";
    echo "<th style= 'border: 1px solid #CCC;width:200px'> Author</th>";
    echo "<th style= 'border: 1px solid #CCC;width:200px'> Surname</th>";
    echo "<th style= 'border: 1px solid #CCC; width:150px'> ISBN</th>";  
    echo "</tr style= 'border: 1px solid #CCC;'>";
  echo "</table>";
   
   while($register=$stm->fetch(PDO::FETCH_ASSOC)){   
  echo "<table style='border: 1px solid black; margin-right: 50px'>";   
    echo "<tr style= 'border: 1px solid #CCC;'>";
    echo "<th style= 'border: 1px solid #CCC; width:600px'>" . $register['title'] . "</th>";   
    echo "<th style= 'border: 1px solid #CCC; width:200px'>" . $register['First_name'] . "</th>";  
    echo "<th style= 'border: 1px solid #CCC; width:200px'>" . $register['Last_name'] . "</th>"; 
     echo "<th style= 'border: 1px solid #CCC; width:150px'>" . $register['ISBN'] . "</th>";  
    echo "</tr style= 'border: 1px solid #CCC;'>";
  echo "</table>";
   
           
   }
   $stm->closeCursor();   
