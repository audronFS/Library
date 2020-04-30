<?php

 include_once "libInterface.php";
  
 
        $role = "Basic Account";
                
       class Account implements \Needaccess{
         protected $name;
         protected $surname;
         protected $email;
         protected $adress;
         protected $dob;
         protected $tel;
         protected $member_ID;
         protected $libNO;
         protected $password;
  
         public function __construct($name, $surname, $adress, $tel, $dob, $member_Id, $email, $libNO, $password){ 
          $this-> name = $name;
          $this-> surname = $surname;
          $this-> adress = $adress; 
          $this-> tel = $tel;
          $this-> dob = $dob;
          $this-> memberId = $member_Id;
          $this-> libNO = $libNO;
          $this-> email = $email;
          $this-> password = $password;
         }
         
         public function getDetails(){
         return $this->name;}
//             return $this->surname;
//             return $this->adress;
//             return $this->tel;
//             return $this->dob;
//             return $this->email;
//             return $this->libNO;
//         }
         public function SetAllDetails(){
             $this->adress=$adress;
             $this->tel=$tel;
             $this->email=$email;
                }

          public function Register(){
             $this->name=$name;
             $this->surname=$surname;
             $this->adress=$adress;
             $this->tel=$tel;
             $this->email=$email;
             $this->dob=$dob;
             $this->emai=$email;
             $this->password=$password;   
             
             echo "Your library number will be emailed to this adress" . $this->email ; 
          }
          
          public function accountStatus(){
          echo "Account Status: " . $role;   
          }
          
          public function GetOrders(){
              return "loan details";
          }
          
          public function Login() {
              if ((!$libNO == $this->libNO)
              && (!$password == $this->password)){
                die ("Incorrect Library number and password");}
          } 
          
          public function LogOut(){
              echo "You are being logged out";
          }
             
          public function Search(){
              return "Can only search books and CDS.";
          }
          
          public function getFine(){
              return "loan details";
          }
          
          
      }
      
     
   
        ?>
