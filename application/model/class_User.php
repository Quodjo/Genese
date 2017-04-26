<?php

class User{

public $firstName;
public $lastName;
public $username;
public $password;
public $idNum;

function __construct(){
    $this->firstName = 'First Name';
    $this->lastName = 'Last Name';
    $this->username = 'Username';
    $this->password = 'Password';
    $this->idNum = 'Id Number';
}

public function getFirstName(){
    return $this->firstName;

}

public function getLastName(){
    return $this->lastName;
    
}

public function getUserName(){
    return $this->username;
    
}
public function getUserPassword(){
    return $this->password;
    
}
public function getUserID(){
    return $this->idNum;
    
}


//Mutator Methods
public function setFirstName($par){
   $this->firstName = $par;

}

public function setUserName($par){
   $this->username = $par;

}

public function setLastName($par){
   $this->lastName = $par;

}
public function setPassword($par){
   $this->password = $par;

}
public function setUserID($par){
  $this->idNum = $par;

}







}


?>