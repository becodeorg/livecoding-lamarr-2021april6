<?php
class Connection
{

    function openConnection(): PDO
    {
        // No bugs in this function, just use the right credentials.
        $dbhost = "DB_HOST";
        $dbuser = "DB_USER";
        $dbpass = "DB_USER_PASSWORD";
        $db = "DB_NAME";

        $driverOptions = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
    }
}