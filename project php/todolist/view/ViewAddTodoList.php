<?php

require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../helper/Input.php";
require_once __DIR__ . "/../businesslogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal) ");

    if ($todo == "x") {
        echo "Batal Menambah Todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}