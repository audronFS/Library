<?php

$query=$_POST['nombre'];
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
   $stm= $pdo->prepare("SELECT title, ISBN FROM library_book WHERE title LIKE ?");
   
   //3.se ejecuta como un array
   $stm->execute(array("%$query%"));//nombre proveniente del _POST
   
       //4.este fetch crea un array asociativo y se recorre con el while
   
  echo "<table style='border: 1px solid black; background-color: #00BFB2; '>";   
    echo "<tr style= 'border: 1px solid #CCC;'>";
    echo "<th style= 'border: 1px solid #CCC;width:600px'> Title</th>";
    echo "<th style= 'border: 1px solid #CCC; width:400px'> ISBN</th>";  
    echo "</tr style= 'border: 1px solid #CCC;'>";
  echo "</table>";
   
   while($register=$stm->fetch(PDO::FETCH_ASSOC)){   
  echo "<table style='border: 1px solid black;'>";   
    echo "<tr style= 'border: 1px solid #CCC;'>";
    echo "<th style= 'border: 1px solid #CCC; width:600px'>" . $register['title'] . "</th>";
    echo "<th style= 'border: 1px solid #CCC; width:400px'>" . $register['ISBN'] . "</th>";  
    echo "</tr style= 'border: 1px solid #CCC;'>";
  echo "</table>";
   
           
   }
   $stm->closeCursor();   

