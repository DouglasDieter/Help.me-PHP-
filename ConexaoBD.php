<?php
class ConexaoBD {
    private $nome_servidor = "localhost";
    private $nome_usuario = "root";
    private $senha = "";
    private $banco = "help.me";
    private $porta = "3306";
    private $conecta;
    
    function __construct() {
        
    }

    public function conectar() {
        $this->conecta = new mysqli("localhost", "root", "", "help.me");
        // Verificar Conexão
        if ($this->conecta->connect_error) {
            die("Conexão falhou: " . $this->conecta->connect_error."<br>");
            echo "erro de conexão";
        }
        return $this->conecta;
    }
    
    public function desconectar() {
        $this->conecta->close();
    }
    
    public function getConecta() {
        return $this->conecta;
    }

}