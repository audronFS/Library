<?php
 
  
 include_once "libInterface.php";
 
  
        class Admin extends Account implements \Needaccess{
            public function blockMember(){
                
            }
            
            public function checkMember_Loans(){
            
            }
            
            public function reserveItem(){
                
            }
            
            public function renewItem(){
                
            }
            
            public function checkOut_Item(){
                
            }
        
            public function checkIn_Item(){
                
            }
            
            public function payFine(){
                
            }
            
            // interfacesss x 
            
            public function Search(){
              return "Can search for books and members";
          }
         
             public function Login(){
              if ((!$libNO == $this->libNO)
              && (!$password == $this->password) && (!$memberId == $this->member_ID))
              {die ("Incorrect Library number and password");}   
            
            }
            
        }
 