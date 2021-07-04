<?php 

require 'functions.php';
require 'database/Connection.php';
require 'lesson.php';


#$pdo = Connection::make();



$result = fetchAllLessons();



$weeks = [];

for ($i = 0; $i < 13; $i++ ){


$weeks[$i] = fetchWeekLessons($i);
};











require 'index.view.php';

