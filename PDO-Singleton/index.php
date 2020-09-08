<?php
include("Connect.php");
include("Usuario.php");

$pdo1 = Connect::getInstance();
$pdo2 = Connect::getInstance();

var_dump($pdo1, $pdo2, Connect::getInstance()::getAvailableDrivers());

// $insert = "INSERT INTO usuario VALUES (12282556, 'Ferrer', 'David Ferrer', 0, '1998-10-10',
// 'federer@atp.com', '99874322', '789212258', '2345678911');";

// try{
// $exec = Connect::getInstance()->exec($insert);
// var_dump(Connect::getInstance()->lastInsertId());
// }catch(PDOException $exception){
//     var_dump($exception);
// }

// try {
//     $query = Connect::getInstance()->query("SELECT * FROM usuario");
//     var_dump([
//         $query,
//         $query->rowCount(),
//         $query->fetchAll()
//     ]);
// } catch (PDOException $exception) {
//     var_dump($exception);
// }


// try {
//     $exec = Connect::getInstance()->exec("
//     UPDATE usuario SET email = 'ferrer@atp.com'
//     WHERE matricula = '12282556'
//     ");
//     var_dump([
//         $exec
//     ]);
// } catch (PDOException $exception) {
//     var_dump($exception);
// }

// try {
//     $exec = Connect::getInstance()->exec("
//     DELETE FROM usuario WHERE matricula = '12282556'
//     ");
//     var_dump([
//         $exec
//     ]);
// } catch (PDOException $exception) {
//     var_dump($exception);
// }

$connect = Connect::getInstance();
// $read = $connect->query("SELECT * FROM usuario");

// if(!$read->rowCount()){
//     echo "<p>Não obteve resultados.</p>";
// }else{
//     var_dump($read->fetch());

//     while ($user = $read->fetch()){
//         var_dump($user);
//     }
// }


$read = $connect->query("SELECT * FROM usuario LIMIT 2,2");

// while ($user = $read->fetchAll()) {// O fetchAll retorna uma array
//     var_dump($user);
// }

foreach ($read->fetchAll() as $user) {
    var_dump($user);
}

var_dump($read->fetchAll()); // Devido ao uso do PDO uma vez que ele executa a consulta ele elimina da memória o resultado para otmizar a performace, mas é possivel salvar o resultado utilizando a tecnica de fetch save

$read = $connect->query("SELECT * FROM usuario LIMIT 2");
$result = $read->fetchAll();

var_dump(
    $read->fetchAll(),
    $result,
    $result
);

//Você manipula o resultado da fetch como um objeto
$read = $connect->query("SELECT * FROM usuario LIMIT 1");
foreach ($read->fetchAll() as $user) {
    var_dump($user, $user->nome);
}

//Você manipula o resultado da fetch como um array numérico
$read = $connect->query("SELECT * FROM usuario LIMIT 1");
foreach($read->fetchAll(PDO::FETCH_NUM) as $user){
    var_dump($user, $user[2]);
}

//Você manipula o resultado da fetch como um array associativo
$read = $connect->query("SELECT * FROM usuario LIMIT 1");
foreach($read->fetchAll(PDO::FETCH_ASSOC) as $user){
    var_dump($user, $user['nome']);
}

//Você manipula o resultado da fetch como uma classe necessitando de métodos para acessar os seus registros
$read = $connect->query("SELECT * FROM usuario LIMIT 1");
foreach($read->fetchAll(PDO::FETCH_CLASS, Usuario::class) as $user){
    var_dump($user, $user->getNome());
}