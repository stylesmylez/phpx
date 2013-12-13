<?php

$con=mysqli_connect("mysql51-005.wc1.dfw1.stabletransit.com","625860_admin","1ShIC6RAb6","625860_nswma");



// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO rho68_messages (message_id)
VALUES
('$_POST[name]','$_POST[age]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?> 