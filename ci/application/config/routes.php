<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['default_controller'] = 'home';
$route['aluno/cadastro'] = 'aluno/cadastrar';
$route['logout'] = 'aluno/sair';
