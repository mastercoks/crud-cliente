<?php
require_once("../dao/ClienteDAOMySQL.php");
class ClienteEditar {

  private $DAOMySQL;
  private $cliente;
  private $editar;
  
  public function __construct($id){
    $this->DAOMySQL = new ClienteDAOMySQL();
    $this->buscarCliente($id);      
  }
  
  private function buscarCliente($id){
    $cliente = new Cliente();
    $cliente->setId($id);
    $row = $this->DAOMySQL->buscarCliente($cliente)[0];
    $cliente->setNome($row['nome']);
    $cliente->setIdade($row['idade']);
    $this->cliente = $cliente;
  }
  
  public function editarFormulario($cliente){
    $result = $this->DAOMySQL->atualizarCliente($cliente);
    if($result == '1'){
      echo "<script>alert('Registro atualizado com sucesso!');document.location='../view/index.php'</script>";
    }else{
      echo "<script>alert('Erro ao atualizar registro!');history.back()</script>";
    }
  }

  public function getId(){
    return $this->cliente->getId();
  }

  public function getNome(){
    return $this->cliente->getNome();
  }

  public function getIdade(){
    return $this->cliente->getIdade();
  }
}

$id = filter_input(INPUT_GET, 'id');
new ClienteEditar($id);
$editar = new ClienteEditar($id);
if(isset($_POST['submit'])){
  $cliente = new Cliente();
  $cliente->setId($_POST['id']);
  $cliente->setNome($_POST['nome']);
  $cliente->setIdade($_POST['idade']);
  $editar->editarFormulario($cliente);
}
?>