CREATE DATABASE IF NOT EXISTS CrudPhp;

CREATE TABLE IF NOT EXISTS Client(
        Id INT PRIMARY KEY AUTO_INCREMENT,
        FirstName VARCHAR(100) NOT NULL,
        LastName VARCHAR(100) NOT NULL,
        Email VARCHAR(100) NOT NULL,
        Address0 VARCHAR(300)
    );