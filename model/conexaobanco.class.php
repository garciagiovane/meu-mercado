<?php header('Content-Type: text/html; charset=utf-8');
class ConexaoBanco extends PDO{
    public static $instance;
  
    public function __construct($dsn,$usuario,$senha) {
        parent::__construct($dsn,$usuario,$senha);
    }
  
    public static function getInstance() {
        try {
            if (!isset(self::$instance)) {
                if($_SERVER["SERVER_NAME"] == "localhost"){
                    self::$instance = new PDO('mysql:host=mysql995.umbler.com:41890;dbname=meu_mercado1', 'giovane_garcia', 'testesoftware');
                } else {
                    self::$instance = new PDO('mysql:host=mysql995.umbler.com;dbname=meu_mercado1', 'giovane_garcia', 'testesoftware');
                }
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
            }
            return self::$instance;
        } catch (PDOException $exc) {
            $_SESSION["erroConexao"] = $exc->getMessage();            
            header("Location: ../view/resposta.php");
        }
    }
}
