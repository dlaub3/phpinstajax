<?php
ini_set('display_errors', 'on');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHPINSTAJAX</title>
</head>
<body>
    <main>
        <h1> Insta Search </h1>
        <form action="app.php" method="post">
            <input type="text" name="username" value="popularmechanics"><br />
            <input type="submit" name="submit" value="Search"><br />
        </form>

        <div id="app">

        </div>

        <div class="row">
  <div class="col s12 m6">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Card Title</span>
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
      </div>
      <div class="card-action">
        <a href="#">This is a link</a>
        <a href="#">This is a link</a>
      </div>
    </div>
  </div>
</div>
<footer>
  <!-- webpack bundle contains css and loads it in the document head-->
  <script type="text/javascript" src="/dist/bundle.js"></script>
</footer>
</main>

<?php //phpinfo();?>
</body>
</html>
