<?php
    ob_start();
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();
?>
<?php
    $hostname = 'localhost';
    $database = 'vjv';
    $username = 'viv';
    $password = 'vjv';

    try
    {
        $con = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

?>
