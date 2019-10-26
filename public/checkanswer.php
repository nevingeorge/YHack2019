<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Check Answer</title>
  </head>

  <?php

    $answer = $_POST['alg1q1s1'];
    $correct = 3;
	
	if($answer!=$correcft)
	{
		echo 'Keep trying!';
	}
	else
	{
		header("refresh:0; url=alg1q1.html");
	}
  ?>
</html>