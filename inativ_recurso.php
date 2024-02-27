<?php
  require_once("Back-end/class/conexao/Conexao.class.php");
  require_once("Back-end/class/recursos/Recursos.class.php");

  if (!isset($_SESSION)) session_start();

  if ($_SESSION["categoria"] != 3) {
      header("location: index.php");
      die();
  }

  if ($_GET["id_recurso"]) {
    $recurso = new Recursos(id_recurso:$_GET["id_recurso"]);
    $recurso->inativarRecurso();
    header("location: index.php");
    die();
  } else {
      header("location: index.php");
  }
?>