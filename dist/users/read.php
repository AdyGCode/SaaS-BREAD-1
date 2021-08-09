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
 *      This file is the "home page"
 *
 *
 *      html:5[TAB] creates a HTML5 page stub (Zen coding/Emmet Coding)
 */

require_once  __DIR__."/../templates/header.php";
?>

    <main class="container shadow-lg mx-auto bg-gray-50 mt-2 md:mt-8 p-6 mb-8 rounded-md">
        <div class="mt-6 mb-6">
            <h2 class="text-3xl mb-6">Read</h2>

            <p class="py-3">Showing the details for record id:</p>

            <dl class="grid grid-cols-7">
                <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Given name
                </dt>
                <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Value 2
                </dd>
                <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Family name
                </dt>
                <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Value 3
                </dd>
                <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    eMail
                </dt>
                <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Value 4
                </dd>
                <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Gender
                </dt>
                <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    FMOTUX
                </dd>
                <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Age
                </dt>
                <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Value 5
                </dd>
                <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Location
                </dt>
                <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Value 5
                </dd>
                <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Added
                </dt>
                <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Value 5
                </dd>
                <dt class="col-span-1 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Last Update
                </dt>
                <dd class="col-span-6 border border-bottom-1 border-t-0 border-l-0 border-r-0
                 border-gray-200 px-0 py-2">
                    Value 5
                </dd>

            </dl>


        </div>

    </main>

<?php
require_once  __DIR__."/../templates/footer.php";

