<?php

$nome = $_POST['nomeCad'];
$dataDeNascimento = $_POST['dataCad'];
$sexo = $_POST['sexo'];
$estado = $_POST['estadoCivil'];
$email = $_POST['emailCad'];

$ddd1 = $_POST['dddCad1'];
$telefone1 = $_POST['telefoneCad1'];
$tipoTel1 = $_POST['tipoTel1'];

$ddd2 = $_POST['dddCad2'];
$telefone2 = $_POST['telefoneCad2'];
$tipoTel2 = $_POST['tipoTel2'];

$ddd3 = $_POST['dddCad3'];
$telefone3 = $_POST['telefoneCad3'];
$tipoTel3 = $_POST['tipoTel3'];
$obs = $_POST['observacoes'];

$conexao = mysqli_connect("localhost" , "root", "" , "sistema2");

$sql = "INSERT INTO clientes
 (nome, dataNascimento, sexo, estadoCivil, email, ddd1, telefone1, tipoTel1, ddd2, telefone2, tipoTel2, ddd3, telefone3, tipoTel3, observacoes)
 VALUES
 ('$nome', '$dataDeNascimento', '$sexo','$estado', '$email', '$ddd1', '$telefone1', '$tipoTel1','$ddd2', '$telefone2', '$tipoTel2', '$ddd3', '$telefone3', '$tipoTel3', '$obs')";

mysqli_query($conexao,$sql) or die("Não foi possível inserir os dados" . mysqli_error($conexao));
echo "<br>Dados cadastros com sucesso!";
echo "<br><a href='cadastro.html'>Voltar</a>"


?>