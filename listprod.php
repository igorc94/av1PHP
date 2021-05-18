<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomebanco = "clientdb";


$conn = mysqli_connect($servidor, $usuario, $senha, $nomebanco);


    
        $sql = "SELECT * FROM `produtos`";
        $result = $conn->query($sql);
        
        echo "<br><br>";
        if ($result->num_rows > 0) {
            while ($linha = $result->fetch_assoc()) {
                    echo " Nome: " . $linha["Nome"]
                    . " Descricao: " . $linha["Descricao"]
                    . " Preco " . $linha["Preco"]
                    . " Quantidade: " . $linha["Qnt"]
                    . " Peso: " . $linha["Peso"];
                echo "<br><br>";
            }
        }

?>