
<head>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
 </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
      <?php
      session_start();
      echo '
<nav>
    <div class="nav-wrapper blue">
      <a href="home.php" class="brand-logo">SQRL</a>
      <ul class="right hide-on-med-and-down">';
     if(isset($_SESSION['name']))
      {
        echo'<li><a href="logout.php">Logout</a></li>';
        echo "<li>Welcome ".$_SESSION['name']."</li>";
        echo '<script>Materialize.toast("Welcome '.$_SESSION['name'].'", 3000, "rounded");</script>';
      }
      else {
        echo '
        <li><a href="signup.php">Signup</a></li>
        <li><a href="login.php">Login</a></li>';
        }
        ?>
      </ul>
    </div>
  </nav>
</body>
