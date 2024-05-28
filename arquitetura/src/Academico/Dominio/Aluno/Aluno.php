<?php

namespace Alura\Arquitetura\Academico\Dominio\Aluno;

use Alura\Arquitetura\Shared\Dominio\CPF;
use Alura\Arquitetura\Academico\Dominio\Email;
use DomainException;

class Aluno
{
  private CPF $cpf;
  private string $nome;
  private Email $email;
  private array $telefones;
  private string $senha;

  public static function comCpfNomeEEmail(string $cpf, string $nome, string $email): self
  {
    return new Aluno(
      new CPF($cpf),
      $nome,
      new Email($email)
    );
  }

  public function __construct(CPF $cpf, string $nome, Email $email) {
    $this->cpf = $cpf;
    $this->nome = $nome;
    $this->email = $email;
    $this->telefones = [];
  }

  public function adicionarTelefone(string $ddd, string $numero): self
  {
    if (count($this->telefones) === 2) {
      throw new DomainException('Aluno já tem 2 telefones. Não pode adicionar outro');
    }
    $this->telefones[] = new Telefone($ddd, $numero);
    return $this;
  }

  public function cpf(): CPF
  {
    return $this->cpf;
  }

  public function nome(): string
  {
    return $this->nome;
  }

  public function email(): string
  {
    return $this->email;
  }

  /** @return Telefone[] */
  public function telefones(): array
  {
    return $this->telefones;
  }
}
