<?php

require_once "./student.php";

$students = [];

do{
    echo "\n\nSistema de Boletim\n\n";
    echo "Menu: \n";
    echo "1- Adicionar aluno.\n2- Mostrar alunos.\n\n";
    $option = (int) readline("Informe a opção: ");

    switch ($option) 
    {
        case 1:
            echo "\t\t\tDados do aluno:\n\n";
            $studentName = readline("Nome: ");
            $studentRm = readline("RM: ");
            $studentEmail = readline("Email: ");
            $student = new Student($studentName, $studentRm, $studentEmail);
            $students[] = $student;
            echo "Aluno adicionado.\n\n";
            echo "Informe as notas:\n";
            $firstEx = readline("Primeira atividade: ");
            $secondEx = readline("Segunda atividade: ");
            $thirdEx = readline("Terceira atividade: ");
            $student->setGrades($firstEx, $secondEx, $thirdEx);  
            readline("Pressione qualquer tecla...");
            break;
        
        case 2:
            foreach($students as $student){
                
                echo $student->getName() . "\n" . $student->getEmail() . "\n" . $student->getRm();
                $notasSomadas = 0;
                echo "\n\n*** Notas ***\n";
                
                foreach($student->getGrades() as $exercise => $grade){
                    echo $exercise . ":" . $grade . "\t";
                    $notasSomadas += $grade;
                }

                $media = round($notasSomadas / count($student->getGrades()));

                if($media < 6){
                    echo "\nmedia: " . $media;
                    echo "\nSituação: Reprovado!"; 
                }else{
                    echo "Media: " . $media;
                    echo "\nSituação: Aprovado!\n";
                }
            }

            readline("Pressione qualquer tecla...\n\n");
            break;
            
        default:
            echo "\n\nInforme os valores corretos...";
    }

}while($option <= 2);
