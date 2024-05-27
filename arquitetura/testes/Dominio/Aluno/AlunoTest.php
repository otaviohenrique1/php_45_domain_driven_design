<?php

namespace Alura\Arquitetura\Testes\Dominio\Aluno;

use Alura\Arquitetura\Dominio\Aluno\Aluno;
use Alura\Arquitetura\Dominio\CPF;
use Alura\Arquitetura\Dominio\Email;
use DomainException;
use PHPUnit\Framework\TestCase;

class AlunoTest extends TestCase
{
  private Aluno $aluno;

  public function setUp(): void
  {
    $this->aluno = new Aluno(
      $this->createStub(CPF::class),
      '',
      $this->createStub(Email::class)
    );
  }

  public function testAdicionarMais2TelefonesDeveLancarExcecao()
  {
    $this->expectException(DomainException::class);
    $this->aluno->adicionarTelefone('24', '22222222');
    $this->aluno->adicionarTelefone('24', '999999999');
    $this->aluno->adicionarTelefone('24', '12345678');
  }

  public function testAdicionar1TelefoneDeveFuncionar()
  {
    $this->aluno->adicionarTelefone('24', '22222222');
    $this->assertCount(1, $this->aluno->telefones());
  }
  
  public function testAdicionar2TelefoneDeveFuncionar()
  {
    $this->aluno->adicionarTelefone('24', '22222222');
    $this->aluno->adicionarTelefone('24', '999999999');
    $this->assertCount(2, $this->aluno->telefones());
  }
}