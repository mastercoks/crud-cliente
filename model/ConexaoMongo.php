<?php
//Padrão de Projeto (Design Pattern) Singleton
class ConexaoMongo {
 
  private static $instancia;
  private $conexao;

  private function __construct() {}

 	public static function getInstance() {
    if (!isset(self::$instancia)) {
      self::$instancia = new ConexaoMongo();

    }
    return self::$instancia;
 	}  

 	public function conectar() {
 		print "Conectei<br>";
 		$this->conexao = rand(1,100000);
 	}

  public function desconectar() {
    print "Desconectei<br>";
    $conexao = -1;
 	}

 	public function getIDConexao() {
 		return $this->conexao;
 	}
}
 
?>