<?php

namespace Alura\Arquitetura\Academico\Shared\Dominio\Evento;

use DateTimeImmutable;
use JsonSerializable;

interface Evento extends JsonSerializable 
{
  public function momento(): DateTimeImmutable;
}
