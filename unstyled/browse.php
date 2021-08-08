<?php
/**
 * Filename:    browse.php
 * Project:     SaaS-BREAD-1
 * Location:    unstyled\
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     27/7/21
 * Description:
 *   Basic BREAD/CRUD interaction with a Database using PHP.
 *
 *   This file is the "browse users page"
 *
 */

require_once "db.php";

try {
    $connection = new PDO($dsn, $dbUser, $dbPass, $dbOptions);
    $sql = "SELECT * FROM users";
    $statement = $connection->prepare($sql);
    $results = $statement->execute();
    $numUsers = $statement->rowCount();
} catch (PDOException $error) {
    echo "<h3>Error...</h3>";
    echo "<pre>";
    echo $error->getMessage();
    echo "</pre>";
    die(1);
}

echo "<ul>";
while ($aUser = $statement->fetch()) {
    $id = $aUser["id"];
    $givenName = $aUser["given_name"];
    $familyName = $aUser["family_name"];
    echo "<li>{$id}) {$givenName} {$familyName}</li>";
}
echo "</ul>";
