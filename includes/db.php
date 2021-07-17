<?php

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'cms';

foreach($db as $key  => $value)
{
    // echo $value;
    define(strtoupper($key), $value);
    
}

$conect = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
if($conect)
{
    // echo "we are connected to Data Base ";
}
else
{
    die('Connection Failed' );
}
?>