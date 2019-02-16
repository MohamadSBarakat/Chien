CREATE DATABASE InstaDog;
ALTER DATABASE InstaDog CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE USER "adminInstaDog"@"localhost" IDENTIFIED BY "Inst@D0g" ;



GRANT SELECT,UPDATE,INSERT,DELETE ON InstaDog.* TO "adminInstaDog"@"localhost" ;   



CREATE TABLE UserDog ( 
    id INT(100) NOT NULL AUTO_INCREMENT ,
    email varchar(255) , 
    pwd varchar(255) ,
    lastConnectionDate DATETIME ,
    lastName varchar(100) , 
    firstName varchar(100) ,
    country varchar(50) ,
    city  varchar(50) ,
    PRIMARY KEY (id)
); 


CREATE TABLE Dog (
    id INT(100) NOT NULL AUTO_INCREMENT ,
    nickName INT ,
    birthday DATE ,
    picture varchar(100),
    userId INT(100) ,
    PRIMARY KEY (id),
    FOREIGN KEY (userId) REFERENCES UserDog(id)

);     

CREATE TABLE Article (
    id INT(100) NOT NULL AUTO_INCREMENT,
    textA TEXT ,
    publicationDate DATETIME ,
    picture varchar(100),
    dogId INT(100) ,
    PRIMARY KEY (id) ,
    FOREIGN KEY (dogId) REFERENCES Dog(id)

);


CREATE TABLE Comment (
    id INT(100) NOT NULL  AUTO_INCREMENT,
    comment Text ,
    publicationDate DATETIME ,
    articleId INT(100) ,
    userId INT(100) ,
    PRIMARY KEY (id) ,
    FOREIGN KEY (articleId) REFERENCES Article(id),
    FOREIGN KEY (userId) REFERENCES UserDog(id)
    
); 


CREATE TABLE Race (
    id INT(10) NOT NULL AUTO_INCREMENT,
    nameRace varchar(100),
    PRIMARY KEY(id)
  
);
    

CREATE TABLE DogRace (
    idDog INT(100),
    idRace INT(100) ,
    PRIMARY KEY (idDog, idRace ) ,
    FOREIGN KEY (idDog) REFERENCES Dog(id),
    FOREIGN KEY (idRace) REFERENCES Race(id) 
         
);

