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
 *      html:5[TAB] creates a HTML5 page stub (Zen coding/Emmet Coding)
 */

require_once "./templates/header.php";
?>

    <main class="container shadow-lg mx-auto bg-gray-50 mt-2 md:mt-8 p-6 mb-8 rounded-md">
        <div class="mt-6 mb-6">
            <h2 class="text-3xl mb-6">Welcome</h2>

            <p>This is a simple site to demonstrate HTML, PHP, CSS, PDO
                and Database interaction.</p>
        </div>

    </main>

<?php
require_once "./templates/footer.php";



