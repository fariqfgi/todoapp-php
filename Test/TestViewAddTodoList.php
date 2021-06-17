<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar Java");
addTodoList("Belajar Python");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();