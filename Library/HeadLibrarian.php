<?php
namespace Library;

class HeadLibrarian extends Librarian implements searchable,updateable {
    
    public function __construct($firstname,$lastname,$email,$address,$dateofbirth,$phonenum,$account_num,$access_level,$password){

        parent::__construct($firstname,$lastname,$email,$address,$dateofbirth,$phonenum,$account_num,$access_level,$password);
    }
    
    public function SetAccessLevel($access_level){
        $this->access_level = $access_level;
    }
    public function unblockAccount($account_num){
        echo 'unblock Account';
    }
    /*public function setLoanDuration($lib_item){
        set loan duration in library item
    }
    public function addItem($lib_item){
        create new library item
    }
    public function removeItem($lib_item){
        remove library item
    }*/
    public function updateRecords(updateable $update_item, $lib_item){
        parent::updateRecords($update_item,$lib_item);
    }
     
    public function searchItem(searchable $search_item, $lib_item){
        parent::searchItem($search_item,$lib_item);
    }
    
    public function accessLibrary(accessable $account_item, $register){
        if ($register){
            if ($account_item->access_level = LIBRARIAN){
                echo 'create an account for a librarian';
            }else{
                echo 'create an account for yourself';
            }
        }else{
            echo 'retreive account details i.e. login';
        }
    }
}
