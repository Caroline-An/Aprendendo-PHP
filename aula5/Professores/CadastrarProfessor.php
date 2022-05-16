<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Professores.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>cadastro de Professores - WEB I</title>

</head>

<body>
   <?php    
      $professor = new Professor;
      if(isset($_POST['cadastrar'])):
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];

            $aluno->setNome($nome);
            $aluno->setEndereco($endereco);

            if($aluno->insert()){
                echo "Professor ". $nome. " inserido com sucesso";
            }
      endif;
    ?>

    <form method='post' action="">
        <label for='Nome'> Nome:</label>
            <input type="text" name="nome"/>
        <label for='endereço'> Endereço: </label>    
            <input type="text" name="endereco"/>
            <input type="submit" name="cadastrar"/>
            
    </form>

</body>
</html>
