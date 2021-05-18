<style><?php include 'style.css'; ?></style>
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //Conectando ao banco de dados
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $nomeBanco = "clientdb";
        $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);

        if ($conn->connect_error)
        {
            die("Conexão falhou!" . $conn->connect_error);
        }

        //Recebendo os dados do arquivo
        $arquivoCSV_tmp = $_FILES["arquivoCSV"]['tmp_name'];

        //Passando os dados do arquivo para uma variável
        $dados = file($arquivoCSV_tmp);

        //Percorrendo a variável 
        foreach($dados as $linha)
        {
            //Retirando os espaços do fim e inicio da linha
            trim($linha);

            //Separando as informações por posição
            $info = explode(';', $linha);

            //Passando as informações para as variaveis
            $nome = $info[0];
            $desc = $info[1];
            $preco = $info[2];
            $qnt = $info[3];
            $peso = $info[4];

            //Inserindo as informações dentro do banco de dados
            $sql =  "INSERT INTO `produtos` (Nome, Descricao, Preco, Qnt, Peso) VALUES ('$nome', '$desc', '$preco', '$qnt', '$peso')";
            //Atualizando e salvando no banco de dados
            $sql = mysqli_query($conn, $sql);
        }
        echo "Informações inseridas com sucesso!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Upload de Arquivo de Produto</title>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data" accept=".csv">
    Escolha o arquivo:
    <br>
    Arquivo: <input type="file" name="arquivoCSV">
    <br><br>
    <input type="submit" value="enviar" name="submit">
</form>