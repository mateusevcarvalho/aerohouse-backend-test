<?php

function funcionarioMaisJovem(array $funcionarios)
{
    if (count($funcionarios)) {
        usort($funcionarios, function ($a, $b) {
            return $a['idade'] - $b['idade'];
        });

        return $funcionarios[0];
    }

    return null;
}

function agruparFuncionariosPorOrganizacao(array $funcionarios): array
{
    $agrupados = [];
    foreach ($funcionarios as $funcionario) {
        $organizacao = $funcionario['organizacao'];
        if (!isset($agrupados[$organizacao])) {
            $agrupados[$organizacao] = [];
        }

        $agrupados[$organizacao][] = $funcionario;
    }

    return $agrupados;
}

function calcularMediaSalarios($funcionarios)
{
    $numFuncionarios = count($funcionarios);
    $totalSalarios = array_sum(array_column($funcionarios, 'salario'));
    return $totalSalarios / $numFuncionarios;
}

function ordenarFuncionariosPorNome($funcionarios)
{
    usort($funcionarios, function ($a, $b) {
        return $a['nome'] > $b['nome'];
    });

    return $funcionarios;
}

function encontrarMenorDivisivelRecursivo($n = 1)
{
    if ($n % 4 === 0 && $n % 5 === 0 && $n % 6 === 0) {
        return $n;
    }

    return encontrarMenorDivisivelRecursivo($n + 1);
}

function encontrarMenorDivisivelLoop(): int
{
    $n = 1;
    while (true) {
        if ($n % 4 == 0 && $n % 5 == 0 && $n % 6 == 0) {
            return $n;
        }

        $n++;
    }
}