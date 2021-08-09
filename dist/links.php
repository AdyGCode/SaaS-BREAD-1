<?php
/**
 * Filename:    links.php
 * Project:     SaaS-BREAD-1
 * Location:    dist\
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     27/7/21
 * Description:
 *      Basic BREAD/CRUD interaction with a Database using PHP.
 *
 *      This file is the "links page"
 */

require_once __DIR__."/templates/header.php";
?>

    <main class="container shadow-lg mx-auto bg-gray-50 mt-2 md:mt-8 p-6 mb-8 rounded-md">
        <div class="mt-6 mb-6">
            <h2 class="text-3xl mb-6">Links</h2>

            <dl class="p-0 m-0">
                <dt>JetBrains</dt>
                <dd class="ml-12 pl-4">
                    <a href="https://jetbrains.com">https://jetbrains.com</a>
                </dd>
                <dt>TailwindCSS</dt>
                <dd class="ml-12 pl-4">
                    <a href="https://tailwindcss.com">https://tailwindcss.com</a>
                </dd>
                <dt>Tailwind Components</dt>
                <dd class="ml-12 pl-4">
                    <a href="https://tailwindcomponents.com">https://tailwindcomponents.com</a>
                </dd>
                <dt>Delft Stack</dt>
                <dd class="ml-12 pl-4">
                    <a href="https://www.delftstack.com">https://www.delftstack.com</a>
                </dd>
                <dt>Title</dt>
                <dd class="ml-12 pl-4">
                    <a href="#">URL</a>
                </dd>
            </dl>

            <p>This page will contain legal information.</p>
        </div>

    </main>

<?php
require_once __DIR__."/templates/footer.php";



