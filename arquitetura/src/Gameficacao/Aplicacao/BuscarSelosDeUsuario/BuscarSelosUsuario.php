<?php

namespace Alura\Arquitetura\Gameficacao\Aplicacao\BuscarSelosUsuario;

use Alura\Arquitetura\Gameficacao\Dominio\Selo\RepositorioDeSelo;
use Alura\Arquitetura\Shared\Dominio\CPF;

class BuscarSelosUsuario
{
  private RepositorioDeSelo $repositorioDeSelo;

  public function __construct(RepositorioDeSelo $repositorioDeSelo) {
    $this->repositorioDeSelo = $repositorioDeSelo;
  }

  public function execute(BuscarSelosUsuarioDto $dados)
  {
    $cpfAluno = new CPF($dados->cpfAluno);
    return  $this->repositorioDeSelo->selosDeAlunoComCPF($cpfAluno);
  }
}
