<?php

require_once __DIR__ . "/model/todolist.php";
require_once __DIR__ . "/businesslogic/ShowTodoList.php";
require_once __DIR__ . "/businesslogic/AddTodoList.php";
require_once __DIR__ . "/businesslogic/RemoveTodoList.php";
require_once __DIR__ . "/view/ViewAddTodoList.php";
require_once __DIR__ . "/view/ViewRemoveTodoList.php";
require_once __DIR__ . "/view/ViewShowTodoList.php";
require_once __DIR__ . "/helper/Input.php";

echo "Aplikasi Todolist" . PHP_EOL;

viewShowTodoList();