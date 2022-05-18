	-- selecionando tods os registro de uma determinada tabela
select * from cliente;
	
    -- selecionar determinados campos em uma tabela
select nome, renda from cliente;

	-- Selecionar somente os usuários GESTOR
select * from cliente where tipo_usuario = 'GESTOR';

	-- selecionar todos os usuários não GESTOR
select * from cliente where tipo_usuario != 'GESTOR';