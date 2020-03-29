<?php
session_start();
if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['senha']) && !empty($_POST['senha'])){
$conf = $_POST;
$_SESSION['session'] = $conf;
$usuario = $_POST['user'];
$senha = $_POST['senha';]
echo "SEU EMAIL:";
echo "<h4>$usuario</h4>"
}
else{
    echo"<h2>DIGITE SEU EMAIL E SENHA PARA CONCLUIR O LOGIN</h2>";
}
?>

