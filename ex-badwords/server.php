<?php

//var_dump($_GET);
$word = $_GET['word'];
$original_text = $_GET['text'];


$censored_text = str_replace($word, '***', $original_text);
//var_dump($censored_text);
//var_dump(strlen($censored_text));

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server</title>
</head>

<body>



  <h2>Original Text</h2>
  <p>Original: <?php echo $original_text; ?></p>
  <p>Length: <?php echo strlen($original_text); ?></p>

  <hr>

  <h2>Censored Text</h2>
  <p>Censored: <?php echo $censored_text; ?></p>
  <p>Length: <?php echo strlen($censored_text); ?></p>

</body>

</html>