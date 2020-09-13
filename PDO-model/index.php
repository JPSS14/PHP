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

// PESQUISA -> LOAD, FIND, ALL

// $model = new UserModel();

// $user = $model->load(157656);
// var_dump($user, "{$user->nome_usuario}");

// $user = $model->find("federer@atp.com");
// var_dump($user, "{$user->nome_usuario}");

// $all = $model->all();


// foreach ($all as $user){
//     var_dump($user, "{$user->nome_usuario}");
// }

// BOOTSTRAP

$model = new UserModel();

$user = $model->bootstrap("1235487","Hamilton","Lewis Hamilton","1985/05/05","hamilton@f1.com","27991111","984675214","123546987452", 0);

$user->created_at = date("Y/m/d H:i");

var_dump($user);


$user->created_at = date("Y/m/d H:i");

if (!$model->find($user->email)){
    echo "<p>Cadastro</p>";
    $user->save();
}else{
    echo "<p>Read</p>";
}