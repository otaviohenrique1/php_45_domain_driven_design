<?php

namespace Alura\Arquitetura\Gameficacao\Aplicacao\BuscarSelosUsuario;

class BuscarSelosUsuarioDto
{
  public string $cpfAluno;

  public function __construct(string $cpfAluno) {
    $this->cpfAluno = $cpfAluno;
  }
}
