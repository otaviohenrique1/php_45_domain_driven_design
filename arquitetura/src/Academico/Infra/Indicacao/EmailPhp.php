<?php

namespace Alura\Arquitetura\Academico\Infra\Indicacao;

use Alura\Arquitetura\Academico\Aplicacao\Indicacao\EnviaEmailIndicacao;
use Alura\Arquitetura\Academico\Dominio\Aluno\Aluno;

class EmailPhp implements EnviaEmailIndicacao
{
  public function enviaPara(Aluno $alunoIndicado): void {
    mail('usuario@email.com', 'Teste email', 'Teste de envio de email');
  }
  
}
