<?php

namespace Alura\Arquitetura\Academico\Dominio\Indicacao;

use Alura\Arquitetura\Academico\Dominio\Aluno\Aluno;
use DateTimeImmutable;

class Indicacao
{
  private Aluno $indicante;
  private Aluno $indicado;
  private DateTimeImmutable $data;

  public function __construct(Aluno $indicante, Aluno $indicado) {
    $this->indicante = $indicante;
    $this->indicado = $indicado;
    $this->data = new DateTimeImmutable();
  }
}
