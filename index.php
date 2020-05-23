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
<!-- Header -->
<?php include('./templates/header.php'); ?>

<!-- banner -->
<?php include('./templates/banner.php'); ?>

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

    <section class="container mb-2">
      <h2 class="title">Upcoming events</h2>
      <div class="box-wrapper events">
            <div class="box">
                <img src="img/event/1.jpg" alt="alt-img1">
                <h3>Rihanna, Eminem on stage</h3>
                <span>Integrating technology and software solutions.</span>
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software solutions.</p>

            </div>
            <div class="box">
                <img src="img/event/2.jpg" alt="alt-img2">
                <h3>Dr. Dre on stage live</h3>
                <span>Integrating technology and software solutions.</span>
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software solutions.</p>
            </div>
            <div class="box">
                <img src="img/event/3.jpg" alt="alt-img3">
                <h3>Macaroons live Party</h3>
                <span>Integrating technology and software solutions.</span>
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software solutions.</p>
            </div>
        </div>
    </section>

    <section class="container mb-2">
      <h2 class="title">Latest Blogs</h2>
        <div class="box-wrapper blog">
            <div class="box">
                <img src="./img/blog/1.jpg" alt="alt-blog1">
                <h3>Communicating with you every step of the way</h3>
                <span>July 02, 2014 | Tag: Technology | By: David John</span>
                <p>We combine continuing education and constant monitoring us with
                  your project details if you are interested to ge of industry trends
                  and innovations to provide the right IT solution at the right time.
                  Contact us with your project details if you are interested to
                  get our Web Solution or Software Development Services.</p>
            </div>
            <div class="box">
                <img src="./img/blog/2.jpg" alt="alt-blog2">
                <h3>Communicating with you every step of the way</h3>
                <span>July 02, 2014 | Tag: Technology | By: David John</span>
                <p>We combine continuing education and constant monitoring us with
                  your project details if you are interested to ge of industry trends
                  and innovations to provide the right IT solution at the right time.
                  Contact us with your project details if you are interested to
                  get our Web Solution or Software Development Services.</p>
            </div>
        </div>
        <div class="blog-btn">
          <a href="#">See More</a>
        </div>
    </section> <!-- end blog -->

    <!-- Subscribe -->
    <section class="subscribe" id="subscribe">
      <div class="container">
        <div class="subscribe-content">
          <h2>Subscribe Here for Updates</h2>
          <form action="subscribe.php" method="post">
            <input class="subscribe-field" type="text" name="email" placeholder="Email">
            <input class="subscribe-button" type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </section>
    <!-- End Subscribe -->

    <!-- Footer -->
    <footer class="footer-wrapper">
      <div class="container">
        <div class="footer">
          <ul class="nav-list">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li class="footer-list-divider">|</li>
            <li>
              <a href="#">About</a>
            </li>
            <li class="footer-list-divider">|</li>
            <li>
              <a href="login.html">Login</a>
            </li>
            <li class="footer-list-divider">|</li>
            <li>
              <a href="signup.html">Signup</a>
            </li>
            <p class="copyright mt-2">Copyright &copy; Limischool <?php echo date('Y'); ?></p>
          </ul>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
  </body>
</html>
