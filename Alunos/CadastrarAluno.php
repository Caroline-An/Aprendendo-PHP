<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Alunos.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>cadastro de alunos - WEB I</title>

</head>

<body>
    <h1>AAAAAAAAAAA</h1>
   <?php    
      $aluno = new Alunos;
      if(isset($_POST['cadastrar'])):
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];

            $aluno->setNome($nome);
            $aluno->setEndereco($endereco);

            if($aluno->insert()){
                echo "Aluno ". $nome. " inserido com sucesso";
            }
      endif;
    ?>

    <form method='post' action="">
        <label for='Nome'> Nome:</label>
            <input type="text" name="nome"/>
        <label for='endereco'> Endereço: </label>
            <input type="text" name="endereco"/>
            <input type="submit" name="cadastrar" value="cadastrar"/>
            
    </form>

</body>
</html>