<?php  // Tudo o que pessoa tem, funcionário e titular também tem. 
        //Isso foi feito para não repetir CPF e nome no código

namespace Alura\Banco\Modelo;

class Pessoa 
{
    protected $nome; //quando qualquer método for "protected" dentro das classes e das classes filhas nós conseguimos acesso
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string 
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
