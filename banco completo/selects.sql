use db_controleDeEstoque;

-- select categorias -- 
select * from tb_categoria order by nm_categoria asc;

select * from tb_categoria order by cd_categoria;

-- select marcas --
select * from tb_marca order by nm_marca asc;

select * from tb_marca order by cd_marca;

-- select fornecedores--

select * from tb_fornecedor order by nm_fornecedor asc;

select * from tb_fornecedor order by cd_fornecedor;

select * from tb_fornecedor order by nm_contato;

select * from tb_fornecedor order by nr_telefone;

select * from tb_fornecedor order by nm_email;

-- select unidades de produto --

select * from tb_unidadeProduto order by nm_unidadeProduto asc;

select * from tb_unidadeProduto order by cd_unidadeProduto;

-- select produtos --
select * from tb_produto order by nm_produto asc;

select * from tb_produto order by cd_produto;

select * from tb_produto order by nr_lote;

select * from tb_produto order by nm_local;

select * from tb_produto order by dt_validade desc;

select * from tb_produto where dt_validade > date(now()) order by dt_validade desc;

select * from tb_produto where dt_validade > date(now()) order by dt_validade asc;

select * from tb_produto where dt_validade > date(now()) and week(dt_validade) = week(now())    order by dt_validade;

select * from tb_produto where dt_validade = date(now()) order by dt_validade;

select * from tb_produto where month(dt_validade) >= month(now()) and month(dt_validade) = month(now())    order by dt_validade;

select * from tb_produto where dt_validade between date(now()) and date_add(date(now()),interval 30 day);

select date(now());

select * from tb_produto order by nr_quantidadeEmEstoque;


-- selects tipo de usuarios --

select * from tb_tipoUsuario order by nm_tipoUsuario;

select * from tb_tipoUsuario order by cd_tipoUsuario;

select nm_usuario, nm_tipoUsuario, ds_status from tb_usuario,tb_tipoUsuario where tb_usuario.id_tipoUsuario = tb_tipoUsuario.cd_tipoUsuario order by ds_status;

-- selects tipo de saida --

select * from tb_tipoSaida order by nm_tipoSaida;

-- selects saidas --

select * from tb_saida, tb_tipoSaida where tb_saida.id_tipoSaida = tb_tipoSaida.cd_tipoSaida order by nm_tipoSaida;

select * from tb_saida, tb_produto where tb_saida.id_produto = tb_produto.cd_produto order by nm_produto;

select * from tb_saida order by qt_produto_saida;

select * from tb_saida order by dt_saida;

select * from tb_saida where day(dt_saida) = 5 order by dt_saida;

select * from tb_saida where month(dt_saida) = 7 order by dt_saida;

select * from tb_saida where week(dt_saida) = week(now()) order by dt_saida;

select * from tb_saida where month(dt_saida) = month(now()) order by dt_saida;

select * from tb_saida where dt_saida = date(now()) order by dt_saida;

select cd_saida, qt_produto_saida,vl_unitario,vl_total,dt_saida,ds_observacao,id_usuario,nm_usuario,id_produto,id_tipoSaida  from tb_saida, tb_usuario where tb_saida.id_usuario = tb_usuario.cd_usuario order by nm_usuario;

select * from tb_saida order by id_tipoSaida;

select sum(qt_produto_saida) As totalVendido, nm_produto from tb_saida, tb_produto where tb_saida.id_produto = tb_produto.cd_produto group by nm_produto order by totalVendido desc;

select sum(qt_produto_saida) As totalVendido, nm_produto from tb_saida, tb_produto where month(dt_saida) = month(now())  and tb_saida.id_produto = tb_produto.cd_produto group by nm_produto order by totalVendido desc; 

select sum(qt_produto_saida) As totalVendido, nm_produto from tb_saida, tb_produto where week(dt_saida) = week(now())  and tb_saida.id_produto = tb_produto.cd_produto group by nm_produto order by totalVendido desc;

select sum(qt_produto_saida) As totalVendido, nm_produto from tb_saida, tb_produto where dt_saida = date(now())  and tb_saida.id_produto = tb_produto.cd_produto group by nm_produto order by totalVendido desc;  
 
