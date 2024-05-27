<?php

namespace Alura\Arquitetura\Testes\Dominio;

use Alura\Arquitetura\Dominio\CPF;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class CPFTest extends TestCase
{
  public function testCPFComNumeroNoFormatoInvalidoNaoDevePoderExistir()
  {
    $this->expectException(InvalidArgumentException::class);
    new CPF('12345678910');
  }

  public function testCPFDevePoderSerRepresentadoComoString()
  {
    $cpf = new CPF('123.456.789-10');
    $this->assertSame('123.456.789-10', (string) $cpf);
  }
}
