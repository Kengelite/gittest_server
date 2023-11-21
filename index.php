<?php
$serverName = "119.59.96.62"; //serverName\instanceName
$connectionInfo = array( "Database"=>"drnadech_research", "UID"=>"TRANSF", "PWD"=>"Ed1p663b^");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
     $tsql = "SELECT * FROM DATA_DOMAIN"; 
     $stmt = sqlsrv_query( $conn, $tsql); 
     while( $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC) ) {
          echo $row['code'].", ".$row['Vname'].""."<br />";
      }
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     asdadasdasdasas
</body>
</html>