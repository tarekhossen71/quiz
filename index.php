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
    <div class="container pb-5">
    	<h1 class='bg-dark text-light text-center py-5 mb-0 ps-2'>
    		<a class="text-decoration-none text-light" href="index.php">Quiz Application</a>
    	</h1>
    	<h3 class='bg-success text-light ps-2 py-2 mt-0'>Total Questions: 5 | Total Marks: 10 | Pass Marks: 4 / 10</h3>
    	<?php 
    		if (isset($_GET['msg'])) {
    			
    			echo '<div id="mydiv" class="alert alert-warning alert-dismissible fade show" role="alert">';
					echo $_GET['msg'];
					echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
					echo '</div>';
		
    		}

    		?>
    		
    	
			<form action="result.php" method="post">
	    	<div class="card">
		    		<div class="card-body">
		    			<h2 class="card-title">1.What is WordPress?</h2>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-1-answers" id="question-1-answers-A"value="A">
							  <label class="form-check-label" for="question-1-answers-A">A) Software</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-1-answers" id="question-1-answers-B" value="B">
							  <label class="form-check-label" for="question-1-answers-B">B) Web App</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-1-answers" id="question-1-answers-C"value="C">
							  <label class="form-check-label" for="question-1-answers-C">C) CMS</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-1-answers" id="quesiton-1-answers-D"value="D">
							  <label class="form-check-label" for="quesiton-1-answers-D">D) Other</label>
							</div>
		    		</div>
	    	</div>
	    	<div class="card mt-2">
		    		<div class="card-body">
		    			<h2 class="card-title">2. PHP Stands for?</h2>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-2-answers" id="question-2-answers-A"value="A">
							  <label class="form-check-label" for="question-2-answers-A">A) PHP Hypertex Processor</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-2-answers" id="question-2-answers-B" value="B">
							  <label class="form-check-label" for="question-2-answers-B">B)  PHP Hyper Markup Processor</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-2-answers" id="question-2-answers-C"value="C">
							  <label class="form-check-label" for="question-2-answers-C">C) PHP Hyper Markup Preprocessor</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-2-answers" id="quesiton-2-answers-D"value="D">
							  <label class="form-check-label" for="quesiton-2-answers-D">D)  PHP Hypertext Preprocessor</label>
							</div>
		    		</div>
	    	</div>
	    	<div class="card mt-2">
		    		<div class="card-body">
		    			<h2 class="card-title">3. PHP is an example of ___________ scripting language.</h2>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-3-answers" id="question-3-answers-A"value="A">
							  <label class="form-check-label" for="question-3-answers-A">A) Server-side</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-3-answers" id="question-3-answers-B" value="B">
							  <label class="form-check-label" for="question-3-answers-B">B)  Client-side</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-3-answers" id="question-3-answers-C"value="C">
							  <label class="form-check-label" for="question-3-answers-C">C) Browser-side</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-3-answers" id="quesiton-3-answers-D"value="D">
							  <label class="form-check-label" for="quesiton-3-answers-D">D) In-side</label>
							</div>
		    		</div>
	    	</div>
	    	<div class="card mt-2">
		    		<div class="card-body">
		    			<h2 class="card-title">4. Which of the following variables is not a predefined variable? </h2>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-4-answers" id="question-4-answers-A"value="A">
							  <label class="form-check-label" for="question-4-answers-A">A) $get</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-4-answers" id="question-4-answers-B" value="B">
							  <label class="form-check-label" for="question-4-answers-B">B) $ask</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-4-answers" id="question-4-answers-C"value="C">
							  <label class="form-check-label" for="question-4-answers-C">C) $request</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-4-answers" id="quesiton-4-answers-D"value="D">
							  <label class="form-check-label" for="quesiton-4-answers-D">D) $post</label>
							</div>
		    		</div>
	    	</div>
	    	<div class="card mt-2">
		    		<div class="card-body">
		    			<h2 class="card-title">5. Which of the following method sends input to a script via a URL? </h2>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-5-answers" id="question-5-answers-A"value="A">
							  <label class="form-check-label" for="question-5-answers-A">A) Get</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-5-answers" id="question-5-answers-B" value="B">
							  <label class="form-check-label" for="question-5-answers-B">B) Post</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-5-answers" id="question-5-answers-C"value="C">
							  <label class="form-check-label" for="question-5-answers-C">C) Both</label>
							</div>
							<div class="form-control mt-2">
							  <input class="form-check-input" type="radio" name="question-5-answers" id="quesiton-5-answers-D"value="D">
							  <label class="form-check-label" for="quesiton-5-answers-D">D) None</label>
							</div>
		    		</div>
	    	</div>
				<div>
					<input class="btn btn-primary mt-2" name="submit" type="submit" value="Submit">
				</div>
    	</form>
    </div>



    <footer class="bg-dark text-light text-center py-4">
    	<p class="mt-2">Copyright &copy; | Create By: Tarek</p>
    </footer>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
    $(function() {
        $("#mydiv").fadeOut(4000);
    });              
</script>
    </body>
</html>
