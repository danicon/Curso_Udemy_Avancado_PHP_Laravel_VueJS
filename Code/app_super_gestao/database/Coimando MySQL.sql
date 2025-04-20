create database sg
use sg

select * from migrations;

describe fornecedores
select * from fornecedores
describe site_contatos
truncate site_contatos;
select * from site_contatos
select * from site_contatos where nome <> 'Fernando' and motivo_contato in(1,2) and created_at between '2024-11-01 00:00:00' and '2024-11-30 23:59:59';
select * from motivo_contatos;
select * from log_acessos;
select * from users;
select * from produtos;
describe produtos;
describe produto_detalhes;
select * from produto_detalhes;
select * from unidades;
insert into users(name, email, password) values ('Daniel', 'daniel@contato.com.br', '1234');
select * from clientes;
select * from pedidos;
select * from pedidos_produtos;

select 
	b.id as pedido_id,
    c.id as produto_id,
    c.nome
from 
	pedidos_produtos as a
    left join pedidos as b on (a.pedido_id = b.id)
    left join produtos as c on (a.produto_id = c.id);

select 
	* 
from 
	site_contatos 
where 
	nome <> 'Fernando' 
    or motivo_contato in(1,2) 
    or created_at between '2024-11-01 00:00:00' and '2024-11-30 23:59:59';
    
select 
	* 
from 
	site_contatos 
where 
	updated_at is not null;
    
select 
	* 
from 
	site_contatos 
where
	(nome = 'Jorge'	or nome = 'Ana') and (motivo_contato in (1, 2) or id between 4 and 6)
    /*nome = 'Jorge'	or nome = 'Ana' and motivo_contato in (1, 2) or id between 4 and 6*/
    
    where('nome', 'Jorge')->orWhere('nome', 'Ana')->whereIn('motivo_contato', [1,2])->orWhereBetween('id', [4,6])

    
/* where (comparação) operadores logicos (comparação)
>
<
>=
<=
<>
==
like
*/
describe produtos
describe produto_detalhes
describe filiais
describe produto_filiais

alter table fornecedores add ..

alter table produto drop column unidade_id

DROP TABLE `unidades`;




use sg;

insert into site_contatos(nome, telefone, email, motivo_contato, mensagem)values('João', '(88) 91111-2222', 'joao@contato.com.br', 3, 'É muito difícil localizar a opção de listar todos os produtos');
insert into site_contatos(nome, telefone, email, motivo_contato, mensagem)values('Rosa', '(33) 92222-3333', 'rosa@contato.com.br', 1, 'Quando custa essa aplicação?');
insert into site_contatos(nome, telefone, email, motivo_contato, mensagem)values('Fernando', '(11) 94444-5555', 'fernando@contato.com.br', 1, 'Como consigo criar multiplos usuários para minha empresa?');
insert into site_contatos(nome, telefone, email, motivo_contato, mensagem)values('André', '(88) 95555-6666', 'andre@contato.com.br', 2, 'Parabéns pela ferramenta, estou obtendo ótimos resultados!');
insert into site_contatos(nome, telefone, email, motivo_contato, mensagem)values('Ana', '(33) 96666-7777', 'ana@contato.com.br', 3, 'Não gostei muito das cores, consigo mudar de tema?');
insert into site_contatos(nome, telefone, email, motivo_contato, mensagem)values('Helena', '(11) 97777-8888', 'helena@contato.com.br', 2, 'Consigo controlar toda a minha empresa de modo fácil e prático.');