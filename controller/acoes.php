<?php

function home() {
  include 'views/home.php';
}

function login() {
  include 'views/login.php';
}

function cadastro() {
  var_dump($_POST);
  include 'views/cadastro.php';
}

function listar() {
  $contatos = file('database/contatos.csv');
  include 'views/listar.php';
}

function erro404() {
  include 'views/404.php';
}
