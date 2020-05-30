<header class="header-wrapper">
  <div class="container">
    <div class="header">
      <h2 class="logo"><a href="index.php">
        <img src="./img/logo.png" alt="logo">
      </a></h2>

      <button class="burger">

        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>

      </button>

      <nav class="nav-bar">
          <ul>
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="#">About</a>
            </li>

            <?php
              if(isset($user) && $user->isLoggedIn()) {
$html = <<<OUT
<li class="dropdown-wrapper">
  <a href="#"> {$user->data()->username} </a>
  <ul class="dropdown">
  <li>
  <a href="profile.php">
  Profile
  </a>
  </li>
  <li>
  <a href="#">
  New article
  </a>
  </li>
  <li class="dropdown-divider"></li>
  <li>
  <a href="#">
  Logout
  </a>
  </li>
  </ul>
  </li>
OUT;
              }
              else {
$html = <<<OUT
  <li>
  <a href="login.php">Login</a>
  </li>
  <li>
  <a href="signup.php">Signup</a>
  </li>
OUT;
              }
              echo $html;
            ?>

          </ul>
      </nav>
    </div>
  </div>
</header>
