<?php
  $con = mssql_connect('meritsql02','mediadept','media');
  mssql_select_db('MediaMySQL', $con);

  $sql = "INSERT INTO users (Name, Age) VALUES ('4', '1'))";
  $res = mssql_query($sql,$con);
  if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
  } else {
    print("One data row inserted.\n");
  }  

  mssql_close($con); 
?>