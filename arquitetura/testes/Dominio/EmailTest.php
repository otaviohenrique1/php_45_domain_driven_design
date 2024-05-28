<?php

namespace Alura\Arquitetura\Testes\Dominio;

use Alura\Arquitetura\Academico\Dominio\Email;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
  public function testEmailComNumeroNoFormatoInvalidoNaoDevePoderExistir()
  {
    $this->expectException(InvalidArgumentException::class);
    new Email('email inválido');
  }

  public function testEmailDevePoderSerRepresentadoComoString()
  {
    $email = new Email('endereco@example.com');
    $this->assertSame('endereco@example.com', (string) $email);
  }
}
