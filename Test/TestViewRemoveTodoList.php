<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar Java");
addTodoList("Belajar Python");

showTodoList();

viewRemoveTodoList();

showTodoList();