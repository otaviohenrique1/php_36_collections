<?php

require_once 'vendor/autoload.php';

use Alura\Collections\Aluno;
use Alura\Collections\Curso;

$curso = new Curso('Collections com PHP');
$curso->adicionaAlteracao('Primeira aula criada');
$curso->adicionaAlteracao('Segunda aula modificada');
$curso->adicionaAlteracao('Terceira aula concluída');

foreach ($curso->recuperaAlteracoes() as $alteracao) {
  echo $alteracao . PHP_EOL;
}

echo '------------------------------------' . PHP_EOL;

$patricia = new Aluno('Patricia Freitas');

$curso->adicionaAlunoParaEspera($patricia);
$curso->adicionaAlunoParaEspera(new Aluno('Vinicius Dias'));
$curso->adicionaAlunoParaEspera(new Aluno('Ana Maria'));

foreach ($curso->recuperaAlunosEsperando() as $aluno) {
  echo $aluno->nome . PHP_EOL;
}

echo '------------------------------------' . PHP_EOL;

$curso->matriculaAluno($patricia);
$curso->matriculaAluno(new Aluno('Rogério'));
$curso->matriculaAluno($patricia);

foreach ($curso->recuperaAlunosMatriculados() as $aluno) {
  echo $aluno->nome . PHP_EOL;
}

$patriciaEstaMatriculada = $curso->recuperaAlunosMatriculados()->contains($patricia);
var_dump($patriciaEstaMatriculada);