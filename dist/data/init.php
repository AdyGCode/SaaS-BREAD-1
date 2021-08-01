\<?php
/**
 * Filename:    init.php
 * Project:     SaaS-BREAD-1
 * Location:    dist\data\
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     27/7/21
 * Description:
 *      This file creates the database user and database for use
 *      in this basic CRUD/BREAD example.
 */

try {
    $rootUser = "root";
    $rootPass = "";

    $dbCreationConnection = new PDO(
        "mysql:host=localhost", $rootUser, $rootPass,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        )
    );

    // List of files with initialisation SQL code
    $files = ['db_drop.sql', 'db_create.sql', 'db_tables.sql'];

    // Execute each file in turn...
    foreach ($files as $filename) {
        $sql = file_get_contents($filename);
        echo "<h4>Executing $filename ...</h4>";
        $dbCreationConnection->exec($sql);
    }
} catch (PDOException $error) {
    echo "<h3>Error... Stage 1</h3>";
    echo "<pre>";
    echo $sql."<br>".$error->getMessage();
    echo "</pre>";
}

/* The seed data for the database */
$users = [
    [
        "id" => 1,
        "given_name" => 'Ad',
        "family_name" => 'Ministrator',
        "email" => 'admin@example.com',
        "age" => 999,
        "location" => 'The Cloud',
    ],
    [
        "id" => 5,
        "given_name" => 'Adrian',
        "family_name" => 'Gould',
        "email" => 'adrian@example.com',
        "age" => 45,
        "location" => 'Wagga-Wagga, NSW, Australia',
    ],
    [
        "id" => 10,
        "given_name" => 'YOUR GIVEN NAME',
        "family_name" => 'YOUR FAMILY NAME',
        "email" => 'GIVEN_NAME@example.com',
        "age" => 0,
        "location" => 'Perth, WA, Australia',
    ],
    [
        "id" => null,
        "given_name" => 'Jacques',
        "family_name" => 'd\'Carre',
        "email" => 'jacques@example.com',
        "age" => 0,
        "location" => 'Paris, France',
    ],
    [
        "id" => null,
        "given_name" => 'Eileen',
        "family_name" => 'Dover',
        "email" => 'eileen@example.com',
        "age" => 0,
        "location" => 'Dover, UK',
    ],
];


try {
    require_once "../config.php";
    $connection = new PDO($dsn, $dbUser, $dbPass, $options);
    echo "<h4>Adding Seed Users Data</h4>";

    foreach ($users as $aUser) {
        $id = $aUser['id'];
        $given_name = $aUser['given_name'];
        $family_name = $aUser['family_name'];
        $email = $aUser['email'];
        $age = $aUser['age'];
        $location = $aUser['location'];


        $sql = "INSERT INTO users VALUES (:id, :given_name, :family_name, :email, :age, :location, now(), null)";
        $statement = $connection->prepare($sql);

        $statement->bindParam(':id', $id, PDO::PARAM_STR);
        $statement->bindParam(':given_name', $given_name, PDO::PARAM_STR);
        $statement->bindParam(':family_name', $family_name, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':age', $age, PDO::PARAM_INT);
        $statement->bindParam(':location', $location, PDO::PARAM_STR);
        $statement->execute();
    }
} catch (PDOException $error) {
    echo "<h3>Error... Stage 2</h3>";
    echo "<pre>";
    echo $sql."<br>".$error->getMessage();
    echo "</pre>";
}


try {
    require_once "../config.php";
    $connection = new PDO($dsn, $dbUser, $dbPass, $options);
    $sql = "SELECT * FROM users";
    $statement = $connection->prepare($sql);
    $results = $statement->execute();
    echo "<h4>Users Added:</h4>";
    echo "<ul>";
    while ($aUser = $statement->fetch()) {
        $id = $aUser['id'];
        $given_name = $aUser['given_name'];
        $family_name = $aUser['family_name'];
        $email = $aUser['email'];
        $age = $aUser['age'];
        $location = $aUser['location'];
        echo "<li>$given_name $family_name</li>";
    }
    echo "</ul>";

} catch (PDOException $error) {
    echo "<h3>Error... Stage 3</h3>";
    echo "<pre>";
    echo $sql."<br>".$error->getMessage();
    echo "</pre>";
}