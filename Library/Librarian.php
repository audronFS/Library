<?php
namespace Library;

class Librarian extends Account implements searchable, updateable, accessable {
    
    protected $access_level;
    protected $password;
    
    public function __construct($firstname,$lastname,$email,$address,$dateofbirth,$phonenum,$account_num,$access_level,$password){
        
        $this->access_level = $access_level;
        $this->password = $password;
        parent::__construct($firstname,$lastname,$email,$address,$dateofbirth,$phonenum,$account_num);
    }
    
    public function getAccessLevel(){
        return $this->access_level;
    }
    public function getPassword(){
        return $this->password;
    }
    public function SetPassword($password)
    {
        $this->password = $password;
    }
    public function LoanItem(){
        echo 'add library object to user account, and update libitem status';
    }
    public function ReturnItem()
    {
        echo 'remove object from user account, and update libitem status';
    }
    public function ReserveItem()
    {
        echo 'update libitem status';
    }
    public function RenewItem()
    {
        echo 'update libitem status';
    }
    public function blockAccount($account_num){
        echo 'block Account';
    }
   
    public function accessLibrary(accessable $account_item, $register){
        if ($register){
            echo 'create an account for a user, you cant register yourself as the head librarian does it';
        }else{
            echo 'retreive account details i.e. login';
        }

    }
    
    public function removeAccount($account_num){
        echo 'Remove library account';
    }
     
    public function searchItem(searchable $search_item,$lib_item){
        if ($lib_item){
          echo 'search for a library item';
        }else{
          echo 'search for a library account';
        }
    }
    public function updateRecords(updateable $update_item,$lib_item){
        if ($lib_item){
          echo 'update a library item';
        }else{
          echo 'update a library account';
        }
    }
}