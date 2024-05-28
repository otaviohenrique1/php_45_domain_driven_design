<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

use Alura\Arquitetura\Shared\Dominio\CPF;
use Alura\Arquitetura\Academico\Dominio\Email;

class FabricaAluno
{
  private Aluno $aluno;

  public function comCpfEmailNome(string $numeroCpf, string $email, string $nome): self
  {
    $this->aluno = new Aluno(
      new CPF($numeroCpf),
      $nome,
      new Email($email)
    );
    return $this;
  }

  public function adcionaTelefone(string $ddd, string $numero): self
  {
    $this->aluno->adicionarTelefone($ddd, $numero);
    return $this;
  }

  public function aluno(): Aluno
  {
    return $this->aluno;
  }
}
