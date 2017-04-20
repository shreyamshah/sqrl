<?php
$conn= mysqli_connect("localhost:3306","shreyam","shreyam","sqrl");
    if(! $conn ) {
      die('<br/>Could not connect: ' . mysqli_error($conn));
    }
    $name= $_POST['name'];
    $email= $_POST['email'];
    $no= $_POST['no'];
    echo '<br/>Connected successfully';
      $sql="update register set stat=1 where value='$no'";
      $retval=mysqli_query($conn,$sql);
      if(! $retval ) {
        die('<br/>Could not enter data: ' . mysqli_error($conn));
      }
      else {
        echo "<br/>Entered data successfully\n";
        
      }
    mysqli_close($conn);

 ?>



