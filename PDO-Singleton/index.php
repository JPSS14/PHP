<?php
include("Connect.php");

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
