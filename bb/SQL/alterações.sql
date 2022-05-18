	-- adcionando coluna na tabela cliente
alter table cliente add column email varchar(255) not null;
alter table cliente add column senha varchar(255) not null;
alter table cliente add column tipo_usuario varchar(20) not null default 'COMUM';

alter table cliente add constraint unique (email);
