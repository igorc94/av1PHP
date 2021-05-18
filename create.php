<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomebanco = "clientdb";

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $end = $_POST["endereco"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $estado =$_POST["estado"];
    $nomeValido = 0;
    $cpfValido = 0;
    $emailValido = 0;
  
    if ($nome != "" && ctype_alpha($nome)) {
        $nomeValido = 1;
    }
    if ($cpf != "" && ctype_digit($cpf)) {
        $cpfValido = 1;
    }

    $conn = mysqli_connect($servidor, $usuario, $senha, $nomebanco);

    if ($conn->connect_error) {
        die("Erro de conexao: " . $conn->connect_error);
    }
   
    if ($nomeValido = 1 && $cpfValido = 1)
    {
        $sql = "INSERT INTO `clientes`(`Nome`, `CPF`, `Endereco`, `CEP`, `Cidade`, `Estado`) VALUES ('$nome','$cpf','$end','$cep','$cidade','$estado')";
    }
    else
    {
        echo "Vai dar não";
    }
    
    //$result = $conn->query($sql)

    if ($conn->query($sql) === TRUE) {
        echo "Cliente $nome inserido com sucesso";
        
    } else {
        echo "Erro na inserção";
    }
}
?>