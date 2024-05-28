<?php

namespace Alura\Arquitetura\Gameficacao\Dominio\Selo;

use Alura\Arquitetura\Shared\Dominio\CPF;

interface RepositorioDeSelo
{
  public function adiciona(Selo $selo): void;
  public function selosDeAlunoComCPF(CPF $cpf);
}
