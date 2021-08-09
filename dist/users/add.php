<?php
/**
 * Filename:    add.php
 * Project:     SaaS-BREAD-1
 * Location:    dist\users\
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     27/7/21
 * Description:
 *      Basic BREAD/CRUD interaction with a Database using PHP.
 *      This file is the "add user page"
 *
 *
 *      html:5[TAB] creates a HTML5 page stub (Zen coding/Emmet Coding)
 */

require_once __DIR__."/../templates/header.php";

?>

    <main class="container shadow-lg mx-auto bg-gray-50 mt-24 p-6 mb-8 rounded-md">

        <?php
        /* TODO: Add the code to validate input and then insert data when all inputs are valid */

        $errors = [];
        $gender = null;

        if (isset($_POST) && isset($_POST['saveButton'])) {
            $givenName = isset($_POST['givenName']) ? trim($_POST['givenName']) : "";
            $familyName = isset($_POST['familyName']) ? trim($_POST['familyName']) : "";
            $email = isset($_POST['eMailAddress']) ? trim($_POST['eMailAddress']) : "";
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $age = isset($_POST['userAge']) ? trim($_POST['userAge']) : "";
            $gender = isset($_POST['userGender']) ? trim($_POST['userGender']) : "";
            $location = isset($_POST['userLocation']) ? trim($_POST['userLocation']) : "";
            if (strlen($givenName) < 1) {
                $errors['Given Name'] = "Given Name is required.";
            }
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['eMail'] = "A valid eMail Address must be given.";
            }
            if (!stripos('FMOTUX', $gender)) {
                $errors['Gender'] = "Please select a valid gender from the list.";
            }
            if (intval($age) <= 16) {
                $errors['Age'] = "Age must be a positive integer greater than or equal to 16.";
            }
            if (strlen($location) <= 1) {
                $errors['Location'] = "Location must be given and contain a city/town and the 2 ISO country code.";
            }


            if (count($errors) == 0) {
                require_once __DIR__."/../config/db.php";

                $sql = "INSERT INTO users VALUES (null, :given_name, ".
                    ":family_name, :email, :age, :gender, :location, now(), null)";

                try {
                    $connection = new PDO($dsn, $dbUser, $dbPass, $dbOptions);

                    $statement = $connection->prepare($sql);

                    $statement->bindParam(':given_name', $givenName, PDO::PARAM_STR);
                    $statement->bindParam(':family_name', $familyName, PDO::PARAM_STR);
                    $statement->bindParam(':email', $email, PDO::PARAM_STR);
                    $statement->bindParam(':age', $age, PDO::PARAM_INT);
                    $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
                    $statement->bindParam(':location', $location, PDO::PARAM_STR);
                    $statement->execute();

                    header('Location: /users/', 200);
                } catch (PDOException $error) {
                    echo "<h3>Error...</h3>";
                    echo "<p>";
                    echo $sql."<br>".$error->getMessage();
                    echo "</p>";
                    die(0);
                }
            }
        }
        ?>
        <!-- TODO: Add error message code here -->

        <div class="mt-6 mb-6 p-0">

            <h2 class="text-3xl mb-6">Add User</h2>

            <?php
            if (count($errors) > 0) {
                ?>
                <div class="grid grid-cols-1 m-0 p-1">

                    <h4 class="text-xl text-bold">Errors on form</h4>
                    <?php
                    foreach ($errors as $field => $error) {
                        ?>
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-2 m-1"
                             role="alert">
                            <p class="font-bold"><?= $field ?></p>
                            <p><?= $error ?></p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            ?>

            <form action="<?= $_SERVER['PHP_SELF']; ?>"
                  method="post"
                  class="grid grid-cols-12">

                <div class="col-span-12 px-0 py-2 grid grid-cols-12">
                    <label for="givenName" class="col-span-1 px-0 py-2">Given name</label>
                    <input id="givenName" name="givenName" type="text"
                           class="col-span-6 p-1 border border-gray-400 border-1 border-b-3
                           border-l-0 border-r-0 border-t-0"
                           value="<?= $givenName ?? '' ?>">
                    <p class="col-span-11 text-trueGray-400 col-start-2 text-xs mt-2 pt-0">
                        Given name must be provided and at least 1 character long.
                    </p>
                </div>

                <div class="col-span-12 px-0 py-2 grid grid-cols-12">
                    <label for="familyName" class="col-span-1 px-0 py-2">Family name</label>
                    <input id="familyName" name="familyName" type="text"
                           class="col-span-6 p-1 border border-gray-400 border-1 border-b-3
                           border-l-0 border-r-0 border-t-0"
                           value="<?= $familyName ?? '' ?>">
                    <p class="col-span-11 text-trueGray-400 col-start-2 text-xs mt-2 pt-0">
                        The family name is optional.
                    </p>
                </div>

                <div class="col-span-12 px-0 py-2 grid grid-cols-12">
                    <label for="eMailAddress" class="col-span-1 px-0 py-2">eMail</label>
                    <input id="eMailAddress" name="eMailAddress" type="text"
                           class="col-span-8 p-1 border border-gray-400 border-1 border-b-3
                           border-l-0 border-r-0 border-t-0"
                           value="<?= $email ?? '' ?>">
                    <p class="col-span-11 text-trueGray-400 col-start-2 text-xs mt-2 pt-0">
                        A valid email address is required.
                    </p>
                </div>


                <div class="col-span-12 px-0 py-2 grid grid-cols-12">
                    <label for="userGender" class="col-span-1 px-0 py-2">Gender</label>
                    <select name="userGender" id="userGender"
                            class="col-span-2 border border-gray-400 border-b-1
                                   border-t-0 border-r-0 border-l-0
                                   focus:ring-indigo-500 focus:border-indigo-500 h-full py-0
                                   pl-2 pr-7 bg-transparent sm:text-sm ">
                        <option value="" <?= $gender == '' ? 'selected' : '' ?> disabled>
                            Please select
                        </option>
                        <option value="F" <?= $gender == 'F' ? 'selected' : '' ?>>
                            Female
                        </option>
                        <option value="M" <?= $gender == 'M' ? 'selected' : '' ?>>
                            Male
                        </option>
                        <option value="O" <?= $gender == 'O' ? 'selected' : '' ?>>
                            Other
                        </option>
                        <option value="T" <?= $gender == 'T' ? 'selected' : '' ?>>
                            Transgender
                        </option>
                        <option value="U" <?= $gender == 'U' ? 'selected' : '' ?>>
                            Unknown
                        </option>
                        <option value="X" <?= $gender == 'X' ? 'selected' : '' ?>>
                            Not Given
                        </option>
                    </select>
                    <p class="col-span-11 text-trueGray-400 col-start-2 text-xs mt-2 pt-0">
                        Please select a gender from the list.
                    </p>
                </div>

                <div class="col-span-12 px-0 py-2 grid grid-cols-12">
                    <label for="userAge" class="col-span-1 px-0 py-2">Age</label>
                    <input id="userAge" name="userAge" type="text"
                           class="col-span-2 p-1 border border-gray-400 border-1 border-b-3
                           border-l-0 border-r-0 border-t-0"
                           value="<?= $age ?? '' ?>">
                    <p class="col-span-11 text-trueGray-400 col-start-2 text-xs mt-2 pt-0">
                        The age must be an integer greater or equal to 16.
                    </p>
                </div>

                <div class="col-span-12 px-0 py-2 grid grid-cols-12">
                    <label for="userLocation" class="col-span-1  px-0 py-2">Location</label>
                    <input id="userLocation" name="userLocation" type="text"
                           class="col-span-6 p-1 border border-gray-400 border-1 border-b-3
                           border-l-0 border-r-0 border-t-0"
                           value="<?= $location ?? '' ?>">
                    <p class="col-span-11 text-trueGray-400 col-start-2 text-xs mt-2 pt-0">
                        A location is required and must contain city and country code.
                    </p>
                </div>

                <div class="col-span-12 px-0 py-2 grid grid-cols-12">
                    <button id="saveButton" name="saveButton" role="button"
                            class="rounded bg-green-200 hover:bg-green-900 text-gray-900
                            hover:text-white p-2 px-6 mr-3 border border-2 border-green-600
                            col-start-2 col-span-1">
                        Save
                    </button>
                    <button id="cancelButton" name="cancelButton" role="button"
                            class="rounded bg-red-100 hover:bg-red-900 text-gray-900
                            hover:text-white p-2 px-4 mr-3 border border-2 border-red-600
                            col-span-1">
                        Cancel
                    </button>
                </div>
            </form>

    </main>

<?php
require_once __DIR__."/../templates/footer.php";




