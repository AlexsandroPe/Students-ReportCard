<?php

require_once "./student.php";

$grades = [];
$students = [];

do{
    echo "\rSistema de Boletim\n\n";

    echo "Menu: \n";
    
    echo "1- Adicionar aluno.\n2- Mostrar alunos.\n";
    
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
            $grades[$student->getRm()] = $student->getGrades();

            readline("Pressione qualquer tecla...");
            break;
        
        case 2:

            foreach($students as $student){
                echo $student->getName();

                $notasSomadas = 0; 
                foreach($student->getGrades() as $grade){
                    $notasSomadas += $grade;
                }
                echo "\nMedia: " . $notasSomadas / count($student->getGrades()) .  "\n\n";
            }

            readline("Pressione qualquer tecla...\n\n");
            break;
            
        default:
            echo "Fechando Programa...";
    }
}while($option <= 2);
