<?php

class Lesson {
     
    /*
     base for class:
     name
     focus  -- php -- mysql -- html -- laravel -- soft skills -- somethingelse
     source 
     score - 1 to 5 range
     */

    public $completed = false; #boolean
    public $score = null; #int
    //needs a function to get median score

    public function __construct($week, $name, $focus, $source){
        $this->name = $name; #string
        $this->focus = $focus; #string
        $this->source = $source; #string
        $this->week = $week; #int
    }

    public function scoreLesson($score){
        $this->score = $score; #int
    }

}

$lessonsWeek1 = [
    new Lesson('1','php for beginners 3', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/3'),
    new Lesson('1','php for beginners 4', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/4'),
    new Lesson('1','php for beginners 5', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/5'),
    new Lesson('1','php for beginners 6', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/6'),
    new Lesson('1','php for beginners 7', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/7'),
    new Lesson('1','php for beginners 8', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/8'),
    new Lesson('1','php for beginners 9', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/9'),
    new Lesson('1','php for beginners 10', 'php', 'https://laracasts.com/series/php-for-beginners/episodes/10'),
    new Lesson('1','php for beginners 11', 'mysql', 'https://laracasts.com/series/php-for-beginners/episodes/11')

];
$lessonsWeek2 = [new Lesson('2','demolesson', 'php', 'https://findtheinvisiblecow.com/')];
$lessonsWeek3 = [new Lesson('3','demolesson', 'php', 'https://findtheinvisiblecow.com/')];
$lessonsWeek4 = [new Lesson('4','demolesson', 'php', 'https://findtheinvisiblecow.com/')];
$lessonsWeek5 = [new Lesson('5','demolesson', 'php', 'https://findtheinvisiblecow.com/')];
$lessonsWeek6 = [new Lesson('6','demolesson', 'php', 'https://findtheinvisiblecow.com/')];
$lessonsWeek7 = [new Lesson('7','demolesson', 'php', 'https://findtheinvisiblecow.com/')];
$lessonsWeek8 = [new Lesson('8','demolesson', 'php', 'https://findtheinvisiblecow.com/')];
$lessonsWeek9 = [new Lesson('9','demolesson', 'php', 'https://findtheinvisiblecow.com/')];
$lessonsWeek10 = [new Lesson('10','demolesson', 'php', 'https://findtheinvisiblecow.com/')];
$lessonsWeek11 = [new Lesson('11','demolesson', 'php', 'https://findtheinvisiblecow.com/')];
$lessonsWeek12 = [new Lesson('12','demolesson', 'php', 'https://findtheinvisiblecow.com/')];








#var_dump($lessonsWeekOne);