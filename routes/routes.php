<?php

$url = explode('?' ,$_SERVER['REQUEST_URI']);

include 'controller/acoes.php';

match ($url[0]) {
  '/' => home(), 
  '/login' => login(),
  '/cadastro' => cadastro(),
  '/listar' => listar(),
  '/test' => test(),
  '/excluir' => excluir(),
  default => erro404(),
};