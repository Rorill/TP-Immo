DROP DATABASE IF EXISTS fmdh;
CREATE DATABASE fmdh;
USE fmdh;
create table listings (
id INT PRIMARY KEY AUTO_INCREMENT,
ListingType varchar(10),
title varchar(50),
favorite BOOLEAN DEFAULT false,
price varchar(10),
location varchar(50),
message varchar (500),
id_user INT NOT NULL
);
create table users (
id INT PRIMARY KEY AUTO_INCREMENT,
email varchar(50),
mdp varchar(15)
);

INSERT INTO users(email,mdp)
VALUES
  ("pretium.aliquet@aol.net","YWJ15"),
  ("sed.dictum.proin@icloud.ca","MTF13"),
  ("purus.sapien.gravida@outlook.org","ZGW55"),
  ("quam.quis@hotmail.net","WCS22"),
  ("est@yahoo.com","DUI46"),
  ("nulla.ante@google.ca","BCZ22"),
  ("ut.tincidunt@google.org","PXL62"),
  ("eu.placerat@hotmail.org","TDY28"),
  ("ultrices.duis@aol.com","BYM84"),
  ("orci@icloud.couk","INQ00");

insert into listings (ListingType,title,price,location,message,id_user)
values 
('rent','maison','2500','Lyon','Placeholder annonce','1'),
('sale','Charmant studio','250000','Mulhouse','Placeholder annonce','1'),
('rent','Appartement','700','Saint-Malo','Placeholder annonce','1'),
('rent','Maison','2000','Marseille','Placeholder annonce','1'),
('sale','Studio','150000','Montluçon','Placeholder annonce','1'),
('rent','maison','2500','Lyon','Placeholder annonce','2')
;



ALTER TABLE listings 
ADD CONSTRAINT fk_user_id FOREIGN KEY (id_user) REFERENCES users(id);


