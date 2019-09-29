drop database if exists db_controleDeEstoque;
create database if not exists db_controleDeEstoque;
use db_controleDeEstoque;

create table tb_fornecedor(
cd_fornecedor int not null auto_increment primary key,
nm_fornecedor varchar(50) not null,
nm_contato varchar(50) not null,
nr_telefone varchar(50),
nm_email varchar(140)
);
create table tb_unidadeProduto(
cd_unidadeProduto int not null auto_increment primary key,
nm_unidadeProduto varchar(50) not null
);
create table tb_categoria(
cd_categoria int not null auto_increment primary key,
nm_categoria varchar(50) not null,
img_categoria varchar(200) not null
);
create table tb_marca(
cd_marca int not null auto_increment primary key,
nm_marca varchar(50) not null,
img_marca varchar(200) not null
);
create table tb_tipoSaida(
cd_tipoSaida int not null auto_increment primary key,
nm_tipoSaida varchar(50) not null
);
create table tb_tipoUsuario(
cd_tipoUsuario int not null auto_increment primary key,
nm_tipoUsuario varchar(50) not null
);
create table tb_produto(
cd_produto int not null auto_increment primary key,
nm_produto varchar(50) not null,
ds_produto varchar(200) not null,
dt_fabricacao date not null,
dt_validade date,
nr_lote varchar(20) not null,
nr_quantidadeEmEstoque int not null,
nm_local varchar(50) not null,
vl_venda decimal(10,2) not null,
img_produto varchar(200) not null,
id_unidadeProduto int not null,
id_categoria int not null,
id_marca int not null,
foreign key (id_unidadeProduto) references tb_unidadeProduto (cd_unidadeProduto),
foreign key (id_categoria) references tb_categoria (cd_categoria),
foreign key (id_marca) references tb_marca (cd_marca)
);
create table tb_fornecedor_produto(
id_fornecedor int not null,
id_produto int not null,
foreign key (id_fornecedor) references tb_fornecedor (cd_fornecedor),
foreign key (id_produto) references tb_produto (cd_produto)
);
create table tb_usuario(
cd_usuario int not null auto_increment primary key,
nm_usuario varchar(100) not null,
nr_telefone varchar(20) not null,
nm_login varchar(30) not null,
nm_senha varchar(16) not null,
img_usuario varchar(200) not null,
ds_status varchar(150),
id_tipoUsuario int not null,
foreign key (id_tipoUsuario) references tb_tipoUsuario (cd_tipoUsuario)
);
create table tb_entrada(
cd_entrada int not null auto_increment primary key,
qt_produto_entrada int(10) not null,
vl_compra decimal(10,2) not null,
dt_entrada date not null,
id_fornecedor int not null,
id_usuario int not null,
id_produto int not null,
foreign key (id_fornecedor) references tb_fornecedor (cd_fornecedor),
foreign key (id_usuario) references tb_usuario (cd_usuario),
foreign key (id_produto) references tb_produto (cd_produto)
);
create table tb_saida(
cd_saida int not null auto_increment primary key,
qt_produto_saida int(10) not null,
vl_unitario decimal(10,2) not null,
vl_total decimal(10,2) not null,
dt_saida date not null,
ds_observacao varchar(150),
id_usuario int not null,
id_produto int not null,
id_tipoSaida int not null,
foreign key (id_usuario) references tb_usuario (cd_usuario),
foreign key (id_produto) references tb_produto (cd_produto),
foreign key (id_tipoSaida) references tb_tipoSaida (cd_tipoSaida)
);