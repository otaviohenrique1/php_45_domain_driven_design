<?php

namespace Alura\Arquitetura\Academico\Dominio;

use InvalidArgumentException;

class Email
{
  private string $endereco;

  public function __construct(string $endereco)
  {
    if (filter_var($endereco, FILTER_VALIDATE_EMAIL) === false) {
      throw new InvalidArgumentException('Endereço de e-mail inválido');
    }
    $this->endereco = $endereco;
  }

  public function __toString(): string
  {
    return $this->endereco;
  }
}
