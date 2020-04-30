<?php
    
       $securitycode = "brown";
       
       class Head extends Admin implements \Needacess{
           private $code;
      
           public function __construct($code){
               $this->code = $code;
           }
            
           public function UnBlockMember(){
               echo "unblock";
            }
   
            
           public function SecurityCode(){
            }
            
            
            
            
            // interfaces 
            public function Search(){
              return "Can search for books and members";
          }
          
             public function Login(){
              if ((!$libNO == $this->libNO)
              && (!$password == $this->password) && (!$memberId == $this->member_ID)
              && (!$this->code == $securitycode))
                      
              {die ("Please Try Again");}   
            
            }    
            
            
            
       }
       

        
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

