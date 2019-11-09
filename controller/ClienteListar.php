<?php
require_once("../dao/ClienteDAOMySQL.php");
class ClienteListar {

  private $DAOMySQL;
  
  public function __construct(){
    $this->DAOMySQL = new ClienteDAOMySQL();    
  }
  
  public function buscarCliente($cliente) {
    $result = $this->DAOMySQL->buscarCliente($cliente);
    return $result;
  }
}

$cliente = new Cliente();
$cliente->setId($_POST['id']);
$cliente->setNome($_POST['nome']);
$cliente->setIdade($_POST['idade']);
$listar = new ClienteListar();
$result = $listar->buscarCliente($cliente);

?>

