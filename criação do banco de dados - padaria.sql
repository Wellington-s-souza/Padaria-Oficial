create database padaria;

use padaria;
/*tabelas */

create table contato(
    email varchar(50) not null unique primary key, 
    cpf char(11) not null,
    telefone char(11) not null
); 

create table cliente (
    cpf char(11) primary key not null,
    email varchar(50) not null unique, 
    nome varchar(90) not null,
    nascimento date not null,
    senha varchar(20) not null
);


create table endereco(
   endereco_id int not null primary key auto_increment, 
   cpf char(11) not null,
   rua varchar(100) not null ,
   cep char(8) not null,
   bairro varchar(90) not null,
   cidade varchar(90) not null,
   estado char(2) not null
); 
create table pedido(
    idPedido int not null primary key auto_increment,
    id int not null,
    quantidade char(11) not null,
    preco float not null,
    total float not null,
    cpf char(11)
);

create table produto( 
    id int not null primary key auto_increment,
    quantidade char(3) not null,
    descricao varchar(40) not null,
    preco decimal (10,2) not null,
    vencimento date not null,
    imagem varchar(200) null
);
 create table funcionario(
    email varchar(50) not null unique primary key,
    senha varchar(20) not null
    );
    
 create table obs(
    email varchar(50) not null unique  primary key,
    nome varchar(90) not null,
    assunto varchar(90) not null,
    observacao varchar(255) not null
);

/*inserir*/

insert into cliente( cpf, email, nome, nascimento, senha) values
('12345678963', 'joao@', 'joao', '2005-06-03', '1234');

insert into cliente( cpf, nome, nascimento, email, senha) values
('12985678963', 'julia', '2005-07-03', 'julia@', '1234');

insert into cliente( cpf, nome, nascimento, email, senha) values
('12345671463', 'kaue', '2005-05-03', 'kaue@', '1234');

insert into contato( email, cpf, telefone) values
('joao@', '12345678963', '11478523693');

insert into contato( email, cpf, telefone) values
('julia@','12985678963', '1147852364');

insert into contato( email, cpf, telefone) values
('kaue@', '12345671463', '11989707842');

insert into endereco( cpf, rua, cep, bairro, cidade, estado) values
('12345678963', 'rua a', '12365478', 'bairro a', 'cidade a', 'sp');

insert into endereco( cpf, rua, cep, bairro, cidade, estado) values
('12985678963', 'rua b', '98745632', 'bairro b', 'cidade b', 'sp');

insert into endereco( cpf, rua, cep, bairro, cidade, estado) values
('12345671463', 'rua c', '52369874', 'bairro c', 'cidade c', 'sp');

insert into produto( id, quantidade, descricao, preco, vencimento, imagem ) values
('02', '2', 'pao frances', '2', ' 2022/02/22', ' ');


insert into funcionario (email, senha) values
( 'heitor@gmail.com', 'heitorzinho1234');

insert into obs(email, nome, assunto, observacao) values
('joao@', 'joao', 'pao', 'legal');

    /*select*/
select * from cliente;
select * from endereco;
select * from contato;
select * from pedido;
select * from produto;

/*alterar tabelas*/
alter table contato add foreign key (cpf) references cliente(cpf);
alter table cliente add foreign key (email) references contato(email);
alter table contato add foreign key (cpf) references cliente(cpf);
alter table endereco add foreign key (cpf) references cliente(cpf);
alter table pedido add foreign key (cpf) references cliente(cpf);
alter table pedido add foreign key (id) references produto(id);



/*inner join */
select cliente.cpf, cliente.nome, endereco.rua, contato.telefone, pedido.id
from pedido 
inner join cliente on pedido.cpf= cliente.cpf
inner join endereco on endereco.cpf= cliente.cpf
inner join contato on contato.cpf= cliente.cpf;

select cliente.cpf, cliente.nome, cliente.nascimento, cliente.email, contato.telefone, endereco.rua, endereco.cidade
from cliente
inner join contato on contato.email= cliente.email
inner join endereco on endereco.cpf= cliente.cpf
where cliente.cpf=12345678963;

select * from pedido 
inner join endereco on endereco.cpf= pedido.cpf;

/*mostrar tabelas com dados*/
select * from cliente;
select * from contato;
select * from endereco;
select * from funcionario;

/*mostrar tabelas*/
desc cliente;
desc contato;
desc endereco;
desc pedido;
desc contato;
desc endereco;

