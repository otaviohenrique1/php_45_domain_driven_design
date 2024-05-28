<?php

namespace Alura\Arquitetura\Academico\Aplicacao\Aluno\MatricularAluno;

use Alura\Arquitetura\Academico\Dominio\Aluno\RepositorioDeAluno;
use Alura\Arquitetura\Shared\Dominio\CPF;

class MatricularAluno
{
  public RepositorioDeAluno $repositorioDeAluno;

  public function __construct(RepositorioDeAluno $repositorioDeAluno = null) {
    $this->repositorioDeAluno = $repositorioDeAluno;
  }

  public function executa(TelefoneDto $dados): void
  {
    $cpf = new CPF($dados->cpf);
    $aluno = $this->repositorioDeAluno->buscarPorCpf($cpf);
    $aluno->adicionarTelefone($dados->ddd, $dados->numero);
    $this->repositorioDeAluno->atualiza($aluno);
  }
}
