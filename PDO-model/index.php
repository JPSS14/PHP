<?php
// include("Connect.php");
// include("Usuario.php");
include("Model.php");
include("UserModel.php");

// $pdo1 = Connect::getInstance();
// $pdo2 = Connect::getInstance();


//layer

$layer = new ReflectionClass(Model::class);

var_dump(
    $layer->getDefaultProperties(),
    $layer->getMethods()
);

//model

$model = new UserModel();
var_dump($model, get_class_methods($model));