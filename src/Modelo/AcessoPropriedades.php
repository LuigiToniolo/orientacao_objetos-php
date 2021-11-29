<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        //recuperaRua -> recuperaRua
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}