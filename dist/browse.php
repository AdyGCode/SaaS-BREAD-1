<?php
/**
 * Filename:    index.php
 * Project:     SaaS-BREAD-1
 * Location:    dist\
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     27/7/21
 * Description:
 *   Basic BREAD/CRUD interaction with a Database using PHP.
 *
 *   This file is the "home page"
 *
 *
 *   html:5[TAB] creates a HTML5 page stub (Zen coding/Emmet Coding)
 */

require_once "./templates/header.php";
?>

    <main class="container shadow-lg mx-auto bg-gray-50 mt-2 md:mt-8 p-6 mb-8 rounded-md">
        <div class="mt-6 mb-6">
            <h2 class="text-3xl mb-6">Browse</h2>

            <table class="table-auto w-full border border-blue-700">
                <thead class="bg-blue-900 text-white">
                <tr>
                    <th class="text-left p-1 pl-2 py-4">Head 1</th>
                    <th class="text-left p-1 pl-2 py-4">Head 2</th>
                    <th class="text-left p-1 pl-2 py-4">Head 3</th>
                    <th class="text-left p-1 pl-2 py-4">Head 4</th>
                    <th class="text-left p-1 pl-2 py-4">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr class="hover:bg-blue-200 border-blue-700 border border-bottom-1">
                    <td class="p-1 pl-2">Data 1</td>
                    <td class="p-1 pl-2">Data 2</td>
                    <td class="p-1 pl-2">Data 3</td>
                    <td class="p-1 pl-2">Data 4</td>
                    <td class="p-1 pl-2">Read Edit Delete</td>
                </tr>
                <tr class="hover:bg-blue-200 border-blue-700 border border-bottom-1">
                    <td class="p-1 pl-2">Data 1</td>
                    <td class="p-1 pl-2">Data 2</td>
                    <td class="p-1 pl-2">Data 3</td>
                    <td class="p-1 pl-2">Data 4</td>
                    <td class="p-1 pl-2">Read Edit Delete</td>
                </tr>
                <tr class="hover:bg-blue-200 border-blue-700 border border-bottom-1">
                    <td class="p-1 pl-2">Data 1</td>
                    <td class="p-1 pl-2">Data 2</td>
                    <td class="p-1 pl-2">Data 3</td>
                    <td class="p-1 pl-2">Data 4</td>
                    <td class="p-1 pl-2">Read Edit Delete</td>
                </tr>
                </tbody>
                <tfoot>
                <tr class="bg-blue-900 text-gray-200 border border-top-2 border-blue-700">
                    <td colspan="5" class="px-4 py-4">
                        <a class="bg-white hover:bg-blue-500 text-blue-700 hover:text-white
                                    rounded p-2  transition-colors transition-bg duration-500 ease-in-out "
                           href="#">First</a>
                        <a class="bg-white hover:bg-blue-500 text-blue-700 hover:text-white
                                    rounded p-2  transition-colors transition-bg duration-500 ease-in-out "
                           href="#">Prev</a>
                        <a class="bg-white hover:bg-blue-500 text-blue-700 hover:text-white
                                    rounded p-2 px-4 transition-colors transition-bg duration-500 ease-in-out "
                           href="#">1</a>
                        <a class="bg-white hover:bg-blue-500 text-blue-700 hover:text-white
                                    rounded p-2 px-4 transition-colors transition-bg duration-500 ease-in-out "
                           href="#">2</a>
                        <a class="bg-white hover:bg-blue-500 text-blue-700 hover:text-white
                                    rounded p-2 px-4 transition-colors transition-bg duration-500 ease-in-out "
                           href="#">3</a>
                        <a class="bg-white hover:bg-blue-500 text-blue-700 hover:text-white
                                    rounded p-2 px-4 transition-colors transition-bg duration-500 ease-in-out "
                           href="#">4</a>
                        <a class="bg-white hover:bg-blue-500 text-blue-700 hover:text-white
                                    rounded p-2 px-4 transition-colors transition-bg duration-500 ease-in-out "
                           href="#">5</a>
                        <a class="bg-white hover:bg-blue-500 text-blue-700 hover:text-white
                                    rounded p-2 transition-colors transition-bg duration-500 ease-in-out "
                           href="#">Next</a>
                        <a class="bg-white hover:bg-blue-500 text-blue-700 hover:text-white
                                    rounded p-2 transition-colors transition-bg duration-500 ease-in-out "
                           href="#">Last</a>
                    </td>
                </tr>
                </tfoot>
            </table>


        </div>

    </main>

<?php
require_once "./templates/footer.php";



