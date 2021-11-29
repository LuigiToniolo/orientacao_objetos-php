<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Dracena-SP', 'Centro', 'Rua Marechal Deodoro da Funseca', '1126');
$outroEndereco = new Endereco('Rio', 'centro', 'Rua qualquer', '50');

$umEndereco->cidade = "Nova Cidade";

echo $umEndereco;
