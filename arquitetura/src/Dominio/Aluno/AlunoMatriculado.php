<?php

namespace Alura\Arquitetura\Dominio\Aluno;

use Alura\Arquitetura\Dominio\CPF;
use Alura\Arquitetura\Dominio\Evento;
use DateTimeImmutable;

class AlunoMatriculado implements Evento
{
  private DateTimeImmutable $momento;
  private CPF $cpfAluno;

  public function __construct(CPF $cpfAluno) {
    $this->momento = new DateTimeImmutable();
    $this->cpfAluno = $cpfAluno;
  }

  public function cpfAluno()
  {
    return $this->cpfAluno;
  }

  public function mommento(): DateTimeImmutable
  {
    return $this->momento;
  }
}
