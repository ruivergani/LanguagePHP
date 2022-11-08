<?php

$db = new PDO(
    'mysql:host=db-prd-1-studev-1.mysql.database.azure.com;dbname=djb4',
    'djb4@db-prd-1-studev-1', 'MWLCfe5vux',
    [
        PDO::MYSQL_ATTR_SSL_CA => '',
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false
    ]
) or die('No DB');

$stmt = $db->prepare('show tables');
$stmt->execute();

$tables = $stmt->fetchAll(PDO::FETCH_CLASS);

var_dump($tables);