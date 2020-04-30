<?php
function my_autoloader($className){

    $path = dirname(__DIR__)."\Library\\";
    $ext = ".php";
    $fullpath = $path.$className.$ext;
    include_once $fullpath;
}
spl_autoload_register('my_autoloader');

//old code no longer used due to autoloader but left for reference
/*$path = dirname(__DIR__) ."\Library\Library";

echo 'path is '.get_include_path().PATH_SEPARATOR.$path;  

set_include_path(
        get_include_path().PATH_SEPARATOR.$path   
        );

require_once 'Account.php';
require_once 'LibMember.php';
require_once 'Librarian.php';
require_once 'HeadLibrarian.php';
require_once 'ILibrary.php';*/

use Library\Account;
use Library\LibMember;
use Library\Librarian;
use Library\HeadLibrarian;

function create_library_account($firstname, $lastname, $dateofbirth, $email, $address, $phonenum, 
                                $account_num, $access_level,$password){
        $account = NULL;
        switch($access_level){
        case USER: $account = new LibMember($firstname, $lastname, $dateofbirth, $email, $address, $phonenum, $account_num);
                break;
        case LIBRARIAN: $account = new Librarian($firstname, $lastname, $dateofbirth, $email, $address, $phonenum, $account_num,$access_level,$password);
                break;
        case HEADLIBRARIAN: $account = new HeadLibrarian($firstname, $lastname, $dateofbirth, $email, $address, $phonenum,$account_num,$access_level,$password );
                break;
        default : echo 'Invalid Access Level';
        break;
        }
        return $account;
 }

//Start the App
echo 'Welcome to our Library Application'."\n";
echo 'Please enter each Library Member Detail when prompted'."\n";

echo 'Please enter Members First Name'."\n";
// read the user input value into variable $firstname
$firstname = stream_get_line(STDIN, 100, "\n");

echo 'Please enter Members Last Name'."\n";
// read the user input value into variable $lastname
$lastname = stream_get_line(STDIN, 100, "\n");

echo 'Please enter Members Email Address'."\n";
// read the user input value into variable $email
$email = stream_get_line(STDIN, 100, "\n");

echo 'Please enter Members Date Of Birth DD-MM-YYYY'."\n";
// read the user input value into variable $dateofbirth
$dateofbirth = stream_get_line(STDIN, 100, "\n");
        
echo 'Please enter Members Address'."\n";
// read the user input value into variable $address
$address = stream_get_line(STDIN, 100, "\n");

echo 'Please enter Members Phone Number'."\n";
// read the user input value into variable $phonenum
$phonenum = stream_get_line(STDIN, 100, "\n");

echo 'Please enter Members Library ID'."\n";
// read the user input value into variable $account_num
$account_num = stream_get_line(STDIN, 100, "\n");

echo 'Please enter Members Password'."\n";
// read the user input value into variable $password
$password = stream_get_line(STDIN, 100, "\n");

CONST USER = 1;
CONST LIBRARIAN= 2;
CONST HEADLIBRARIAN = 3;

$userMemberOne = create_library_account($firstname,$lastname,$email,$dateofbirth,$address,$phonenum,$account_num, USER,$password);

echo 'NEW USER MEMBER DETAILS'."\n";
echo $userMemberOne->getname()."\n";
echo $userMemberOne->getEmail()."\n";
echo $userMemberOne->getDateOfBirth()."\n";
echo $userMemberOne->getAddr()."\n";
echo $userMemberOne->getPhoneNum()."\n";
echo $userMemberOne->getAccountNum()."\n";

$LibrarianOne = create_library_account($firstname,$lastname,$email,$dateofbirth,$address,$phonenum,$account_num, LIBRARIAN,$password);

echo 'NEW LIBRARIAN DETAILS'."\n";
echo $LibrarianOne->getname()."\n";
echo $LibrarianOne->getEmail()."\n";
echo $LibrarianOne->getDateOfBirth()."\n";
echo $LibrarianOne->getAddr()."\n";
echo $LibrarianOne->getPhoneNum()."\n";
echo $LibrarianOne->getAccountNum()."\n";
echo $LibrarianOne->getAccessLevel()."\n";
echo $LibrarianOne->getPassword()."\n";

$HeadLibrarianOne = create_library_account($firstname,$lastname,$email,$dateofbirth,$address,$phonenum,$account_num, HEADLIBRARIAN,$password);

echo 'NEW HEAD LIBRARIAN DETAILS'."\n";
echo $HeadLibrarianOne->getname()."\n";
echo $HeadLibrarianOne->getEmail()."\n";
echo $HeadLibrarianOne->getDateOfBirth()."\n";
echo $HeadLibrarianOne->getAddr()."\n";
echo $HeadLibrarianOne->getPhoneNum()."\n";
echo $HeadLibrarianOne->getAccountNum()."\n";
echo $HeadLibrarianOne->getAccessLevel()."\n";
echo $HeadLibrarianOne->getPassword()."\n";

