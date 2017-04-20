<!DOCTYPE html>
<html>
<head>
<title>Home|SQRL</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>

</style>
</head>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<?php
include "nav.php";
if(isset($_GET['done'])&&$_GET['done']=='true')
{
  echo '<script>Materialize.toast("You have Sucessfully Registered!", 3000, "rounded");Materialize.toast("Now click on Login to Login!",3000,"rounded");</script>';
}
?><!-- 
<div id="ok">
<button id="vim">hi</button></div> -->
<!--<script>
window.onload = function() {
	var vim=document.getElementById("vim");
	TweenLite.to(vim, 5, {transform:rotate(20deg)});
}
</script>-->
</body>
</html>