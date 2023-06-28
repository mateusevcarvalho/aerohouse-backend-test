<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testEncontrarMenorDivisivelRecursivo()
    {
        $resultado = encontrarMenorDivisivelRecursivo();
        $this->assertEquals(60, $resultado);
    }

    public function testCalcularMediaSalarios()
    {
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

        $resultado = calcularMediaSalarios($funcionarios);
        $this->assertEquals(2675, $resultado);
    }
}