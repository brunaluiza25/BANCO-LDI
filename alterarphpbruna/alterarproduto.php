<?php 

include_once "factory/conexao.php";
$id = $_POST["cxcodigo"];
$produto = $_POST["cxproduto"];
$marca = $_POST["cxmarca"];

$alterar = "UPDATE tbproduto SET 
produto = '$produto',
marca ='$marca' 
where 
codigo = '$id'
 ";

$executar = mysqli_query($conn,$alterar);
if($executar)
{
    echo "Dados Alterados com Sucesso!";
}
else{
    echo "Erro ao alterar dados!";
}

?>

<a href="telaconsultanomeproduto.php">Voltar</a>