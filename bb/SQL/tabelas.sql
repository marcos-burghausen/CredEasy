create schema credeasy;

    -- criando tabela cliente
create table cliente (
    -- NOME_CAMPO TIPO RESTRIÇÕES    
    nome varchar(255) not null,
    cpf varchar(14) not null primary key,
    ddd integer not null,
    numero integer not null,
    profissao varchar(255) not null,
    renda decimal(10,2) not null,
    endereço varchar(255) not null
);

    -- criando tabela emprestimo
create table emprestimo (
	-- NOME_CAMPO TIPO RESTRIÇÕES 
    id bigint not null auto_increment,
    valor decimal(10,2) not null,
    taxa_juros decimal(10,2) not null,
    valor_final decimal(10,2),
    data_solicitacao date not null,
    data_quitacao date,
    status varchar(20) not null,
    cpf_cliente varchar(14) not null,
    primary key (id),
    unique (cpf_cliente, data_solicitacao),
    foreign key cliente_fk (cpf_cliente)  
        references cliente (cpf)
);

	-- criando tabela parcela
create table parcela (
	-- NOME_CAMPO TIPO RESTRIÇÕES 
    valor decimal(10,2) not null,
    numero int not null,
    data_vencimento date not null,
    data_pagamento date,
    multa decimal(10,2),
    valor_pago decimal(10,2),
    status varchar(20) not null,
    emprestimo_id bigint not null,
    primary key (numero, emprestimo_id),
    foreign key emprestimo_fk (emprestimo_id)
        references emprestimo (id)
);

	-- adcionando coluna na tabela cliente
alter table cliente add column email varchar(255) not null;
alter table cliente add column senha varchar(255) not null;
alter table cliente add column tipo_usuario varchar(20) not null default 'COMUM';

alter table cliente add constraint unique (email);

	-- inserindo clientes
insert into cliente 
    (cpf, nome, ddd, numero, profissao, renda, endereço, email, senha, tipo_usuario)
values
    ('111.111.111-11', 'ana', 54, 12341234, 'Engenheira de dados', 8000, 'Rua A', 'ana@gmail.com', '123456', 'COMUM');

insert into cliente 
    (cpf, nome, ddd, numero, profissao, renda, endereço, email, senha, tipo_usuario)
values
    ('222.222.222-22', 'bia', 51, 77778888, 'Programadora, Fullstack', 12000, 'Rua B', 'bia@gmail.com', '159357', 'GESTOR');
    
insert into cliente 
    (cpf, nome, ddd, numero, profissao, renda, endereço, email, senha)
values
    ('333.333.333-33', 'caio', 54, 99998888, 'Engenheiro DevOps', 10000, 'Rua C', 'caio@gmail.com', '123123');

insert into cliente 
    (cpf, nome, ddd, numero, profissao, renda, endereço, email, senha, tipo_usuario)
values
    ('444.444.444-44', 'marcos', 54, 23452345, 'Analista', 8000, 'Rua D', 'marcos@gmail.com', '123321', 'COMUM');

insert into cliente 
    (cpf, nome, ddd, numero, profissao, renda, endereço, email, senha, tipo_usuario)
values
    ('555.555.555-55', 'estela', 51, 11119999, 'secretaria', 5000, 'Rua E', 'estela@gmail.com', '987654', 'COMUM');
    
insert into cliente 
    (cpf, nome, ddd, numero, profissao, renda, endereço, email, senha)
values
    ('666.666.666-66', 'sofia', 54, 22228888, 'Professora', 10000, 'Rua F', 'sofia@gmail.com', '937495');

	-- selecionando tods os registro de uma determinada tabela
select * from cliente;
	
    -- selecionar determinados campos em uma tabela
select nome, renda from cliente;

	-- Selecionar somente os usuários GESTOR
select * from cliente where tipo_usuario = 'GESTOR';

	-- selecionar todos os usuários não GESTOR
select * from cliente where tipo_usuario != 'GESTOR';

	--  ADCIONANDO EMPRÉSTIMO
insert into emprestimo 
    (valor, taxa_juros, data_solicitacao, status, cpf_cliente)
values
    (550, 0, '2020-05-10', 'SOLICITADO', '222.222.222-22');

insert into emprestimo 
    (valor, taxa_juros, data_solicitacao, status, cpf_cliente)
values
    (1150, 0, '2021-05-10', 'APROVADO', '333.333.333-33');

insert into emprestimo 
    (valor, taxa_juros, data_solicitacao, status, cpf_cliente)
values
    (6000, 10, '2022-05-10', 'SOLICITADO', '111.111.111-11');
    
insert into emprestimo 
    (valor, taxa_juros, data_solicitacao, status, cpf_cliente)
values
    (3000, 8, '2022-04-10', 'APROVADO', '111.111.111-11');

insert into emprestimo 
    (valor, taxa_juros, data_solicitacao, status, cpf_cliente)
values
    (5000, 8, '2021-04-11', 'APROVADO', '444.444.444-44');

insert into emprestimo 
    (valor, taxa_juros, data_solicitacao, status, cpf_cliente)
values
    (25000, 8, '2021-10-11', 'APROVADO', '555.555.555-55');

insert into emprestimo 
    (valor, taxa_juros, data_solicitacao, status, cpf_cliente)
values
    (15000, 0, '2022-1-11', 'APROVADO', '666.666.666-66');
    
    insert into emprestimo 
    (valor, taxa_juros, data_solicitacao, status, cpf_cliente)
values
    (15000, 0, '2021-11-11', 'REJEITADO', '666.666.666-66');

select * from emprestimo;
	
    -- ATUALIZAR um registro: UPDATE <tabela> set campo1 = novo_valor...;
update emprestimo 
   set status = 'QUITADO'
 where id = 1;
 update emprestimo 
   set status = 'LIBERADO'
 where id = 7;

