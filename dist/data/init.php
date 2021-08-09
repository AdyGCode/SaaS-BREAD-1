<?php
/**
 * Filename:    init.php
 * Project:     SaaS-BREAD-1
 * Location:    dist\data\
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     27/7/21
 * Description:
 *      This file creates the database user and database for use
 *      in this basic CRUD/BREAD example.
 * History:
 *      2021/08/02  Added history to the file as a demonstration.
 */


// List of files with initialisation SQL code
$files = [
    'db_01_drop.sql',
    'db_02_create.sql',
    'db_03_user_table.sql',
    /* Add further initialisation files here */

];

$tables = [
    "users",
    /* Add any additional tables that are initialised here */

];

try {
    $rootUser = "root";
    $rootPass = "";

    $dbCreationConnection = new PDO(
        "mysql:host=localhost", $rootUser, $rootPass,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        )
    );

    // Execute each file in turn...
    foreach ($files as $filename) {
        echo "<h4>Executing $filename ...</h4>";
        $sql = file_get_contents($filename);
        $dbCreationConnection->exec($sql); //- >
    }
} catch (PDOException $error) {
    echo "<h3>Error... Stage 1</h3>";
    echo "<pre>";
    echo $sql."<br>".$error->getMessage();
    echo "</pre>";
    die(0);
}

/* The special seed data for the users table */
$users = [
    [
        "id" => 1,
        "given_name" => 'Ad',
        "family_name" => 'Ministrator',
        "email" => 'admin@example.com',
        "age" => 999,
        "gender" => 'X',
        "location" => 'The Cloud',
    ],
    [
        "id" => 5,
        "given_name" => 'Adrian',
        "family_name" => 'Gould',
        "email" => 'adrian@example.com',
        "age" => 45,
        "gender" => 'M',
        "location" => 'Wagga-Wagga, AU',
    ],
    [
        "id" => 10,
        "given_name" => 'YOUR GIVEN NAME',
        "family_name" => 'YOUR FAMILY NAME',
        "email" => 'GIVEN_NAME@example.com',
        "age" => 0,
        "gender" => 'X',
        "location" => 'Perth, AU'
    ],

];


try {
    require_once "../db.php";
    $connection = new PDO($dsn, $dbUser, $dbPass, $dbOptions);
    echo "<h4>Adding Seed Users Data</h4>";

    foreach ($users as $aUser) {
        $id = $aUser['id'];
        $given_name = $aUser['given_name'];
        $family_name = $aUser['family_name'];
        $email = $aUser['email'];
        $age = $aUser['age'];
        $gender = $aUser['gender'];
        $location = $aUser['location'];

        $sql = "INSERT INTO users VALUES (:id, :given_name, ".
            ":family_name, :email, :age, :gender, :location, now(), null)";
        $statement = $connection->prepare($sql);

        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':given_name', $given_name, PDO::PARAM_STR);
        $statement->bindParam(':family_name', $family_name, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':age', $age, PDO::PARAM_INT);
        $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();
    }
} catch (PDOException $error) {
    echo "<h3>Error... Stage 2</h3>";
    echo "<pre>";
    echo $sql."<br>".$error->getMessage();
    echo "</pre>";
    die(0);
}


try {
    require_once __DIR__."/../config/db.php";
    $connection = new PDO($dsn, $dbUser, $dbPass, $dbOptions);
    $sql = "SELECT * FROM users";
    $statement = $connection->prepare($sql);
    $results = $statement->execute();
    $numUsers = $statement->rowCount();
    echo "<h4>{$numUsers} Users in DB:</h4>";
    echo "<ul>";
    while ($aUser = $statement->fetch()) {
        $id = $aUser['id'];
        $given_name = $aUser['given_name'];
        $family_name = $aUser['family_name'];
        $email = $aUser['email'];
        $age = $aUser['age'];
        $location = $aUser['location'];
        echo "<li>{$given_name} {$family_name}</li>";
    }
    echo "</ul>";
} catch (PDOException $error) {
    echo "<h3>Error... Stage 3</h3>";
    echo "<pre>";
    echo $sql."<br>".$error->getMessage();
    echo "</pre>";
    // No need to die as it is the end!
}

echo "<h2>Initialisation complete</h2>";
echo "<p>Click on <a href='../'>HOME</a> to go to the <a href='../'>home page</a>.</p>";
/*
 * In a real site you would also make sure that this code was either removed, or protected
 * from re-running
 */
