<?php
$QR_BASEDIR = dirname(__FILE__).DIRECTORY_SEPARATOR;
		
	include $QR_BASEDIR."phpqrcode.php";
    $codeContents= $_POST["fname"]."\n";
    $codeContents= $codeContents.$_POST["lname"]."\n";
    $codeContents= $codeContents.$_POST["email"]."\n";
    $num=rand(1,9999999999);
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
   
   echo '<br/>Connected successfully';
   $sql="insert into login values('$num',NOW())";
   $retval = mysqli_query( $conn,$sql );
     if(! $retval ) {
      die('<br/>Could not enter data: ' . mysqli_error($conn));
   }
   echo "<br/>Entered data successfully\n";
   mysqli_close($conn);

?>
	
	