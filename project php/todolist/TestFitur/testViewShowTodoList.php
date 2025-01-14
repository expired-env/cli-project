<?php

require_once "../view/ViewShowTodoList.php";
require_once "../businesslogic/AddTodoList.php";

addTodoList("Aditya");
addTodoList("Rahman");
addTodoList("Web Developer");
addTodoList("Penetration Tester");

viewShowTodoList();