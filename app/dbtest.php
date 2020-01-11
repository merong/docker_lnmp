<?php

try{
    $dbh = new pdo( 'mysql:host=mysql:3306;dbname=dev',
        'dev',
        'dev',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    die(json_encode(array('connect' => true)));
}
catch(PDOException $ex){
    die(json_encode(array('connect' => false, 'message' => 'Unable to connect')));
}

?>