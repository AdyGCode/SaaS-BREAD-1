<?php
/**
 * Filename:    index.php
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
?>

    <main class="container shadow-lg mx-auto bg-gray-50 mt-2 md:mt-8 p-6 mb-8 rounded-md">
        <div class="mt-6 mb-6">
            <h2 class="text-3xl mb-6">Add</h2>

            <p class="py-3">Add new user:</p>

            <dl class="grid grid-cols-12">
                <dt class="col-span-1  px-0 py-2">
                    Given name
                </dt>
                <dd class="col-span-11  px-0 py-2">
                    <input type="text" class="p-1 border border-gray-400 border-1 border-b-3 border-l-0 border-r-0 border-t-0">
                </dd>
                <dt class="col-span-1  px-0 py-2">
                    Family name
                </dt>
                <dd class="col-span-11  px-0 py-2">
                    <input type="text" class="p-1 border border-gray-400 border-1 border-b-3 border-l-0 border-r-0 border-t-0">
                </dd>
                <dt class="col-span-1  px-0 py-2">
                    eMail
                </dt>
                <dd class="col-span-11  px-0 py-2">
                    <input type="text" class="p-1 border border-gray-400 border-1 border-b-3 border-l-0 border-r-0 border-t-0">
                </dd>
                <dt class="col-span-1  px-0 py-2">
                    Age
                </dt>
                <dd class="col-span-11  px-0 py-2">
                    <input type="text" class="p-1 border border-gray-400 border-1 border-b-3 border-l-0 border-r-0 border-t-0">
                </dd>
                <dt class="col-span-1  px-0 py-2">
                    Location
                </dt>
                <dd class="col-span-11  px-0 py-2">
                    <input type="text" class="p-1 border border-gray-400 border-1 border-b-3 border-l-0 border-r-0 border-t-0">
                </dd>
                <dt class="col-span-1  px-0 py-2">
                </dt>
                <dd class="col-span-11  px-0 py-2">
                    <button class="rounded bg-green-200 hover:bg-green-900 text-gray-900 hover:text-white p-2 px-6 mr-3 border border-2 border-green-600">Save</button>
                    <button class="rounded bg-red-100 hover:bg-red-900 text-gray-900 hover:text-white p-2 px-4 mr-3 border border-2 border-red-600">Cancel</button>
                </dd>

            </dl>


        </div>

    </main>

<?php
require_once "./templates/footer.php";



