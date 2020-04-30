<?php
namespace Library;

abstract class Account{
    protected $firstname;
    protected $lastname;
    protected $dateofbirth;
    protected $address;
    protected $phonenum;
    protected $email;
    protected $account_num;
    protected $loanitems =[];
    
     public function __construct($firstname,$lastname,$email,$address,$dateofbirth,$phonenum,$account_num){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->address = $address;
        $this->dateofbirth = $dateofbirth;
        $this->phonenum = $phonenum;
        $this->account_num = $account_num;
     }
    
    public function getName(){
        return $this->firstname.' '.$this->lastname;
    }
    public function setLastName($lastname){
        $this->lastname = $lastname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }    
    public function getAddr(){
        return $this->address;
    }
    public function setAddr($address){
        $this->address = $address;
    }
    public function getDateOfBirth(){
        return $this->dateofbirth;
    }
    public function getPhoneNum(){
        return $this->phonenum;
    }
    public function setPhoneNum($phonenum){
        $this->phonenum = $phonenum;
    }
    public function getAccountNum(){
        return $this->account_num;
    }
    public function setAccountNum($account_num){
        $this->account_num = $account_num;
    }
    public function showLoanItems(){
        return $this->$loanitems[0];
    }
}