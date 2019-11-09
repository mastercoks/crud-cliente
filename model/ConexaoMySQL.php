<?php
//Padrão de Projeto (Design Pattern) Singleton
require_once("../config/database.php");
class ConexaoMySQL {
 
  private static $instancia;
  private $conexao;

  private function __construct() {}

 	public static function getInstance() {
    if (!isset(self::$instancia)) {
      self::$instancia = new ConexaoMySQL();

    }
    return self::$instancia;
 	}  

   public function query($query, $params) {
    try {
      $conexao = new PDO('mysql:host='.BD_SERVIDOR.';dbname='.BD_BANCO, BD_USUARIO, BD_SENHA);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conexao->prepare($query);
        $stmt->execute($params);
        return $stmt;
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    } 
   }
}
 
?>