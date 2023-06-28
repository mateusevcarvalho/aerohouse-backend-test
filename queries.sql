# a) O nome da organização que foi fundada por ultimo
select nome from organizacao o order by data_fundacao desc limit 1;

# b) O nome do colaborador com salário maior
select nome from colaborador order by salario desc limit 1;

# c) O nome e data de nascimento dos colaboradores ordenada por salário, do maior para o menor.
select nome, data_nascimento from colaborador order by salario desc;

# d) A idade dos colaboradoes
select TIMESTAMPDIFF(YEAR, data_nascimento, CURDATE()) as idade from colaborador;

# e) O nome dos colaboradores e da empresa que ele faz parte
select c.nome as colaborador, o.nome as organizacao from colaborador c inner join organizacao o on c.organizacao_id = o.id;

# 2 - Escreva uma query que encontre a organização que paga o maior salário
select o.nome from organizacao o
inner join colaborador c on o.id = c.organizacao_id
group by o.nome
having max(c.salario) = (select max(salario) from colaborador);

# 3 - Escreva uma query que encontre a média de salários pagos por cada empresa
select o.nome, AVG(c.salario) as media_salario from organizacao o
inner join colaborador c on o.id = c.organizacao_id
group by o.nome;

# 4 - Escreva uma query que encontre a organização que tem o funcionário mais novo
select o.nome from organizacao o
inner join colaborador c on o.id = c.organizacao_id
group by o.nome
having min(c.data_nascimento) = (select min(data_nascimento) from colaborador);