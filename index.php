<?php


require_once "./student.php";
do{
    echo "\rSistema de Boletim\n\n";

    echo "Menu: \n\n";
    
    echo "1- Adicionar aluno.\n2- Mostrar alunos.\n";
    
    $option = (int) readline("Informe a opção: ");

    switch ($option) 
    {
        case 1:
            echo "\t\t\tDados do aluno:\n\n";
            $studentName = readline("Nome: ");
            $studentRM = readline("RM: ");
            $studentEmail = readline("Email: ");
            
            

            echo "Aluno adicionado.\n\n";
            readline("Pressione qualquer tecla...");
            break;
        
        case 2:
            echo "aluno tal\nAluno tal\n";
            readline("Pressione qualquer tecla...\n\n");
            break;
        
        default:
            echo "Fechando Programa...";
    }
}while($option <= 2);
