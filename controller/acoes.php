<?php

function home() {
  include 'views/home.php';
}

function login() {
  include 'views/login.php';
}

function cadastro() {
  if($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
  
    $arquivo = fopen('database/contatos.csv', 'a+');
    fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);
    fclose($arquivo);
    $mensagem = 'Cadastro realizado com sucesso!';
    include 'views/components/mensagem.php';
  }

  include 'views/cadastro.php';
}

function listar() {
  $contatos = file('database/contatos.csv');
  include 'views/listar.php';
}

function excluir() {
  $id = $_GET['id'];
  $contatos = file('database/contatos.csv');

  unset($contatos[$id]);
  unlink('database/contatos.csv');
  $arquivo = fopen('database/contatos.csv', 'a+');

  foreach( $contatos as $contato) {
    fwrite($arquivo, $contato);
  }

  $mensagem = 'Cadastro removido com sucesso!';
  include 'views/components/mensagem.php';
}

function editar() {
  $id = $_GET['id'];
  $contatos = file('database/contatos.csv');
  $dados = explode(';', $contatos[$id]);

  if($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
  
    $contatos[$id] = "{$nome};{$email};{$telefone}".PHP_EOL;
    unlink('database/contatos.csv');
    $arquivo = fopen('database/contatos.csv', 'a+');

    foreach( $contatos as $contato) {
      fwrite($arquivo, $contato);
    }

    fclose($arquivo);
    $mensagem = 'cadastro atualizado!';
    include 'views/components/mensagem.php';
  }

  include 'views/editar.php';
}

function erro404() {
  include 'views/404.php';
}
