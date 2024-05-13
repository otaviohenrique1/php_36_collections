<?php

namespace Alura\Collections;

use Ds\Set;
use Ds\Queue;
use Ds\Stack;

class Curso
{
  private Stack $alteracoes;
  private Queue $filaDeEsperaDeAlunos;
  private Set $alunosMatriculados;

  public function __construct(public string $nome)
  {
    $this->alteracoes = new Stack();
    $this->filaDeEsperaDeAlunos = new Queue();
    $this->alunosMatriculados = new Set();
  }

  public function adicionaAlteracao(string $alteracao): void
  {
    $this->alteracoes->push($alteracao);
  }

  public function desfazAlteracao(): void
  {
    $this->alteracoes->pop();
  }

  public function recuperaAlteracoes(): Stack
  {
    return $this->alteracoes->copy();
  }

  public function adicionaAlunoParaEspera(Aluno $aluno): void
  {
    $this->filaDeEsperaDeAlunos->push($aluno);
  }

  public function recuperaAlunosEsperando(): Queue
  {
    return $this->filaDeEsperaDeAlunos->copy();
  }

  public function matriculaAluno(Aluno $aluno): void
  {
    $this->alunosMatriculados->add($aluno);
  }

  public function recuperaAlunosMatriculados(): Set
  {
    return $this->alunosMatriculados->copy();
  }
}
