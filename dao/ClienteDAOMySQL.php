<?php
//Padrão de Projeto (Design Pattern) DAO
require_once("IClienteDAO.php");
require_once("../model/Cliente.php");
require_once("../model/ConexaoMySQL.php");

class ClienteDAOMySQL implements IClienteDAO {

	private static $conexao;

	public function __construct() {
		self::$conexao = ConexaoMySQL::getInstance();
  }
  
  public function buscarCliente($cliente) {
    $params = array();
    $query = "SELECT id, nome, idade FROM clientes WHERE 1"; 
    if ($cliente->getId()) {
      $query .= " AND id = :id";
      $params['id'] = $cliente->getId();
    } 
    if ($cliente->getNome()) {
      $query .= " AND nome LIKE :nome";
      $params['nome'] = '%'.$cliente->getNome().'%';
    } 
    if ($cliente->getIdade()) {
      $query .= " AND idade = :idade";
      $params['idade'] = $cliente->getIdade();
    }    
    $stmt = self::$conexao->query($query, $params);
    return $stmt->fetchAll();
  }

	public function inserirCliente($cliente) {
    $query = "INSERT INTO clientes (nome, idade) VALUES(:nome,:idade)";     
    $params = array(
      'nome' => $cliente->getNome(), 
      'idade' => $cliente->getIdade()
    );
    $stmt = self::$conexao->query($query, $params);
    return $stmt->rowCount();
	}
	
	public function apagarCliente($cliente) {
    $query = "DELETE FROM clientes WHERE id = :id";     
    $params = array(
      'id' => $cliente->getId()
    );
    $stmt = self::$conexao->query($query, $params);
    return $stmt->rowCount();
	}
	
	public function atualizarCliente($cliente){
    $query = "UPDATE clientes SET nome = :nome, idade = :idade WHERE id = :id";     
    $params = array(
      'id' => $cliente->getId(),
      'nome' => $cliente->getNome(),
      'idade' => $cliente->getIdade()
    );
    $stmt = self::$conexao->query($query, $params);
    return $stmt->rowCount();
  }
  
}
?>