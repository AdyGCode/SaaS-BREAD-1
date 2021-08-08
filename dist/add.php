<?php
/**
 * Filename:    add.php
 * Project:     SaaS-BREAD-1
 * Location:    dist\
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     27/7/21
 * Description:
 *      Basic BREAD/CRUD interaction with a Database using PHP.
 *
 *      This file is the "home page"
 *
 *
 *      html:5[TAB] creates a HTML5 page stub (Zen coding/Emmet Coding)
 */

require_once "./templates/header.php";

/* TODO: Add the code to validate input and then insert data when all inputs are valid */

?>

    <main class="container shadow-lg mx-auto bg-gray-50 mt-2 md:mt-8 p-6 mb-8 rounded-md">

        <!-- TODO: Add error message code here -->

        <div class="mt-6 mb-6">
            <h2 class="text-3xl mb-6">Add</h2>

            <p class="py-3">Add new user:</p>

            <div class="grid grid-cols-12">

                <div class="col-span-12 px-0 py-2 grid grid-cols-12">
                    <label for="givenName" class="col-span-1 px-0 py-2">Given name</label>
                    <input id="givenName" name="givenName" type="text"
                           class="col-span-6 p-1 border border-gray-400 border-1 border-b-3
                           border-l-0 border-r-0 border-t-0">
                    <p class="col-span-12 text-red-500 ">Given name must be provided
                        and at least 1 character long.</p>
                </div>

                <div class="col-span-12 px-0 py-2 grid grid-cols-12">
                    <label for="familyName" class="col-span-1 px-0 py-2">Family name</label>
                    <input id="familyName" name="familyName" type="text"
                           class="col-span-6 p-1 border border-gray-400 border-1 border-b-3
                           border-l-0 border-r-0 border-t-0">
                    <p class="col-span-12 text-coolGray-500 ">The family name is optional.</p>
                </div>

                <div class="col-span-12 px-0 py-2 grid grid-cols-12">
                    <label for="eMailAddress" class="col-span-1 px-0 py-2">eMail</label>

                    <input id="eMailAddress" name="eMailAddress" type="text"
                           class="col-span-8 p-1 border border-gray-400 border-1 border-b-3
                           border-l-0 border-r-0 border-t-0">
                    <p class="col-span-12 text-red-500 ">A valid email address is
                        required./p>
                </div>

                <div class="col-span-12 px-0 py-2 grid grid-cols-12">
                    <label for="userAge" class="col-span-1 px-0 py-2">Age</label>
                    <input id="userAge" name="userAge" type="text"
                           class="col-span-2 p-1 border border-gray-400 border-1 border-b-3
                           border-l-0 border-r-0 border-t-0">
                    <p class="col-span-12 text-red-500 ">The age must be an integer
                        greater or equal to 16.</p>
                </div>

                <div class="col-span-12 px-0 py-2 grid grid-cols-12">
                    <label for="userLocation" class="col-span-1  px-0 py-2">Location</label>
                    <input id="userLocation" name="userLocation" type="text"
                           class="col-span-6 p-1 border border-gray-400 border-1 border-b-3
                           border-l-0 border-r-0 border-t-0">
                    <p class="col-span-12 text-red-500 ">A location is required and
                        must contain city and country code.</p>
                </div>

                <div class="col-span-12 px-0 py-2 grid grid-cols-12">
                    <button id="saveButton" name="saveButton" role="button"
                            class="rounded bg-green-200 hover:bg-green-900 text-gray-900 hover:text-white p-2 px-6 mr-3 border border-2 border-green-600">
                        Save
                    </button>
                    <button id="cancelButton" name="cancelButton" role="button"
                            class="rounded bg-red-100 hover:bg-red-900 text-gray-900 hover:text-white p-2 px-4 mr-3 border border-2 border-red-600">
                        Cancel
                    </button>
                </div>

            </div>

    </main>

<?php
require_once "./templates/footer.php";



