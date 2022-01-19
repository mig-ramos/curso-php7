<?php

    require_once("config.php");

  //  $sql = new Sql();
  //  $usuarios = $sql->select("SELECT * FROM tb_usuarios");
  //  echo json_encode($usuarios);

  // Carrega um usuario
  //$root = new Usuario();
  //$root->loadById(3);
  //echo $root;

  // Carrega uma lista de ususarios
  //  $lista = Usuario::getList();
  //  echo json_encode($lista);

  // Carrega uma lista de usuários buscando pelo login
  //$search = Usuario::search("Joa");
  //echo json_encode($search);

  //Carrega um usuario usando o login e a senha
  $usuario = new Usuario();
  $usuario->login("Jose","1234567890");
  echo $usuario;
?>