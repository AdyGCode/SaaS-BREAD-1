<?php
/**
 * Filename:    db.php
 * Project:     SaaS-BREAD-1
 * Location:    dist\config\
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     27/7/21
 * Description:
 *      Short description of the purpose of this file
 *      with each line being no more than 72 characters...
 */

$dbHost = "localhost";
$dbUser = "saas_bread";
$dbPass = "saasPassword";
$dbName = "saas_bread";

$dsn = "mysql:host=$dbHost;dbname=$dbName";
$dbOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);


