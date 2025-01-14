<?php


require_once "../model/todolist.php";
require_once "../view/ViewRemoveTodoList.php";
require_once "../businesslogic/AddTodoList.php";
require_once "../businesslogic/ShowTodoList.php";

addTodoList("Gambut");
addTodoList("Alalak");
addTodoList("Handil bakti");
addTodoList("Kandangan");

showTodoList();

viewRemoveTodoList();

ShowTodoList();