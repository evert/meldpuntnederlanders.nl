CREATE TABLE yourmom (

    id INT(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,

    name VARCHAR(80),
    email VARCHAR(80),
    city VARCHAR(80),

    intolerance VARCHAR(3),
    respect VARCHAR(3),
    generalizing VARCHAR(3),
    
    otherissues TEXT,
    clarification TEXT,
    
    created DATETIME 

);
