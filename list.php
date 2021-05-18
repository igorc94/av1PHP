<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomebanco = "clientdb";


$conn = mysqli_connect($servidor, $usuario, $senha, $nomebanco);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $sql = "SELECT * FROM `clientes`";
        $result = $conn->query($sql);
        
        echo "<br><br>";
        if ($result->num_rows > 0) {
            while ($linha = $result->fetch_assoc()) {
                    echo "ID: " . $linha["ID"]
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