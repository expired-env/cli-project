<?php

require_once "../view/ViewAddTodoList.php";
require_once "../businesslogic/ShowTodoList.php";
require_once "../businesslogic/AddTodoList.php";

addTodoList("Aditya");
addTodoList("Rahman");

viewAddTodoList();

showTodoList();