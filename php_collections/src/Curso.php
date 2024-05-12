<?php

namespace Alura\Collections;

use SplDoublyLinkedList;
use SplStack;

class Curso
{
  private SplDoublyLinkedList $alteracoes;

  public function __construct(public string $nome) {
    $this->alteracoes = new SplStack();
  }

  public function adicionaAlteracao(string $alteracao): void
  {
    $this->alteracoes->push($alteracao);
  }

  public function recuperaAlteracoes(): SplDoublyLinkedList
  {
    return $this->alteracoes;
  }
}
