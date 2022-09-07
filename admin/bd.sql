CREATE DATABASE MSI;
USE MSI;
CREATE TABLE infos(
    Id int PRIMARY KEY AUTO_INCREMENT not null,
    Nom varchar(120) not null,
    Email varchar(40) not null,
    Telephone varchar(15) not null,
    Message_envoi text not null,
    Date_envoi datetime not null default="CURRENT_TIMESTAMP",
);
CREATE TABLE online (
    Id int PRIMARY KEY AUTO_INCREMENT not null,
    time_user int not null,
    user_ip varchar(255) not null
);