create database jspdf3;

use jspdf3;

create table person(
	id int not null auto_increment primary key,
	name varchar(500) not null,
	lastname varchar(500) not null,
	address varchar(100) not null,
	phone varchar(100) not null,
	email varchar(255) not null,
	created_at datetime not null
);

insert into person(name,lastname,address,phone,email,created_at) values ("Agustin","Ramos","Mexico","+5219371331142","evilnapsis@gmail.com",NOW());
insert into person(name,lastname,address,phone,email,created_at) values ("Agustin 2","Ramos","Mexico","+5219371331142","xzcbnmm@gmail.com",NOW());
insert into person(name,lastname,address,phone,email,created_at) values ("Agustin 4","Ramos","Mexico","+52178798798","nanana@gmail.com",NOW());
insert into person(name,lastname,address,phone,email,created_at) values ("Agustin 6","Ramos","Mexico","+521123456789","qertyu990@gmail.com",NOW());
