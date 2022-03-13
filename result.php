<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Quiz App</title>
  </head>
  <body>
    <div class="container">
    	<h1 class='bg-dark text-light text-center py-5 mb-0'>
        <a class="text-decoration-none text-light" href="index.php">Quiz Application</a></h1>
      <h3 class='bg-success text-light ps-2 py-2 mt-0'>Total Questions: 5 | Total Marks: 10 | Pass Marks: 4 / 10</h3>

    	<div class="card">
    		<div class="card-header">Result</div>
    		<div class="card-body">
    			<?php 
              if ($_POST['question-1-answers'] != '' && $_POST['question-2-answers'] != '' && $_POST['question-3-answers'] !='') {
                $answer1 = $_POST['question-1-answers'];
                $answer2 = $_POST['question-2-answers'];
                $answer3 = $_POST['question-3-answers'];
                $answer4 = $_POST['question-4-answers'];
                $answer5 = $_POST['question-5-answers'];

                $totalCorrect = 0;
                $totalIncorrect = 0;



                if ($answer1 == 'C') {
                  $totalCorrect+=1;
                }else{
                  $totalIncorrect+=1;
                }

                if ($answer2 == 'D') {
                  $totalCorrect+=1;
                }else{
                  $totalIncorrect+=1;
                }

                if ($answer3 == 'A') {
                  $totalCorrect+=1;
                }else{
                  $totalIncorrect+=1;
                }

                if ($answer4 == 'B') {
                  $totalCorrect+=1;
                }else{
                  $totalIncorrect+=1;
                }

                if ($answer5 == 'A') {
                  $totalCorrect+=1;
                }else{
                  $totalIncorrect+=1;
                }


                
                $totalMarks = $totalCorrect * 2;

                if ($totalMarks >= 4) {
                  echo '<h2 class="text-success">';
                  echo 'Total Correct: '.$totalCorrect."<br>";
                  echo '</h2>';
                  echo '<h2 class="text-danger">';
                  echo 'Total Incorrect: '.$totalIncorrect;
                  echo '</h2>';
                  echo '<h2 class="fw-bold">';
                  echo 'Total Marks: '.$totalMarks;
                  echo '</h2>';
                  echo '<h2 class="bg-success text-light p-2">';
                  echo "You have passed";
                  echo '</h2>';
                }else{
                  echo '<h2 class="text-success">';
                  echo 'Total Correct: '.$totalCorrect."<br>";
                  echo '</h2>';
                  echo '<h2 class="text-danger">';
                  echo 'Total Incorrect: '.$totalIncorrect;
                  echo '</h2>';
                  echo '<h2>';
                  echo 'Total Marks: '.$totalMarks;
                  echo '</h2>';
                  echo '<h2 class="bg-danger text-light p-2>';
                  echo "Sorry You have failed";
                  echo '</h2>';
                }
              }else{
                header("Location: index.php?msg=Please Answer All Querstion");
              }
            


            
    			 ?>
    		</div>
    	</div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>
