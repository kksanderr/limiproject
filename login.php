<?php
  require_once('core/start.php');
  $db = Database::connect();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limi blog - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <?php include('./templates/header.php'); ?>

    <section class="container-sm">
      <div class="login-box">
        <div class="login-form">
          <form action="" method="post">
          </form>
        </div>
      </div>
    </section>

    <?php include('./templates/footer.php'); ?>

    <script
      src="https://code.jquery.com/jquery-3.5.0.min.js"
      integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
      crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="./js/main.js"></script>

  </body>
</html>
