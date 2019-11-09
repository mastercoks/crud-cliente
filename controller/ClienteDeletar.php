<?php
require_once("../dao/ClienteDAOMySQL.php");
class ClienteDeletar {

  private $DAOMySQL;
  private $cliente;
  private $editar;
  
  public function __construct($id){
    $this->DAOMySQL = new ClienteDAOMySQL();
    $this->deletaCliente($id);      
  }
  
  private function deletaCliente($id){
    $cliente = new Cliente();
    $cliente->setId($id);
    $result = $this->DAOMySQL->apagarCliente($cliente);
    if($result == '1'){
      echo "<script>alert('Registro deletado com sucesso!');document.location='../view/index.php'</script>";
    } else {
      echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
    }
  }
}
new ClienteDeletar($_GET['id']);
?>