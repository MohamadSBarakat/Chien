<?php
class Comment{
    private $id;
    private $comment;
    private $publicationDate;
    private $articleId;
    private $userId;

    function __set($name,$value){ }

    // ID
    function getId() {
        return $this->id; 
    }

    // COMMENT
    function setComment($comment) { 
        $this->comment = $comment; 
    }
    function getComment() { 
        return $this->comment; 
    }

    // PUBLICATION DATE
    function setPublicationDate($publicationDate) { 
        $this->publicationDate = $publicationDate; 
    }
    function getPublicationDate() { 
        return $this->publicationDate; 
    }

    // ARTICLE ID
    function setArticleId($articleId) { 
        $this->articleId = $articleId; 
    }
    function getArticleId() { 
        return $this->articleId; 
    }

    // USER ID
    function setUserId($userId) { 
        $this->userId = $userId; 
    }
    function getUserId() { 
        return $this->userId; 
    }

}


?>