create database IF NOT EXISTS florisproject;
use florisproject;
create table posts(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        title varchar(255),
        text TEXT
);
create table users(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username varchar(40),
        password varchar(40)
);
insert into users values("default", "tjappadappa");
