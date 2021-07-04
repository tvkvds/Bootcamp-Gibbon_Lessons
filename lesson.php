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
