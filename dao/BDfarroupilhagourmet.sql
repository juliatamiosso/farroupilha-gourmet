drop database if exists BDfarroupilhagourmet;
create database if not exists BDfarroupilhagourmet;
use BDfarroupilhagourmet;

create table if not exists msgPT (
	id_mensagemPT int not null PRIMARY KEY auto_increment,
    nomePT varchar(100),
    telefonePT varchar(50),
    emailPT varchar(100),
    mensagemPT varchar(500)
);

select * from msgPT;

/*ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';*/