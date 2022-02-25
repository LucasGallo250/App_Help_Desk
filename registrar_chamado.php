<?php
    session_start();

    //Montando o texto:
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'].'#'.$titulo.'#'.$categoria.'#'.$descricao.PHP_EOL;

    //http://php.net/manual/pt_BR/function.fopen.php
    //abrindo o arquivo:
    $arquivo = fopen('arquivo.hd','a');
    //escrevendo o arquivo:
    fwrite($arquivo,$texto);
    //fechando o arquivo:
    fclose($arquivo);
    
    header('Location: abrir_chamado.php');

?>