<html>
<head>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</script>
</head>
<body>
<form id="signup" name="signup" method="POST" action="qr.php" style="display:none;">
    <input name="fname" type="text" value="<?php echo $_POST['fname']; ?>" id="fname"/>
    <input name="lname" type="text" value="<?php echo $_POST['lname']; ?>" id="lname"/>
    <input name="email" type="email" value="<?php echo $_POST['email']; ?>"id="email"/>
    <input type="submit" name="btnsubmit" id="btnsubmit" value="submit"/>
    </form>
  <?php
$QR_BASEDIR = dirname(__FILE__).DIRECTORY_SEPARATOR;
      include $QR_BASEDIR."phpqrcode.php";
      include $QR_BASEDIR."Uuid.php";
    $codeContents= $_POST["fname"]."\n";
    $codeContents= $codeContents.$_POST["lname"]."\n";
    $codeContents= $codeContents.$_POST["email"]."\n";
    $num=Uuid::generate();
   $codeContents = $codeContents.$num; 
     
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
   $sql="insert into register(value,times) values('$num',NOW())";
   $retval = mysqli_query( $conn,$sql );
     if(! $retval ) {
      die('<br/>Could not enter data: ' . mysqli_error($conn));
   }
 //echo "<br/>Entered data successfully\n";
   $n=0;
   while($n<=5) {
    
    $sql="select stat from register where value='".$num."'";
    $retval = mysqli_query( $conn,$sql );
    if(! $retval ) {
        die('<br/>Could not enter data: ' . mysqli_error($conn));
      }
      else {
        echo "<br/>Selected data successfully\n";
        $row=mysqli_fetch_assoc($retval);
        $stats=$row['stat'];
        echo $stats;
      }
    if($stats==1)
    {
    $sql="delete from register where stat=".$stats;
    $retval = mysqli_query( $conn,$sql );
    if(! $retval ) {
        die('<br/>Could not enter data: ' . mysqli_error($conn));
      }
      else {
      $name=$_POST["fname"]." ".$_POST["lname"];  
      $email=$_POST["email"];      
    $sql="insert into user values('$name','$email','$num')";
    $retval = mysqli_query( $conn,$sql );
    if(! $retval ) {
      die('<br/>Could not enter data: ' . mysqli_error($conn));
    }
        echo "<br/>Data deleted successfully\n";
        mysqli_close($conn); 
     echo' <script type="text/javascript">
window.location.href = "home.php?done=true";
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
   mysqli_close($conn);
   echo' <script type="text/javascript">
document.forms[0].submit();
</script>';
?>
</body>
</html>