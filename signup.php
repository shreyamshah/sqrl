<!DOCTYPE html>
<html>
<head><title>SQRL|Register</title>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
      <!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"  media="screen,projection"/>
</head>

    <body>
      <!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script> 
<?php
include "nav.php";
?>
<center>
<form id="signup" name="signup" method="POST" action= "qr.php" autocomplete="off">

  <div class='row'>
      
      
      <div class="section"></div>

      <h5 class="indigo-text">Register</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input name="fname" class='validate' type='text' id='fname' required="true" />
                <label for='fname'>First Name</label>
              </div>
            </div>

  <div class='row'>
              <div class='input-field col s12'>
                <input name="lname" class='validate' type='text' id='lname' required="true" />
                <label for='lname'>Last Name</label>
              </div>
            </div>
            
								
           
            <div class='row'>
              <div class='input-field col s12'>
                <input name="email" class='validate' type='email' id="email" required="true" />
                <label for='email'>Email</label>
              </div>
            </div>
            <br />
              <div class='row'>
                <input type="submit" name="submit" id="submit" value="submit" class="col s6 btn btn-large waves-effect indigo">
                <input type='reset' class="col s6 btn btn-large waves-effect indigo">
              </div>
          </form>
        </div>
      </div>
      
</div>
</form></center>
</body>
</html>