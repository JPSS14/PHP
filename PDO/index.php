<?php
try {
$pdo = new PDO(
    "mysql:host=localhost;dbname=new_tcc",
    "root",
    "",
    [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ]
    );
    $stmt = $pdo->query("SELECT * FROM usuario LIMIT 5");
    while ($user = $stmt->fetch(PDO::FETCH_ASSOC)){
        var_dump($user);
    }
} catch(PDOException $exeption){
    var_dump($exeption);
}