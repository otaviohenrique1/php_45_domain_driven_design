<?php

use Alura\Arquitetura\Academico\Aplicacao\Aluno\MatricularAluno\MatricularAluno;
use Alura\Arquitetura\Academico\Aplicacao\Aluno\MatricularAluno\MatricularAlunoDto;
use Alura\Arquitetura\Academico\Dominio\Aluno\LogDeAlunoMatriculado;
use Alura\Arquitetura\Academico\Infra\Aluno\RepositorioDeAlunoEmMemoria;
use Alura\Arquitetura\Academico\Shared\Dominio\Evento\PublicadorDeEvento;
use Alura\Arquitetura\Gameficacao\Aplicacao\GeraSeloDeNovato;
use Alura\Arquitetura\Gameficacao\Infra\Selo\RepositorioDeSeloEmMemoria;

require_once 'vendor/autoload.php';

$cpf = $argv[1];
$nome = $argv[2];
$email = $argv[3];
$ddd = $argv[4];
$numero = $argv[5];


// $aluno = Aluno::comCpfNomeEEmail($cpf, $nome, $email)->adicionarTelefone($ddd, $numero);
// $repositorio = new RepositorioDeAlunoEmMemoria();
// $repositorio->adicionar($aluno);

$publicador = new PublicadorDeEvento();
$publicador->adicionarOuvinte(new LogDeAlunoMatriculado());
$publicador->adicionarOuvinte(new GeraSeloDeNovato(new RepositorioDeSeloEmMemoria()));
$useCase = new MatricularAluno(new RepositorioDeAlunoEmMemoria(), $publicador);
$useCase->executa(new MatricularAlunoDto($cpf, $nome, $email));

// php matricular-aluno.php "123.456.789-10" "Vinicius Dias" "email@exemple.com" "24" "999999999"