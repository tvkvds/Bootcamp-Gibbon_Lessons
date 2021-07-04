<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>lessons</title>
</head>
<body>



<h1 class="m-5"> Gibbon lessons</h1>
<main class="container-fluid">
    <div class="">

    
  
    
    <div class="">

<?php if ($_SERVER["REQUEST_METHOD"] !== "POST") : ?>

    <form action="index.php" method="POST" class="m-5">
    <h3> Add new lesson </h3>
        <div class="form-group">
            <label for="name">Week:</label> <!--needs to be ranged -->
            <input type="text"  name="week" required><br>
            <label for="name">Name:</label>
            <input type="text"  name="name" required><br>
            <label for="focus">Main focus:</label>
            <input type="text"  name="focus" required><br>
            <label for="source">Link:</label>
            <input type="text"  name="source" required><br>
            <label for="score">Score:</label>
            <input type="range" min="1" max="5" name="score" required><br>
            
            <button type="submit" value="submit lesson">Save lesson</button>
        </div>
    </form>
<?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>

   <?php
   #var_dump($_POST);
   $makelesson = new Lesson($_POST['week'],$_POST['name'], $_POST['focus'], $_POST['source']);
   $makelesson->scoreLesson($_POST['score']);
   lessonToDB($makelesson);
   ?>
   <h3 class="m-5">Added new lesson!</h3>

<?php endif; ?>

</div>




<div> 
    <div class="accordion m-5" id="accordionExample">

        <?php for ($i = 1; $i < 13; $i++) : ?>
    
            <?php
            $writtenNums = ["_","One", 'Two', "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve"];
            $weekDesc = "Week $writtenNums[$i]";
            
            ?>

            <h2 class="accordion-header" id="heading<?=$writtenNums[$i]?>">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$writtenNums[$i]?>" aria-expanded="true" aria-controls="<collapse<?=$writtenNums[$i]?>">
            <?=$weekDesc; ?>
            </button>
            </h2>

    

            <div id="collapse<?=$writtenNums[$i]?>" class="accordion-collapse collapse" aria-labelledby="heading<?=$writtenNums[$i]?>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?php $result = $weeks[$i] ?>
                    <?php foreach ($result as $lesson) : ?>
                        <div  id="lesson">
                            Name: <?=$lesson->name?> <br>
                            Main focus: <?=$lesson->focus?><br>
        
                            <?php if ($lesson->score !== NULL): ?>
                            Score: <?=$lesson->score?> <br>
                            <?php endif; ?>
                            <a href="<?=$lesson->source?>">Go to lesson </a>
                            <!-- - <a href=""> Rate lesson</a> -->
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        <?php endfor; ?>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>