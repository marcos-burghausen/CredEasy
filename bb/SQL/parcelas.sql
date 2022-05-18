-- INSERINDO AS  PARCELAS
insert into parcela 
    (valor, numero, data_vencimento, data_pagamento, multa, valor_pago, status, emprestimo_id)
values
    (350, 1, '2021-05-10', '2021-05-10', 0, 350, 'PAGA', 1);

insert into parcela 
    (valor, numero, data_vencimento, data_pagamento, multa, valor_pago, status, emprestimo_id)
values
    (200, 2, '2022-05-10', '2022-05-10', 0, 200, 'PAGA', 1);
    
insert into parcela 
    (valor, numero, data_vencimento, data_pagamento, multa, valor_pago, status, emprestimo_id)
values
    (600, 1, '2021-06-10', '2021-06-10', 0, 600, 'PAGA', 2);
    
insert into parcela 
    (valor, numero, data_vencimento, data_pagamento, multa, valor_pago, status, emprestimo_id)
values
    (550, 1, '2021-07-10', '2021-07-10', 0, 550, 'PAGA', 2);
    
insert into parcela 
    (valor, numero, data_vencimento, status, emprestimo_id)
values
    (6000, 1, '2022-06-10', 'ABERTA', 3);
    
insert into parcela 
    (valor, numero, data_vencimento, status, emprestimo_id)
values
    (1500, 1, '2022-05-10', 'ABERTA', 4);
    
insert into parcela 
    (valor, numero, data_vencimento, status, emprestimo_id)
values
    (1500, 2, '2022-06-10', 'ABERTA', 4);
    
select * from parcela;