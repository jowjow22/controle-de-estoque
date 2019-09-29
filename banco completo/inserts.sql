use db_controleDeEstoque;
-- tipos de usuarios --
insert into tb_tipoUsuario (nm_tipoUsuario) values
("Estoquista"),
("Atendente"),
("Gerente");

-- categorias --
insert into tb_categoria (nm_categoria, img_categoria)values 
("limpezas","https://image.flaticon.com/icons/png/512/26/26218.png"),
("alimentícios","https://image.flaticon.com/icons/png/512/98/98017.png"),
("higiene","https://image.flaticon.com/icons/png/512/99/99961.png"),
("eletrodomésticos","https://image.flaticon.com/icons/png/512/26/26116.png"),
("eletrônicos","https://image.flaticon.com/icons/png/512/127/127891.png");

-- marca --

insert into tb_marca (nm_marca, img_marca) values
("Ypê","https://noticiasdeindaiatuba.com.br/wp-content/uploads/2019/06/ype-esta-com-vagas-de-emprego-para-operador-de-empilhadeira-em-salto.png"),
("Bombril","https://consultoriapontoc.com.br/wp-content/uploads/2018/09/Logo-Bombril.png"),
("Piracanjuba","https://d1.awsstatic.com/case-studies/Latam%20Cases%20Assets/PIRACANJUBA.e4e82919861bb14cec02728e99ca9b5653bb3909.png"),
("Panco","http://www.projex.com.br/wp-content/uploads/2014/01/17.png"),
("P&G","https://midwestservicesupply.files.wordpress.com/2015/07/pg-logo.png"),
("Colgate","https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Colgate_logo_red.svg/1280px-Colgate_logo_red.svg.png"),
("Electrolux","https://logodownload.org/wp-content/uploads/2017/04/electrolux-logo-2.png"),
("Consul","https://logodownload.org/wp-content/uploads/2014/04/consul-logo-1-1.png"),
("Samsung","https://i.pinimg.com/originals/91/44/7a/91447a1a8dd13f402d5c51f4012618d4.png"),
("Motorola","https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Motorola_logo.svg/1280px-Motorola_logo.svg.png"),
("Camil","http://ri.camilalimentos.com.br/wp-content/uploads/sites/3/2017/07/logo_camil.png");

-- fornecedores --
insert into tb_fornecedor (nm_fornecedor, nm_contato, nr_telefone, nm_email) values
("Crispel Distribuidora","Crispel Orçamento","(11) 2348-2222","contatos@crispeldistribuidora.com.br"),
("PMG ATACADISTA","PMG Contato","(11)5645-0000","supervisao.compras@pmg.com.br"),
("Macro Distribuidora","Macro Vendas","(65) 3648-3000","vendas04@macrovirtual.com.br");

-- unidade produto --
insert into tb_unidadeProduto (nm_unidadeProduto) values 
("Fardo"),
("pacote"),
("engradado"),
("fracionado"),
("peso");

-- usuario -- 

insert into tb_usuario (nm_usuario, nr_telefone, nm_login, nm_senha, img_usuario, ds_status, id_tipoUsuario) values
("Maria Santos","13 997356975","Mari","mari1520","usuarios/mari.jpg","ativo", 1 ),
("João Silva","13 99658742","Jhon","jJonajaiminho","usuarios/jhon.jpg","ativo", 2 ),
("Gabriel Stain","13 991579514","Gabriel","gab9514","usuarios.gabriel.jpg","ativo", 3 );

