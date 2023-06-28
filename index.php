<?php

require_once 'vendor/autoload.php';

use app\Pessoa;
use app\QueryBuilder;

echo "<h3>Funções e arrays</h3>";

//1 - Dado o array de funcionarios abaixo, escreva:
$funcionarios = [
    [
        'nome' => 'Alessandra',
        'idade' => 18,
        'organizacao' => '1',
        'salario' => '5000'
    ],
    [
        'nome' => 'Leandro',
        'idade' => 25,
        'organizacao' => '3',
        'salario' => '1900',
    ],
    [
        'nome' => 'Bruno',
        'idade' => 23,
        'organizacao' => '1',
        'salario' => '1800',
    ],
    [
        'nome' => 'Gustavo',
        'idade' => 20,
        'organizacao' => '2',
        'salario' => '2000',
    ]
];

// a) Uma função que retorne o nome do funcionário mais jovem;
$funcionanarioMaisJovem = funcionarioMaisJovem($funcionarios);
echo "a). Funcionário(a) mais jovem é: {$funcionanarioMaisJovem['nome']} com {$funcionanarioMaisJovem['idade']} anos de idade.";
echo "<hr>";

// b) Uma função que gere um novo array agrupando os funcionarios por organizacao (organização como index);
echo 'b). Funcionarios agrupados por organização: ' . PHP_EOL;
var_dump(agruparFuncionariosPorOrganizacao($funcionarios));
echo "<hr>";

//c) Uma função que retorne a média de salários
$mediaSalarios = calcularMediaSalarios($funcionarios);
echo "c). A média de salários é: " . $mediaSalarios;
echo "<hr>";

//d) Uma função que ordene os funcionarios pelo nome;
echo 'd). Funcionarios ordenados por nome: ' . PHP_EOL;
var_dump(ordenarFuncionariosPorNome($funcionarios));
echo "<hr>";
echo "<h3>Funções recursivas</h3>";

// 2 - Crie uma função para imprimir em tela o menor número inteiro divisível
// por 4, 5 e 6 ao mesmo tempo, utilizando as seguintes técnicas:
// - Recurção
// - Com laços de repetição.
$menorDivisivelRecursivo = encontrarMenorDivisivelRecursivo();
echo "Menor número divisível (Recursivo): " . $menorDivisivelRecursivo;
echo "<hr>";

$menorDivisivelLoop = encontrarMenorDivisivelLoop();
echo "Menor número divisível (Loop): " . $menorDivisivelLoop;

echo "<hr>";
echo "Qual técnica gastaria mais desempenho da máquina? <br>";
echo "Em geral, a recursividade pode consumir mais recursos e ter um desempenho inferior em comparação com loops em PHP"
    . ", devido ao custo adicional das chamadas de função recursivas e à criação de pilha de chamadas.";

echo "<hr>";
echo "<h3>Orientação a objeto e Padrão de projeto</h3>";

$query = (new QueryBuilder())
    ->select('*')
    ->from('funcionarios')
    ->where('idade >= 18')
    ->build();

echo "4 - Descreva e utilize um padrão de projeto de sua escolha para encapsular a criação da sua classe. <br>";

echo 'Método concatenado: ' . $query->toSql() . " <br>";

echo "No exemplo de uso, utilizei o <b>padrão Builder</b> para criar uma instância de Query de forma fluente. "
    . "O <b>Builder</b> é um padrão de projeto criacional, que permite a construção de objetos complexos passo a passo.";


echo "<hr>";
echo "<h3>Melhoria de código</h3>";

$pessoa = new Pessoa(
    'Mateus Carvalho',
    'Aerohouse',
    '(31) 99124-3832',
    'mateusev.carvalho@gmail.com',
    ['PHP', 'Laravel', 'Docker', 'GIT']
);

$pessoa->armazenarConhecimentos(['Linux', 'AWS', 'Vue.js', 'Flutter']);
var_dump($pessoa->retornarConhecimentos());

echo "<hr>";
echo "<h3>Questões de sql se encontra no arquivo 'queries.sql' na raiz do projeto</h3>";