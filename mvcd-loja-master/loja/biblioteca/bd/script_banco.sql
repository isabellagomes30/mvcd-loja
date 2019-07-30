drop database if exists loja;
create database loja;
use loja;

create table usuario (
idUsuario int(11) not null auto_increment,
nomeUsuario varchar(60) not null,
email varchar(60) not null,
senha varchar(60) not null,
cpf varchar(60) not null,
datadenascimento varchar(10) not null,
sexo varchar(60) not null,
tipoUsuario varchar(5) not null,
primary key (idUsuario)
);

Create table categoria(
idcategoria int auto_increment  not null,
descricao varchar (50) not null,
primary key (idcategoria)
);

create table produtos (
idproduto int(11) auto_increment not null,
idcategoria int  not null,
preco double not null,
nomeproduto varchar(30) not null,
descricao varchar(60) not null,
imagem varchar(60) not null,
estoque_minimo int(11) not null,
estoque_maximo int(11) not null,
primary key (idproduto),
foreign key(idcategoria) references categoria(idcategoria) 
);

Create table log_produto(
id_Log int (11) auto_increment  not null,
Tabela varchar (45) not null,
Usuario varchar (45) not null,
Data_Hora Datetime not null,
Acao varchar (45) not null,
Dados varchar (100) not null,
primary key (id_Log)
);


Create table cupom(
idcupom int (11) auto_increment  not null,
nomecupom varchar (60) not null,
desconto int (11) not null,
primary key (idcupom)
);


create table endereco(
idendereco int(11) not null auto_increment,
idusuario int(11) not null,
logradouro varchar(60) not null,
numero varchar(7) not null,
complemento varchar(60) not null,
bairro varchar(60) not null,
cidade varchar(60) not null,
cep varchar(60) not null,
primary key(idendereco),
foreign key(idusuario) references usuario(idusuario) on delete cascade on update cascade
);


Create table pedido (
idPedido int (11) auto_increment  not null,
idUsuario int(11) not null,
idendereco int(11) not null,
datacompra date not null,
primary key (idPedido),
foreign key(idusuario) references usuario(idusuario) on delete cascade on update cascade,
foreign key(idendereco) references endereco(idendereco) on delete cascade on update cascade
);



Create table estoque(
idestoque int (11) auto_increment  not null,
idproduto int (11) not null,
qtde int (11) not null,
primary key (idestoque),
foreign key(idproduto) references produtos(idproduto) on delete cascade on update cascade
);



Create table pedido_produto (
idproduto int(11) auto_increment not null,
idpedido int (11)  not null,
quantidade int(11) not null,
foreign key(idproduto) references produtos(idproduto) on delete cascade on update cascade,
foreign key(idpedido) references pedido(idpedido) on delete cascade on update cascade
);