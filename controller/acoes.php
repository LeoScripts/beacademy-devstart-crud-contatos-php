<?php

function home() {
  include 'views/home.php';
}

function login() {
  include 'views/login.php';
}

function cadastro() {
  include 'views/cadastro.php';
}

function listar() {
  $contatos = ['A','B','C'];
  include 'views/listar.php';
}

function erro404() {
  include 'views/404.php';
}
