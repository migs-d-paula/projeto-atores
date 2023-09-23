<?php
// Variáveis POST do Formulário
$ator_nome = $_POST['campo-nome'];
$ator_sobrenome = $_POST['campo-sobrenome'];
$ator_profissao = $_POST['campo-profissao'];
$ator_genero = $_POST['campo-genero'];
$ator_imagem = $_FILES['campo-imagem'];
$ano1 = $_POST['campo-ano1'];
$titulo1 = $_POST['campo-titulo1'];
$papel1 = $_POST['campo-papel1'];
$ano2 = $_POST['campo-ano2'];
$titulo2 = $_POST['campo-titulo2'];
$papel2 = $_POST['campo-papel2'];
$ano3 = $_POST['campo-ano3'];
$titulo3 = $_POST['campo-titulo3'];
$papel3 = $_POST['campo-papel3'];
$ator_diretorio = 'images/';

// Credenciais da Base de Dados:
$servidor = 'localhost';
$base = 'project_atores';
$usuario = 'root';
$senha = '';

//upload
if (move_uploaded_file($ator_imagem['tmp_name'], $ator_diretorio.$ator_imagem['name']))
{
    echo 'imagem enviada com sucesso!';
}
else
{
    echo 'imagem nao enviada';
}

// Criar a CONEXÃO com a Base de Dados:
$conexao = new mysqli ($servidor, $usuario, $senha, $base);

// Criar e Excecutar a SQL para INSERIR os dados da tabela:
$sql = 'INSERT INTO tbl_atores(nome, sobrenome, genero, profissao, imagem, ano1, titulo1, papel1, ano2, titulo2, papel2, ano3, titulo3, papel3) VALUES ("' . $ator_nome . '", "' . $ator_sobrenome . '", "' . $ator_genero . '", "' . $ator_profissao . '", "' . $ator_imagem['name'] . '", "' . $ano1 . '", "' . $titulo1 . '", "' . $papel1 . '", "' . $ano2 . '", "' . $titulo2 . '", "' . $papel2 . '", "' . $ano3 . '", "' . $titulo3 . '", "' . $papel3 . '");';
$conexao->query($sql);

// Encerrar CONEXÃO com a Base de Dados:
$conexao->close();

// Direcionar o usuário de volta a página inicial:
header('Location: ');
?>