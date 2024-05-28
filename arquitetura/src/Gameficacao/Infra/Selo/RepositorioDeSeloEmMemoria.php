<?php

namespace Alura\Arquitetura\Gameficacao\Infra\Selo;

use Alura\Arquitetura\Shared\Dominio\CPF;
use Alura\Arquitetura\Gameficacao\Dominio\Selo\RepositorioDeSelo;
use Alura\Arquitetura\Gameficacao\Dominio\Selo\Selo;

class RepositorioDeSeloEmMemoria implements RepositorioDeSelo
{
  private array $selos = [];

  public function adiciona(Selo $selo): void {
    $this->selos[] = $selo;
  }

  public function selosDeAlunoComCPF(CPF $cpf) {
    return array_filter(
      $this->selos,
      fn (Selo $selo) => $selo->cpfAluno() == $cpf
    );
  }

}
