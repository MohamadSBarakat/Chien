<?php
class Article{
    private $id;
    private $title;
    private $picture;
    private $description;
    private $publicationDate;
    private $dogId;
    private $listComments;

    function __set($name,$value){ }
    
    // ID
    function getId() { 
        return $this->id; 
    }

    // TITLE
    function setTitle($title) { 
        $this->title = $title; 
    }
    function getTitle() { 
        return $this->title; 
    }

    // PICTURE
    function setPicture($picture) { 
        $this->picture = $picture; 
    }
    function getPicture() { 
        return $this->picture; 
    }

    // DESCRIPTION
    function setDescription($description) { 
        $this->description = $description; 
    }
    function getDescription() { 
        return $this->description; 
    }

    // PUBLICATION DATE
    function setPublicationDate($publicationDate) { 
        $this->publicationDate = $publicationDate; 
    }
    function getPublicationDate() { 
        return $this->publicationDate; 
    }

    // DOG ID
    function setDogId($dogId) { 
        $this->dogId = $dogId; 
    }
    function getDogId() { 
        return $this->dogId; 
    }

    // LIST COMMENTS
    function setListComments($listComments) { 
        $this->listComments = $listComments; 
    }
    function getListComments() { 
        return $this->listComments; 
    }

}

?>