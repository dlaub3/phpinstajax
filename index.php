<?php
ini_set('display_errors', 'on');
header("Link: </dist/bundle.js>; rel=preload; as=script", false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHPINSTAJAX</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body class="blue-grey lighten-4">
    <div id="app">
    </div>
<footer>
  <!-- webpack bundle contains css and loads it in the document head-->
  <script type="text/javascript" src="/dist/bundle.js"></script>
</footer>
</main>
</body>
</html>
