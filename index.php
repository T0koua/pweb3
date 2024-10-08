<?php

    // Criando as variáveis de acesso ao banco (Use $ para criar variáveis)
    // Definir local, login, senha e nome do banco a ser utilizado
    $local = "localhost";
    $login = "root";
    $senha = "";
    $banco = "teste";


    //Abrindo a porta do banco com minhas chaves (variáveis acima)
    $abrir_porta = mysqli_connect($local, $login, $senha, $banco);

    //Comando para o banco de dados
    
    $query = "SELECT * FROM alunos"; //----------------"Selecionar TUDO da tabela alunos"

    //Armazenar a resposta em uma variável
    $resposta = mysqli_query($abrir_porta, $query); //---------------($Onde, $o que)

    //Percorra todos elementos do banco e para cada cria uma variável chamada $info_do_banco
    //ou seja para cada linha no banco eu tenho uma variável $info_do banco
    while($info_do_banco = mysqli_fetch_array($resposta)) {
        echo "NOME: ", $info_do_banco["nome_aluno"], " IDADE: ",$info_do_banco["idade"], "</br>";
    }



?>