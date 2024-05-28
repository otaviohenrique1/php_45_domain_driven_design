<?php

namespace Alura\Arquitetura\Testes\Academico\Aplicacao\Aluno;

use Alura\Arquitetura\Academico\Aplicacao\Aluno\MatricularAluno\MatricularAluno;
use Alura\Arquitetura\Academico\Aplicacao\Aluno\MatricularAluno\MatricularAlunoDto;
use Alura\Arquitetura\Shared\Dominio\CPF;
use Alura\Arquitetura\Academico\Infra\Aluno\RepositorioDeAlunoEmMemoria;
use PHPUnit\Framework\TestCase;

class MatricularAlunoTest extends TestCase
{
  public function testAlunoDeveSerAdicionadoAoRepositorio()
  {
    $dadosAluno = new MatricularAlunoDto(
      '123.456.789-10',
      'Teste',
      'email@example.com'
    );

    $repositorioDeAluno = new RepositorioDeAlunoEmMemoria();
    $useCase = new MatricularAluno($repositorioDeAluno);
    $useCase->executa($dadosAluno);
    $aluno = $repositorioDeAluno->buscarPorCpf(new CPF('123.456.789-10'));
    $this->assertSame('Teste', (string) $aluno->nome());
    $this->assertSame('email@example.com', (string) $aluno->email());
    $this->assertEmpty($aluno->telefones());
  }
}
