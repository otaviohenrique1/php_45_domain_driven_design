<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

use Alura\Arquitetura\Academico\Shared\Dominio\Evento\Evento;
use Alura\Arquitetura\Shared\Dominio\CPF;
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

  public function jsonSerialize()
  {
    get_object_vars($this);
  }
}
