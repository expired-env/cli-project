<?php

require_once "../model/todolist.php";
require_once "../businesslogic/AddTodoList.php";
require_once "../businesslogic/ShowTodoList.php";
require_once "../businesslogic/RemoveTodoList.php";

addTodoList("Adit");
addTodoList("mahasiswa");
addTodoList("informatika");
addTodoList("cyber security");

showTodoList();
removeTodoList(3);

showTodoList();
removeTodoList(2);

showTodoList();
$success = removeTodoList(4);
var_dump($success);

showTodoList();
