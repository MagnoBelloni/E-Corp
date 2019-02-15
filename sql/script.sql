#drop database aulaTPI;
create database if not exists aulaTPI;

use aulaTPI;

create table if not exists TB_Login(
	id int auto_increment,
    usuario varchar(30) not null,
    senha varchar(30)not null,
    primary key(id)
);

CREATE TABLE IF NOT EXISTS TB_Cliente (
	
    id_cliente INT NOT NULL AUTO_INCREMENT,
    nome_cliente VARCHAR (100),
    rg_cliente CHAR (9),
    cpf_cliente CHAR (11),
    telefone_cliente VARCHAR(10),
    celular_cliente VARCHAR (11),    
    email_cliente VARCHAR (100),
    sexo_cliente VARCHAR (9),
    civil_cliente VARCHAR (20),
    logradouro_cliente VARCHAR (100),
    num_cliente VARCHAR (10),
    bairro_cliente VARCHAR (50),
    cidade_cliente VARCHAR (50),
    uf_cliente CHAR (2),
    
    
    PRIMARY KEY (id_cliente)
);

create table if not exists TB_Banco(
	id_banco int auto_increment,
    numero_banco int not null,
    nome_banco varchar(100) not null,
    cnpj_banco varchar(14) not null,    #com mascara fica 18
    
    PRIMARY KEY(id_banco)
);

create table IF NOT EXISTS TB_Agencia(
	id_agencia int auto_increment,
    numero_agencia int(10) not null,
    bairro_agencia varchar(50) not null,
    
    id_agencia_banco int not null,
    
    primary key(id_agencia),
    CONSTRAINT FK_AGENCIA_BANCO FOREIGN KEY(id_agencia_banco) REFERENCES TB_Banco(id_banco)
);

CREATE TABLE IF NOT EXISTS TB_Conta (
	
    id_conta INT NOT NULL AUTO_INCREMENT,    
    tipo_conta VARCHAR (50),
    saldo_conta FLOAT(10,2),
    num_conta int NOT NULL,
    
    
    id_conta_Agencia INT NOT NULL,
    id_conta_cliente INT NOT NULL,
    
    CONSTRAINT FK_CON_AGE FOREIGN KEY (id_conta_Agencia) REFERENCES TB_Agencia (id_agencia),
    CONSTRAINT FK_CON_CLI FOREIGN KEY (id_conta_cliente) REFERENCES TB_Cliente (id_cliente),
    
    PRIMARY KEY (id_conta)
);

insert into TB_Login (usuario,senha) values ("magno","123");

/*DROP DATABASE aulatpi;
select * from TB_Login;
select * from TB_Banco;
select * from TB_Agencia;
select * from TB_Cliente;
select * from TB_Conta;*/