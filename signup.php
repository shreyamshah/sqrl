<!DOCTYPE html>
<html>
<head><title>SQRL|Login</title>
<script type="text/javascript" src="ajax.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet" integrity="sha384-awusxf8AUojygHf2+joICySzB780jVvQaVCAt1clU3QsyAitLGul28Qxb2r1e5g+" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<center>
<form name="signup" id="signup" method="POST" onsubmit="return showqr();">
<div class="form-group">
<label class="control-label"  for="inputDefault">First Name: </label>
<input type="text" id="fname" name="fname" placeholder="First Name" required="true"><br>
<label class="control-label" for="inputDefault">Last Name: </label>
<input type="text" id="lname" name="lname" placeholder="Last Name" required="true"><br>
<label class="control-label" for="inputDefault">Email: </label>
<input type="email" id="email" name="email" placeholder="Enter Your Email" required="true"><br>
<input type="submit" id="submit" value="Submit" name="submit" >&nbsp;&nbsp;<input type="reset">
</div>
<div id="qr1" style="line-height: 0.5;"></div>
</form></center>
</body>
</html>