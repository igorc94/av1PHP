<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomebanco = "clientdb";
$id = $_POST["id"];

$conn = mysqli_connect($servidor, $usuario, $senha, $nomebanco);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql = "DELETE FROM `clientes` WHERE `ID`='$id'";
        $result = $conn->query($sql);
        
        echo "$id deletado com sucesso!";
        
        }

?>