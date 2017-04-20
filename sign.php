<?php
	$no=$_POST["no"];
	$id=$_POST["id"];
	$email=$_POST["email"];
	$conn= mysqli_connect("localhost:3306","shreyam","shreyam","sqrl");
    if(! $conn ) {
      die('<br/>Could not connect: ' . mysqli_error($conn));
    }
    echo '<br/>Connected Sucessfully';
    $sql="update login set stat=1,id='$id',email='$email' where value='$no'";
    $retval=mysqli_query($conn,$sql);
     if(! $retval ) {
        die('<br/>Could not enter data: ' . mysqli_error($conn));
      }
      else {
        echo "<br/>Entered data successfully\n";
      }
    mysqli_close($conn);
?>