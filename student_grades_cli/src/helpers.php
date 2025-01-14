<?php

function displayMenu() {
    echo "\n===== Student Grades System =====\n";
    echo "1. List student\n";
    echo "2. Add student\n";
    echo "3. Update student\n";
    echo "4. Delete student\n";
    echo "5. Calculate average grade\n";
    echo "6. Show ranking\n";
    echo "7. Exit\n";
    echo "Choose an option: ";
}

function validateNumericInput($input) {
    if (!is_numeric($input)) {
        echo "Invalid input. Please enter a numeric value.\n";
        return false;
    }
    return true;
}