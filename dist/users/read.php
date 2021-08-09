<?php
/**
 * Filename:    read.php
 * Project:     SaaS-BREAD-1
 * Location:    dist\users\
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     27/7/21
 * Description:
 *      Basic BREAD/CRUD interaction with a Database using PHP.
 *
 *      This file is the "Read a Single User page"
 */

require_once __DIR__."/../templates/header.php";

require_once __DIR__."/../config/db.php";

try {
    if (isset($_GET) && isset($_GET['id'])) {
        $id = $_GET['id'];
        $connection = new PDO($dsn, $dbUser, $dbPass, $dbOptions);
        $sql = "SELECT * FROM users WHERE id=:id LIMIT 1";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $results = $statement->execute();
        $numUsers = $statement->rowCount();
        $user = $statement->fetch();
    }
} catch
(PDOException $error) {
    echo '<main class="container shadow-lg mx-auto bg-gray-50 mt-2 md:mt-8 p-6 mb-8 rounded-md">';
    echo "<h3>Error...</h3>";
    echo "<pre>";
    echo $error->getMessage();
    echo "</pre>";
    echo '</main>';
    die(1);
}

/**
 * Expands the code for the gender to full text
 *
 * @param  string  $gender
 * @return string
 */
function expandGender(string $gender): string
{
    switch ($gender) {
        case 'F':
            $expanded = "Female";
            break;
        case 'M':
            $expanded = "Male";
            break;
        case 'O':
            $expanded = "Other";
            break;
        case 'T':
            $expanded = "Transgender";
            break;
        case 'X':
            $expanded = "Not Disclosed";
            break;
        case 'U':
        default:
            $expanded = "Unknown";
            break;
    }
    return $expanded;
}

?>

    <main class="container shadow-lg mx-auto bg-gray-50 mt-2 md:mt-8 p-6 mb-8 rounded-md">
        <div class="mt-6 mb-6">
            <h2 class="text-3xl mb-6">Read</h2>

            <?php
            if ($numUsers !== 1) {
                echo "<p class='py-3'>ID {$id} was not found.</p>";
            } else {
                ?>
                <p class="py-3">Showing the details for record <strong><?= $id ?></strong>:</p>

                <dl class="grid grid-cols-7">
                    <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        Given name
                    </dt>
                    <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        <?= $user['given_name'] ?>
                    </dd>
                    <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        Family name
                    </dt>
                    <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        <?= $user['family_name'] ?>
                    </dd>
                    <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        eMail
                    </dt>
                    <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        <?= $user['email'] ?>
                    </dd>
                    <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        Gender
                    </dt>
                    <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        <?= expandGender($user['gender']) ?>
                    </dd>
                    <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        Age
                    </dt>
                    <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        <?= $user['age'] ?>
                    </dd>
                    <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        Location
                    </dt>
                    <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        <?= $user['location'] ?>
                    </dd>
                    <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        Added
                    </dt>
                    <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        <?= $user['created_at'] ?>
                    </dd>
                    <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        Last Update
                    </dt>
                    <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                        <?= $user['updated_at'] ?>
                    </dd>

                </dl>
                <?php
            }
            ?>
        </div>

    </main>

<?php
require_once __DIR__."/../templates/footer.php";

