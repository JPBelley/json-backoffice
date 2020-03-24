<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Json to Text || Text to Json</title>

  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="intro">
    <div class="page-wrapper">
      <h2>Please upload a json file</h2>
    </div>
  </div>

  <div class="page-wrapper">
    <div class="button button--orange" id="uploadFile">Choose a file</div>
    <input class="button" type="file" id="inputJSON">
  </div>
  <hr>

  <div class="page-wrapper">
    <form action="" method="POST">
      <div id="jsonContainer"></div>
      <?php
      // Get the contents of the JSON file 
      // $strJsonFileContents = file_get_contents("test.json");

      // $json = json_decode($strJsonFileContents);
      // foreach($json as $key => $obj){
      //   if(gettype($obj) === 'object')  {
      //     echo '<p class="json-key">'  . $key . '</p> => ' .  ':';

      //     foreach($obj as $key => $subObj){
      //       echo '<p class="json-key" style="padding-left: 20px;">' . $key . '</p>:&nbsp;<input value="' . $subObj . '" />';
      //     }
      //   }
      // else echo '<div class="json-row"><p class="json-key">'  . $key . '</p>&nbsp; ' .  ':&nbsp;&nbsp;<input value="' . $obj . '" /></div>';
      // echo '<div class="json-row"><p class="json-key">'  . $key . '</p>&nbsp; ' .  ':&nbsp;&nbsp;<input value="' . $obj . '" name="' . $key . '"/></div>';
      // }
      ?>
      <br />
      <button class="button button--blue" type="submit" id="downloadFile">Download file</button>
    </form>

  </div>
  <script src="./scripts.js"></script>
  <script>
    init();
  </script>
</body>

</html>