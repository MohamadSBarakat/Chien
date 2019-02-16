<?php

class UserDog{
    protected $id;
    protected $email;
    protected $pwd;
    protected $lastConnectionDate;

    function __set($name,$value){ }

    // ID
    function getId() { 
        return $this->id; 
    }

    // EMAIL
    function setEmail($email) { 
        $this->email = $email; 
    }
    function getEmail() { 
        return $this->email; 
    }

    // PWD
    function setPwd($pwd) { 
        $this->pwd = $pwd; 
    }
    function getPwd() { 
        return $this->pwd;
    }

    // LAST CONNECTION DATE
    function setLastConnectionDate($lastConnectionDate) { 
        $this->lastConnectionDate = $lastConnectionDate; 
    }
    function getLastConnectionDate() { 
        return $this->lastConnectionDate; 
    }

}

// LA CLASSE PROFILE HERITE DES ATTRIBUTS ET METHODES DE LA CLASSE USERDOG
class Profile extends UserDog{
    private $lastName;
    private $firstName;
    private $country;
    private $city;
    private $listDogs;

    function __set($name,$value){ }
    
    // LAST NAME
    function setLastName($lastName) { 
        $this->lastName = $lastName; 
    }
    function getLastName() { 
        return $this->lastName; 
    }

    // FIRST NAME
    function setFirstName($firstName) { 
        $this->firstName = $firstName; 
    }
    function getFirstName() { 
        return $this->firstName; 
    }

    // COUNTRY
    function setCountry($country) { 
        $this->country = $country; 
    }
    function getCountry() { 
        return $this->country; 
    }

    // CITY
    function setCity($city) { 
        $this->city = $city; 
    }
    function getCity() { 
        return $this->city; 
    }

    // LIST DOGS
    function setListDogs($listDogs) { 
        $this->listDogs = $listDogs; 
    }
    function getListDogs() { 
        return $this->listDogs; 
    }
}

?>