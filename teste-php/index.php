<?php
$host = "localhost";
$password = "";
$user = "root";
$bd = "teste2";
$conexao = mysqli_connect($host, $user, $password, $bd);

if ($conexao->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conexao->connect_errno . ") " . $conexao->connect_error;
}else{
    echo("Você conseguiu!");
}
$res = $conexao->query("SELECT * FROM pessoa ORDER BY nome ASC");

for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo " Nome = " . $row['nome'] . "\n";
}