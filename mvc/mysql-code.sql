create database mvc;
use mvc;
create table clients
(id int not null auto_increment primary key,
name varchar(50) not null,
email varchar(50) not null,
phone varchar(15) not null );
