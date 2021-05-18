<style><?php include 'style.css'; ?></style>
<?php
$servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomebanco = "clientdb";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nome = $_POST["nome"];
  $cpf = $_POST["cpf"];
  $end = $_POST["endereco"];
  $cep = $_POST["cep"];
  $cidade = $_POST["cidade"];
  $estado = $_POST["estado"];
  $id = $_POST["id"];
  $sql =  "UPDATE `clientes` SET `Nome` = '$nome', `CPF` = '$cpf', `Endereco` = '$end', `CEP` = '$cep', `Cidade` = '$cidade', `Estado` = '$estado' WHERE `clientes`.`id` = '$id'";

} 

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulario Cadastro de cliente</title>
    </head>
    <body>
    <form action="modify.php" method="POST">

        ID: <input type="text" name="id">
        <br><br>
        Nome: <input type="text" name="nome">
        <br><br>
        CPF: <input type="text" name="cpf">
        <br><br>
        Endereço: <input type="text" name="endereco">
        <br><br>
        CEP: <input type="text" name="cep">
        <br><br>
        Cidade: <input type="text" name="cidade">
        <br><br>
        Estado: <input type="text" name="estado">
        <br><br>
        <input type="submit" value="enviar">
    </form>
  </body>
  <footer>
    <br>
    <a href="listall.html">Listar todos os Clientes</a>&nbsp;&nbsp;&nbsp;&nbsp;
    
    <a href="modify.php">Alterar Cliente</a>&nbsp;&nbsp;&nbsp;&nbsp;

    <a href="create.html">Criar Cliente</a>&nbsp;&nbsp;&nbsp;&nbsp;

    <a href="listone.html">Listar UM Cliente</a>&nbsp;&nbsp;&nbsp;&nbsp;

    <a href="index.html">Retorno</a>&nbsp;&nbsp;&nbsp;&nbsp;

    <a href="upload.php">Upload de arquivo</a>&nbsp;&nbsp;&nbsp;&nbsp;

</footer>
  </html>