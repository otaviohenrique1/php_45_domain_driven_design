<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

use Alura\Arquitetura\Shared\Dominio\CPF;
use DomainException;

class AlunoNaoEncontrado extends DomainException
{
  public function __construct(CPF $cpf) {
    parent::__construct("Aluno com CPF $cpf não encontrado");
  }
}
