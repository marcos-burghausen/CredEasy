    -- ATUALIZAR um registro: UPDATE <tabela> set campo1 = novo_valor...;
update emprestimo 
   set status = 'QUITADO'
 where id = 1;
 update emprestimo 
   set status = 'LIBERADO'
 where id = 7;