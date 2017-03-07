<!DOCTYPE html>
<html>
<head>
<title>Home|SQRL</title>
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet" integrity="sha384-awusxf8AUojygHf2+joICySzB780jVvQaVCAt1clU3QsyAitLGul28Qxb2r1e5g+" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js"></script>
<style>
#vim {
	position:relative;
}
#ok {
	padding:8px;
	background-color:red;
}
</style>
</head>
<body>
<?php
include 'nav.php';
?><!-- 
<div id="ok">
<button id="vim">hi</button></div> -->
<script>
window.onload = function() {
	var vim=document.getElementById("vim");
	TweenLite.to(vim, 5, {transform:rotate(20deg)});
}
</script>
</body>
</html>