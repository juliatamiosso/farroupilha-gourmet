<?php
    // Acessar banco
    define('HOST', 'localhost');
    define('DB', 'BDfarroupilhagourmet');
    define('USER', 'root'); 
    define('PASS', '');

    function criaConexao() {
        try {
        $conexao = new PDO('mysql:host=' . HOST . ';dbname='.DB, USER, PASS);
            if ($conexao) {
                return $conexao;
            }
        } catch(PDOException $e){
            print "Erro: " . $e->getMessage() . "<br>";
        }
    }
    
    // No SQL: ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root'; E executar

?>