-- produtos --
insert into tb_produto values
(null,"Geladeira","geladeira bivolt com regulador automatico de temperatura",'2018/03/20',null,"L05",4,"setor 2ED",2455.99,"produtos/geladeiraEletrolux",4,4,7),
(null,"Arroz","Arroz branco simples 5kg",'2018/09/15','2019/09/06',"L07",50,"setor 1AL",5.99,"produtos/arrozCamil",2,2,11),
(null,"Feijão","feijão carioca simples 1kg",'2019/02/01','2019/08/01',"L08",50,"setor 1AL",4.50,"produtos/feijaoCamil",2,2,11),
(null,"Mouse","mouse samsumg speed acabamento em coro sem fio",'2019/03/05',null,"L10",10,"setor 3EL",550.00,"produtos/mouseSamsumg",4,5,9),
(null,"fogão","fogão eletrico consul preto",'2019/08/08',null,"L05",5,"setor 2ED",955.99,"produtos/fogaoConsul",4,4,8),
(null,"liquidificador","liquidificador consul bivolt 4 niveis",'2019/07/24',null,"L05",20,"setor 2ED",150.99,"produtos/liquidificadorConsul",4,4,8),
(null,"gilette mach 3","gilette mach 3 hidratante",'2019/02/22',null,"L06",60,"setor 4HG",4.50,"produtos/giletteMach3",4,3,5),
(null,"papel hígiênico charmin","papel higienico charmin perfumado",'2019/02/05',null,"L06",50,"setor 4HG",5.99,"produtos/papelHigienico",2,3,5),
(null,"fralda pamppers","fralda pamppers grande",'2019/05/16',null,"L06",40,"setor 4HG",8.50,"produtos/fraldaPamppers",2,3,5),
(null,"absorvente","absorvente always",'2019/02/03','2019/11/25',"L06",30,"setor 4HG",3.50,"produtos/absorventeAlways",2,3,5),
(null,"amaciante","amaciante downy sport",'2019/07/28',null,"L06",50,"setor 4HG",6.99,"produtos/amacianteDownySport",4,3,5),
(null,"Oral-B","Creme dental Oral-b",'2019/05/09','2019/07/02',"L06",30,"setor 4HG",3.00,"produtos/Oral-b",4,3,5),
(null,"Escova Oral-b","escova oral-b com cerdas macias",'2019/02/08','2019/09/19',"L06",20,"setor 4HG",3.30,"produtos/escovaOral-B",4,3,5),
(null,"notebook","notebook essentials 3e",'2017/02/17',null,"L10",5,"setor 3EL",1655.50,"produtos/notebookEssentials",4,5,9),
(null,"smartphone j8","smartphone j8 samsung preto",'2018/12/25',null,"L10",6,"setor 3EL",1399.99,"produtos/samsungJ8",4,5,9),
(null,"detergente","detergente ypê",'2018/09/07','2019/01/05',"L07",30,"setor 5LP",2.50,"produtos/detergenteYpê",4,1,1),
(null,"palha de aço","palha de aço bombril",'2019/03/03','2019/09/20',"L08",20,"setor 5LP",3.80,"produtos/palhaDeAçoBB",4,1,2),
(null,"pão de forma","pão de forma panco com grãos",'2019/08/11','2019/10/21',"L09",60,"setor 1AL",4.50,"produtos/pãoDeFormaPanco",2,2,4),
(null,"smartphone moto g7 plus","smartphone motorola camera 16mp 64gb de memoria",'2019/02/22',null,"L11",10,"setor 3EL",1100.50,"produtos/motorolaG7Plus",4,5,9),
(null,"leite uht","Leite integral com baixa gordura",'2019/05/03','2019/08/17',"L11",50,"setor 1AL",4.50,"produtos/leitePiracanjubaUHT",4,1,3);

-- tipo saida --
insert into tb_tipoSaida values
(null,"Vendido"),
(null,"Danificado"),
(null,"Vencido");


-- saida -- 
delimiter $
create trigger trg_saida_insert after insert
on tb_saida
for each row
begin
update tb_produto set nr_quantidadeEmEstoque = nr_quantidadeEmEstoque - new.qt_produto_saida
where cd_produto = new.id_produto;
end$
DELIMITER ;
-- entrada --
delimiter $$
create trigger trg_entrada_insert after insert
on tb_entrada
for each row
begin
update tb_produto set nr_quantidadeEmEstoque = nr_quantidadeEmEstoque + new.qt_produto_entrada
where cd_produto = new.id_produto;
end$$
DELIMITER ;
insert into tb_entrada values 
(null, 3, 7684.99,'2019/06/22', 3,1,1),
(null, 20, 600.00,'2019/09/10', 2,1,2),
(null, 50, 570.99,'2019/03/04', 1,1,7),
(null, 3, 5608.50,'2019/02/08', 3,1,5),
(null, 30, 450.81,'2019/05/16', 1,1,8),
(null, 30, 490.70,'2019/09/30', 2,1,18),
(null, 60, 380.99,'2019/08/04', 1,1,16),
(null, 40, 690.59,'2019/01/25', 1,1,11),
(null, 10, 1350.60,'2019/11/17', 3,1,6),
(null, 15, 70.99,'2019/09/09', 2,1,20);

-- saida--

insert into tb_saida values 
(null,3,4.50,13.50,'2019/07/10',"produto vencido, descartado para o lixo",1,3,3),
(null,1,550.00,550.00,date(now()),"produto danificado, retornado para a fornecedora",1,4,2),
(null,5,5.50,27.50,'2019/06/05',"produto vendido, recebimento em dinheiro",2,2,1),
(null,3,16.50,27.50,'2019/08/08',"produto vendido, recebimento em dinheiro",2,2,1);
select * from tb_produto order by nr_lote;
select * from tb_saida order by qt_produto_saida desc limit 1;
-- 1 produto de limpeza, 2alimenticio, 3 eletrodo