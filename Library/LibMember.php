<?php
namespace Library;
require_once 'ILibrary.php';

class LibMember extends Account implements searchable, updateable, accessable{
    protected $numloanitems;

    public function __construct($firstname,$lastname,$email,$address,$dateofbirth,$phonenum,$account_num){
        
        $this->numloanitems = 0;
        parent::__construct($firstname,$lastname,$email,$address,$dateofbirth,$phonenum,$account_num);
    }
    
    public function getNumLoanItems(){
        return $this->numloanitems;
    }
       
    public function searchItem(searchable $search_item, $lib_item){
        // ignore lib account as we will always be searching for a library item in LibMember
        echo 'search for library item';
    }
    
    public function updateRecords(updateable $update_item, $lib_item){
        // ignore lib item as we will always be updating personal details for a LibMember
        echo 'update personal details';
    }
    
    public function accessLibrary(accessable $account_item, $register){
        if ($register){
            echo 'create an account';
        }else{
            echo 'retreive account details i.e. login';
        }
    }
}