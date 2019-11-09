<?php
//Padrão de Projeto (Design Pattern) DAO
require_once("IClienteDAO.php");
require_once("../model/Cliente.php");
require_once("../model/ConexaoMongo.php");

class ClienteDAOMongo implements IClienteDAO {

	private static $conexao;

	public function __construct() {
		self::$conexao = ConexaoMongo::getInstance();
		self::$conexao->conectar();
	}

	public function inserirCliente($cliente) {
		print "irá inserir o cliente " . $cliente->getNome() . " no Mongo com conexao:". self::$conexao->getIDConexao() . "<br>";
	}
	
	public function apagarCliente($cliente) {
		print "irá apagar o cliente " . $cliente->getNome() . " no Mongo com conexao:". self::$conexao->getIDConexao()  . "<br>";
	}
	
	public function atualizarCliente($cliente){
		print "irá atualizar o cliente " . $cliente->getNome() . "no Mongo com conexao:". self::$conexao->getIDConexao()  . "<br>";
	}

	public function __destruct() {
		self::$conexao->desconectar();
	}
}
?>