<?php
//Padrão de Projeto (Design Pattern) DAO
  interface IClienteDAO {
    public function inserirCliente($cliente);
    public function apagarCliente($cliente);
    public function atualizarCliente($cliente);
  }
?>