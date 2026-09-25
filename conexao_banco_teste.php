<?php
$servidor = "host_do_servidor";
$usuario = "insira_usuario_banco";
$senha = "Senha_do_banco";
$banco = "nome_do_banco_de_dados";

try {
    // Cria a conexão via PDO
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8", $usuario, $senha);
    
    // Configura o modo de erro para exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão realizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>