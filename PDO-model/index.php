<?php
 include("Connect.php");
// include("Usuario.php");
include("Model.php");
include("UserModel.php");

// $pdo1 = Connect::getInstance();
// $pdo2 = Connect::getInstance();


// //layer

// $layer = new ReflectionClass(Model::class);

// var_dump(
//     $layer->getDefaultProperties(),
//     $layer->getMethods()
// );

// //model

// $model = new UserModel();
// var_dump($model, get_class_methods($model));

$model = new UserModel();

$user = $model->load(157656);
var_dump($user, "{$user->nome_usuario}");

$user = $model->find("federer@atp.com");
var_dump($user, "{$user->nome_usuario}");

$all = $model->all();


foreach ($all as $user){
    var_dump($user, "{$user->nome_usuario}");
}