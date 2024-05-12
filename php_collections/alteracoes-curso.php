<?php

require_once 'vendor/autoload.php';

use Alura\Collections\Curso;

$curso = new Curso('Collections com PHP');
$curso->adicionaAlteracao('Primeira aula criada');
$curso->adicionaAlteracao('Segunda aula modificada');
$curso->adicionaAlteracao('Terceira aula concluída');

foreach ($curso->recuperaAlteracoes() as $alteracao) {
  echo $alteracao . PHP_EOL;
}
