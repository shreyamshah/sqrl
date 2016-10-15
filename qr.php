<?php
$QR_BASEDIR = dirname(__FILE__).DIRECTORY_SEPARATOR;
		
	include $QR_BASEDIR."phpqrcode.php";
	 $codeContents = random_int(1,PHP_INT_MAX); 
     
    // generating 
    $text = QRcode::text($codeContents); 
    $raw = join("<br/>", $text); 
     
    $raw = strtr($raw, array( 
        '0' => '<span style="color:white">&#9608;&#9608;</span>', 
        '1' => '&#9608;&#9608;' 
    )); 
     
    // displaying 
     
    echo '<tt style="font-size:7px">'.$raw.'</tt>'; 
	
	