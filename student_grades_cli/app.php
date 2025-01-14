<?php

require_once "src/helpers.php";
require_once "src/studentManager.php";

while (true) {
    displayMenu();
    $choice = trim(fgets(STDIN));
    switch ($choice) {
        case 1:
            listStudents();
            break;
        case 2:
            echo "Enter student name: ";
            $name = trim(fgets(STDIN));
            echo "Enter student grade (numeric): ";
            $grade = trim(fgets(STDIN));
            if (validateNumericInput($grade)) {
                addStudent($name, (float) $grade);
            }
            break;
        case 3:
            listStudents();
            echo "Enter student number to update: ";
            $index = (int) trim(fgets(STDIN)) - 1;
            echo "Enter new name: ";
            $name = trim(fgets(STDIN));
            echo "Enter new grade (numeric): ";
            $grade = trim(fgets(STDIN));
            if (validateNumericInput($grade)) {
                updateStudent($index, $name, (float) $grade);
            }
            break;
        case 4:
            listStudents();
            echo "Enter student number to delete: ";
            $index = (int) trim(fgets(STDIN)) - 1;
            deleteStudent($index);
            break;
        case 5:
            calculateAverage();
            break;
        case 6:
            showRanking();
            break;
        case 7: 
            echo "Goodbye!\n";
            exit;
        default:
            echo "Invalid option. Please try again.\n";
    }
}