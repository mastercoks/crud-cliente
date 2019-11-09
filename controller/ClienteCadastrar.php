<?php
  require_once("../dao/ClienteDAOMySQL.php");

  $DAOMySQL = new ClienteDAOMySQL();

  if(isset($_POST['nome']) || isset($_POST['idade'])) {
    $cliente = new Cliente();
    $cliente->setNome($_POST['nome']);
    $cliente->setIdade($_POST['idade']);
    
    $result = $DAOMySQL->inserirCliente($cliente);
    if($result == '1'){
      echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
    } else {
      echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
    }

  } else {
    echo "Parâmetros inválidos";
  }
?>