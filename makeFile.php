<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <?php

  $json = [];

  foreach ($_POST as $key => $value) {
    $json[$key] = $value;
  }

  // echo $json;
  $file = './files/form-data-' . time() . '-' . rand(1000, 9999) . ".json";
  file_put_contents($file, json_encode($json));

  ?>
  <h1>Thanks, you can now download your file:</h1>
  <a href="<?php echo $file ?>" download>Download here</a>
</body>

</html>