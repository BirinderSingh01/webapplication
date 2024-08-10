<?php
$serverName = "tcp:birinderserver.database.windows.net,1433";
$connectionOptions = array(
    "Database" => "db-final",
    "Uid" => "dbuser",
    "PWD" => "P@ssw0rd"
);

//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("Connection failed: " . print_r(sqlsrv_errors(), true));
}
?>
