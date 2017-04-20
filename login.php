<?php
session_start();
if(isset($_GET["source"]))
{
	if(isset($_SESSION["name"]))
	{
    
		header('Location: $_GET["source"]');
	}
}
if(isset($_SESSION["name"]))
	{
    $_SESSION["dummy"]["name"]=$_SESSION["name"];
    $_SESSION["dummy"]["email"]=$_SESSION["email"];
		header('Location: home.php');
	}
$QR_BASEDIR = dirname(__FILE__).DIRECTORY_SEPARATOR;   
  include $QR_BASEDIR."phpqrcode.php";
  $codeContents=mt_rand(0,PHP_INT_MAX);
  echo "\n";
     
    // generating 
    $text = QRcode::text($codeContents); 
    $raw = join("<br/>", $text); 
     
    $raw = strtr($raw, array( 
        '0' => '<span style="color:white">&#9608;&#9608;</span>', 
        '1' => '&#9608;&#9608;' 
    )); 
     
    // displaying 
    echo '<tt style="font-size:7px">'.$raw.'</tt>'; 
     $conn= mysqli_connect("localhost:3306","shreyam","shreyam","sqrl");
    if(! $conn ) {
      die('<br/>Could not connect: ' . mysqli_error($conn));
   }
   
   //echo '<br/>Connected successfully';
   $sql="insert into login (value,times) values ('$codeContents',NOW())";
   $retval = mysqli_query( $conn,$sql );
     if(! $retval ) {
      die('<br/>Could not enter data: ' . mysqli_error($conn));
   }
   $n=0;
   while($n<=5) {
   	$sql="select stat,id,email from login where value='".$codeContents."'";
   	$retval=mysqli_query($conn,$sql);
   	if(! $retval ) {
        die('<br/>Could not enter data: ' . mysqli_error($conn));
      }
      else {
        echo "<br/>Selected data successfully\n";
        $row=mysqli_fetch_assoc($retval);
        $stats=$row['stat'];
        echo $stats;
   	if($stats==1)
    {
    	$num=$row['id'];
    $emails=$row['email'];
    	$sql="select email from user where numb='".$num."'";
      $retval=mysqli_query($conn,$sql);
   	if(! $retval ) {
        die('<br/>Could not enter data: ' . mysqli_error($conn));
      }
      $row=mysqli_fetch_assoc($retval);
      $email=$row['email'];
    
    $sql="delete from login where stat=".$stats;
    $retval = mysqli_query( $conn,$sql );
    if(! $retval ) {
        die('<br/>Could not enter data: ' . mysqli_error($conn));
      }
      
      echo $emails."==".$email;
      if($email==$emails) {
      	$sql="select name from user where numb='".$num."'";
      	$retval=mysqli_query($conn,$sql);
      	if(!$retval) {
      		die(',</br>Could not enter data'. mysqli_error($conn));
      	}
      	$row=mysqli_fetch_assoc($retval);
      	if(!isset($_GET["source"])) {
      	$_SESSION["id"]=$num;
      	$_SESSION["email"]=$email;
      	$_SESSION["name"]=$row["name"];;
      }
      	session_commit();
      	mysqli_close($conn);
      	if(isset($_GET["source"]))
{
	echo' <script type="text/javascript">
		window.location.href = "'.$_GET["source"].'";
		</script>';
}
      	echo' <script type="text/javascript">
		window.location.href = "home.php";
		</script>';
      }
   	}
   	else  {
      sleep(5);
      ob_flush();
      flush();
      $n++;
    }
   }
   }
   mysqli_close($conn);
   session_destroy();
   if(isset($_GET["source"]))
{
	echo' <script type="text/javascript">
		window.location.href = "login.php?source="'.$_GET["source"].'";
		</script>';
}
      	echo' <script type="text/javascript">
		window.location.href = "login.php";
		</script>';
 //echo "<br/>Entered data successfully\n";
 ?>
    