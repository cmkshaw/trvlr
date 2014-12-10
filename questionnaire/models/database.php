<!-- This is the database connection model -->

<?php
    // database conection to the trvlr db
    $dsn = 'mysql:host=trvl.db.10087446.hostedresource.com;dbname=trvl';
    $username = 'trvl';
    $password = 'phpTeam4!';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../database_error.php');
        exit();
    }
?>