 <?php include "database.php"; ?>

<?php
	//Get the total questions
	$query="select * from questions";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Mini Qyuz!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">


      <main>
      <div class="container">
        <h2>Mini Side Project of Pythonic Lava</h2>
	<li>
		<li><strong>Number of Questions: </strong><?php echo $total; ?></li>

		<li><strong>Estimatd Time: </strong><?php echo $total*0.5; ?> minutes</li>
	</ul>
	<a href="question.php?n=1" class="start">Start Quiz</a>

          <a href="add.php" class="start">Add New Questions</a>
      </div>
    </div>
    </main>



  </body>
</html>