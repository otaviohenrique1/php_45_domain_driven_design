<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

use Alura\Arquitetura\Shared\Dominio\CPF;
use Alura\Arquitetura\Academico\Dominio\Evento;
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

  public function momento(): DateTimeImmutable
  {
    return $this->momento;
  }
}
