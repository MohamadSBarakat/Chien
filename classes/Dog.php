<?php

class Dog{
    private $id;
    private $nickname;
    private $birthday;
    private $picture;
    private $listRaces;
    private $userId;
    private $listArticles;

    function __set($name,$value){ }
    
    // ID
    function getId() { 
        return $this->id; 
    }

    // NICKNAME
    function setNickname($nickname) { 
        $this->nickname = $nickname; 
    }
    function getNickname() { 
        return $this->nickname; 
    }

    // BIRTHDAY
    function setBirthday($birthday) { 
        $this->birthday = $birthday; 
    }
    function getBirthday() { 
        return $this->birthday; 
    }

    // PICTURE
    function setPicture($picture) { 
        $this->picture = $picture; 
    }
    function getPicture() { 
        return $this->picture; 
    }

    // LIST RACES
    function setListRaces($listRaces) { 
        $this->listRaces = $listRaces; 
    }
    function getListRaces() { 
        return $this->listRaces; 
    }

    // USER ID
    function setUserId($userId) { 
        $this->userId = $userId; 
    }
    function getUserId() { 
        return $this->userId; 
    }

    // LIST ARTICLES
    function setListArticles($listArticles) { 
        $this->listArticles = $listArticles; 
    }
    function getListArticles() { 
        return $this->listArticles; 
    }
}


?>