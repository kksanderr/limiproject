<?php
  require_once('core/start.php');
  $db = Database::connect();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limi blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header class="header-wrapper">
      <div class="container">
        <div class="header">
          <h2 class="logo"><a href="index.php">
            <img src="./img/logo.png" alt="logo">
          </a></h2>
          <nav class="nav-bar">
              <ul>
                <li>
                  <a href="#">Home</a>
                </li>
                <li>
                  <a href="#">About</a>
                </li>
                <li>
                  <a href="#">Login</a>
                </li>
                <li>
                  <a href="#">Signup</a>
                </li>
              </ul>
          </nav>
        </div>
      </div>
    </header>
<!-- banner -->
    <section class="main-banner mb-5">
      <div class="container">
        <div class="banner-text">
          <h1>Limischool Bloger</h1>
          <p>It is our belief that in order to be most efficient it requires
            adaptive technology and software our customers can focus on their core business.</p>
        </div>
      </div>
    </section>
<!-- boxevi -->
    <section class="container">
      <div class="box-wrapper">
        <div class="box">
          <h2>Lorem ipsum dolor sit amet</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id
            massa nec velit lacinia fringilla. Nunc rutrum elit ut quam dignissim,
            sed rhoncus lacus pretium. Quisque facilisis nisi vitae tortor
            euismod pretium. Proin quis risus consequat risus gravida luctus
            at eu neque. Vestibulum a orci facilisis libero finibus commodo id
            vel quam. Ut in tincidunt nunc, sit amet lacinia erat. Sed malesuada
            orci in suscipit eleifend. Nullam vehicula scelerisque sagittis.
            Cras pulvinar consequat lectus et commodo. Duis accumsan sem sit amet
            turpis cursus imperdiet. Nullam volutpat augue velit, at mollis
            libero egestas sed. Proin quis porttitor tellus.</p>
          <div>
            <a href="#">Read More</a>
          </div>
        </div>

        <div class="box">
          <h2>Lorem ipsum dolor sit amet</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id
            massa nec velit lacinia fringilla. Nunc rutrum elit ut quam dignissim,
            sed rhoncus lacus pretium. Quisque facilisis nisi vitae tortor
            euismod pretium. Proin quis risus consequat risus gravida luctus
            at eu neque. Vestibulum a orci facilisis libero finibus commodo id
            vel quam. Ut in tincidunt nunc, sit amet lacinia erat. Sed malesuada
            orci in suscipit eleifend. Nullam vehicula scelerisque sagittis.
            Cras pulvinar consequat lectus et commodo. Duis accumsan sem sit amet
            turpis cursus imperdiet. Nullam volutpat augue velit, at mollis
            libero egestas sed. Proin quis porttitor tellus. </p>
          <div>
            <a href="#">Read More</a>
          </div>
        </div>

        <div class="box">
          <h2>Lorem ipsum dolor sit amet</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id
            massa nec velit lacinia fringilla. Nunc rutrum elit ut quam dignissim,
            sed rhoncus lacus pretium. Quisque facilisis nisi vitae tortor
            euismod pretium. Proin quis risus consequat risus gravida luctus
            at eu neque. Vestibulum a orci facilisis libero finibus commodo id
            vel quam. Ut in tincidunt nunc, sit amet lacinia erat. Sed malesuada
            orci in suscipit eleifend. Nullam vehicula scelerisque sagittis.
            Cras pulvinar consequat lectus et commodo. Duis accumsan sem sit amet
            turpis cursus imperdiet. Nullam volutpat augue velit, at mollis
            libero egestas sed. Proin quis porttitor tellus. </p>
          <div>
            <a href="#">Read More</a>
          </div>
        </div>

      </div>
    </section>
  </body>
</html>
