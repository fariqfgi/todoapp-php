<?php

require_once "../View/ViewShowTodoList.php";
require_once "../Businesslogic/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar Java");
addTodoList("Belajar Python");

viewShowTodoList();