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