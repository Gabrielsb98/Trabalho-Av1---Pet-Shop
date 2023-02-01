<php

if(isset($_POST['submit'])) {

  include_once('config.php');

  $nome = $_POST['nome'];

  $sobrenome = $_POST['sobrenome'];

  $email = $_POST['email'];

  $endereco = $_POST['endereco'];

  $telefone = $_POST['tel'];

  $Celular = $_POST['Cel'];

  $cidade = $_POST['cidade'];

  $estado = $_POST['estado'];
$resultado = mysqli_query($conexao, "INSERT INTO contato(NOME, SOBRENOME, EMAIL, ENDERECO, TELEFONE1, TELEFONE2, CIDADE, ESTADO) VALUES('$nome', '$sobrenome', '$email','$endereco', '$telefone1', '$telefone2','$cidade','$estado')");





}
/>

