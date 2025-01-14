<?php

require_once "../model/todolist.php";
require_once "../businesslogic/AddTodoList.php";

// Menambahkan todo
addTodoList("Aditya");
addTodoList("Rahman");
addTodoList("Ganteng");

// Dump array todolist
var_dump($todoList);
