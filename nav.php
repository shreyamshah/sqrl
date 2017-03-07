
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet" integrity="sha384-awusxf8AUojygHf2+joICySzB780jVvQaVCAt1clU3QsyAitLGul28Qxb2r1e5g+" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
<script type="text/javascript" src="ajax.js"></script>
</head>
<body>
<?php
echo '
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php">SQRL</a>
    </div>

    
      <ul class="nav navbar-nav navbar-right">
      <li> <a href="#" id="sign" onclick="pop();">Sign Up</a></li>
		<li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
';
?>
<center>
<div id="moda">
<span id="clos">&times;</span>
<div id="form1">
</div>
</div></center>
</body>
