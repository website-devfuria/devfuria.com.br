<?php

/**
 * Arquivo que representa o modelo (model) de sua aplicação.
 * ele deve apenas conter código que se comunica com seu banco de dados e
 * também pode contar código de regras de negócio.
 * O ideal seria usarmos programação orientada a objetos e criar uma classe,
 * mas vamos devagar!
 *
 */

#
# Isto aqui é um teste !!!
# Toda vez que vc se perguntar; "será que meu código está funcionando ? " então
# você deve descomentar as linhas abaixo e executar no navegador o endereço
# http://localhost/contato.php/Model.php
#
// $nome        = "Fulano";
// $sobrenome   = " da Silva";
// $endereco    = "Rua das alamedas";
// $numero      = "999";
// $complemento = "apto 001";
// $bairro      = "centro";
// $cidade      = "grande";
// $estado      = "AC";
// $cep         = "12345-678";
// $telefone    = "123456789";
// $rg          = "12.123.123-12";
// $cpf         = "123.123.123.12";
// $curso       = "EDBV";
// $checkbox    = 1; // 1 = sim, 0 = não
// $email       = "email@email.com";
// $login       = "fulano";
// $senha       = "1234";


try {

    #
    # conexão
    #
    $server  = "localhost";
    $dbname  = "banco001";
    $user    = "root";
    $pass    = "1234";
    $dbh = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    $dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); # apresentar erros
    $dbh->exec("set names utf8"); # para trabalhar com utf8

    #
    # Insert
    #
    $sql = "INSERT INTO contato " .
           "(nome, sobrenome, endereco, numero, complemento, bairro, cidade, estado, cep, telefone, rg, cpf, curso, checkbox, email, login, senha)" .
           "VALUES " . 
           "(:nome, :sobrenome, :endereco, :numero, :complemento, :bairro, :cidade, :estado, :cep, :telefone, :rg, :cpf, :curso, :checkbox, :email, :login, :senha)";

    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':nome',        $nome);
    $stmt->bindParam(':sobrenome',   $sobrenome);
    $stmt->bindParam(':endereco',    $endereco);
    $stmt->bindParam(':numero',      $numero);
    $stmt->bindParam(':complemento', $complemento);
    $stmt->bindParam(':bairro',      $bairro);
    $stmt->bindParam(':cidade',      $cidade);
    $stmt->bindParam(':estado',      $estado);
    $stmt->bindParam(':cep',         $cep);
    $stmt->bindParam(':telefone',    $telefone);
    $stmt->bindParam(':rg',          $rg);
    $stmt->bindParam(':cpf',         $cpf);
    $stmt->bindParam(':curso',       $curso);
    $stmt->bindParam(':checkbox',    $checkbox);
    $stmt->bindParam(':email',       $email);
    $stmt->bindParam(':login',       $login);
    $stmt->bindParam(':senha',       $senha);
    $stmt->execute();
    
    # Para entender o código acima consulte...
    # http://php.net/manual/pt_BR/pdo.connections.php
    # http://php.net/manual/pt_BR/pdo.prepared-statements.php

} catch (PDOException $e) {
    echo "Falha ao inserir dados!" . "<br/>";  
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}