<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomebanco = "clientdb";
$id = $_POST["id"];


$conn = mysqli_connect($servidor, $usuario, $senha, $nomebanco);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $sql = "SELECT `ID`, `Nome`, `CPF`, `Endereco`, `CEP`, `Cidade`, `Estado` FROM `clientes` WHERE `ID`='$id'";
        $result = $conn->query($sql);
        
        echo "<br><br>";
        if ($result->num_rows > 0) {
            while ($linha = $result->fetch_assoc()) {
                    echo "ID: " . $linha["id"]
                    . " Nome: " . $linha["Nome"]
                    . " CPF: " . $linha["CPF"]
                    . " Endereco: " . $linha["Endereco"]
                    . " CEP: " . $linha["CEP"]
                    . " Cidade: " . $linha["Cidade"]
                    . " Estado: " . $linha["Estado"];
                echo "<br><br>";
            }
        }
}
?>
