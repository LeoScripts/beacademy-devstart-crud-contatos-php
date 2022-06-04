<?php
// armarzenado em url
$url = $_SERVER['REQUEST_URI'];

include 'controller/acoes.php';

match ($url) {
  '/' => home(), 
  '/login' => login(),
  '/cadastro' => cadastro(),
  '/listar' => listar(),
  '/test' => test(),
  default => erro404(),
};