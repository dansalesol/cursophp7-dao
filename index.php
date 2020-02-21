<?php

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

//carrega um usuário
//$user = new Usuario();
//$user->loadById(4);
//echo $user;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuário buscando pelo login
//$search = Usuario::search("o");
//echo json_encode($search);

//carrega um usuário usando login e senha
//$usuario = new Usuario();
//$usuario->login("daniels", "141213");
//echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario("kakakak", "8889");
//$aluno->insert();
//echo $aluno;

//Modificando um usuário
$usuario = new Usuario();
$usuario->loadById(4);
$usuario->update("roberto planta", "hahahaha");
echo $usuario;

?>