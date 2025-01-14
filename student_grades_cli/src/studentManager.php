<?php

const STUDENTS_FILE = "students.json";

function loadStudents() {
    if (!file_exists(STUDENTS_FILE)) {
        file_put_contents(STUDENTS_FILE, json_encode([]));
    }
    return json_decode(file_get_contents(STUDENTS_FILE), true);
}

function saveStudents($students) {
    file_put_contents(STUDENTS_FILE, json_encode($students, JSON_PRETTY_PRINT));
}

function listStudents() {
    $students = loadStudents();
    if (empty($students)) {
        echo "No students found. \n";
    } else {
        echo "==== Students List ====\n";
        foreach ($students as $index => $student) {
            echo "[" . ($index + 1) . "] " . $student['name'] . " | Grade: " . $student['grade'] . "\n";
        }
    }
}

function addStudent($name, $grade) {
    $students = loadStudents();
    $students[] = ['name' => $name, 'grade' => $grade];
    saveStudents($students);
    echo "Student added: $name with grade $grade\n";
}

function updateStudent($index, $name, $grade) {
    $students = loadStudents();
    if (isset($students[$index])) {
        $students[$index]['name'] = $name;
        $students[$index]['grade'] = $grade;
        saveStudents($students);
        echo "Student updated: $name with grade $grade\n";
    } else {
        echo "Student not found. \n";
    }
}

function deleteStudent($index) {
    $students = loadStudents();
    if (isset($students[$index])) {
        $removed = array_splice($students, $index, 1);
        saveStudents($students);
        echo "Students deleted: " . $removed[0]['name'] . "\n";
    } else {
        echo "Student not found. \n";
    }
}

function calculateAverage() {
    $students = loadStudents();
    if (empty($students)) {
        echo "No students to calculate average grade. \n";
        return;
    }

    $totalGrade = array_sum(array_column($students, 'grade'));
    $average = $totalGrade / count($students);
    echo "Average grade: " . number_format($average, 2) . "\n";
}

function showRanking() {
    $students=loadStudents();
    if (empty($students)) {
        echo "No students to rank.\n";
        return;
    }

    usort($students, function ($a, $b) {
        return $b['grade'] <=> $a['grade'];
    });

    echo "==== Ranking ====\n";
    foreach ($students as $rank => $student) {
        echo "[" . ($rank + 1) . "] " . $student['name'] . " | Grade: " . $student['grade'] . "\n";
    }
}