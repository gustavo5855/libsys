<?php 
// session_start inicia a sessão
session_start();

// as variáveis email e senha recebem os dados digitados na página anterior
$user = $_POST['user'];
$password = $_POST['password'];
//coneção com o banco de dados
$conn = mysqli_connect("localhost","root","","server");
$sql = "SELECT * FROM usuario WHERE email = '$user' AND senha = '$password'";
$result = mysqli_query($conn, $sql);
// A variavel $result pega as varias $email e $senha, faz uma 
//pesquisa na tabela de usuarios
// $result = mysqli_query($sql);
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o email */

require_once ("conection/conexao.php");

// cria a instrução SQL que vai selecionar os dados
$sql2 = "SELECT nome, idade FROM  usuario WHERE email = '$user'";
$dados = mysql_query($sql2);
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
$conta = 1;
// se o número de resultados for maior que zero, mostra os dados
if($total > 0) {
// inicia o loop que vai mostrar todos os dados
do {
$nome = $linha['nome'];
$idade = $linha['idade'];
}while($linha = mysql_fetch_assoc($dados));
// fim do if
}
if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['nome'] = $nome;
$_SESSION['idade'] = $idade;
$_SESSION['user'] = $user;
$_SESSION['password'] = $password;
header('location:pages/user-page.php');
}
else{
  unset ($_SESSION['user']);
  unset ($_SESSION['password']);
  header('location:index.html');
}
mysqli_close($conn);
?>