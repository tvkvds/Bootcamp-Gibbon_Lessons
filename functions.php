<?php
function fetchAllLessons() {
    $pdo = Connection::make();
    $statement = $pdo->prepare('SELECT * FROM lessons');
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_OBJ);
    return $result;
    }

    function fetchWeekLessons($weekNum) {
        $pdo = Connection::make();
        $statement = $pdo->prepare('SELECT * FROM lessons
        WHERE week = :weeknum');
        $statement->execute(array(':weeknum' => $weekNum));
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
        }

function lessonToDb($newlesson){

    $lesson = [
        'week'=>$newlesson->week,
        'name'=>$newlesson->name,
        'focus'=>$newlesson->focus,
        'source'=>$newlesson->source,
        'score'=> $newlesson->score

    ];
    
    $pdo = Connection::make();
    $statement = $pdo->prepare('INSERT INTO lessons (week, name, focus, source, score) VALUES (:week, :name, :focus, :source, :score)');
    $statement->execute($lesson);
    
    return;
}



function dd($variable){
    echo '<pre>';
    die(var_dump($variable));
    echo '</pre>';
}