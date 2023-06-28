<?php

namespace app;

class Pessoa
{
    private $nome;
    private $organizacao;
    private $telefone;
    private $email;
    private $conhecimentos = [];

    /**
     * @param string $nome
     * @param string $organizacao
     * @param string $telefone
     * @param string $email
     * @param array $conhecimentos
     */
    public function __construct(string $nome, string $organizacao, string $telefone, string $email, array $conhecimentos)
    {
        $this->nome = $nome;
        $this->organizacao = $organizacao;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->conhecimentos = $conhecimentos;
    }

    public function armazenarConhecimentos(array $conhecimentos)
    {
        $this->conhecimentos = array_merge($this->conhecimentos, $conhecimentos);
    }

    public function retornarConhecimentos(): array
    {
        return $this->conhecimentos;
    }
}