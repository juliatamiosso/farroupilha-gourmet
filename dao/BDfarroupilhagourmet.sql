/*drop database if exists BDfarroupilhagourmet;
create database if not exists BDfarroupilhagourmet;*/
use BDfarroupilhagourmet;

create table if not exists msgPT (
	id_mensagemPT int not null PRIMARY KEY auto_increment,
    nomePT varchar(100),
    telefonePT varchar(50),
    emailPT varchar(100),
    mensagemPT varchar(500)
);

create table if not exists msgESP (
	id_mensagemESP int not null PRIMARY KEY auto_increment,
    nomeESP varchar(100),
    telefoneESP varchar(50),
    emailESP varchar(100),
    mensagemESP varchar(500)
);

select * from msgPT;
select * from msgESP;

/*ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';*/