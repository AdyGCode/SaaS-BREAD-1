<?php
/**
 * Filename:    header.php
 * Project:     SaaS-BREAD-1
 * Location:    dist\templates
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     27/7/21
 * Description:
 *      Short description of the purpose of this file
 *      with each line being no more than 72 characters...
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SaaSy App 1</title>

    <!-- include style sheet(s) -->
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal flex
             flex-col justify-between h-screen">
<header>
    <nav class="flex items-center justify-between flex-wrap bg-black p-6 fixed w-full z-10 top-0">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <a class="text-white no-underline hover:text-white hover:no-underline flex flex-row"
               href="/">
                <img src="/img/saasy-icon.svg" alt="SaaSy App Logo"
                     class="h-14 -my-2">
                <span class="text-2xl pl-6 py-1">
					SaaSy
				</span>
            </a>
        </div>

        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0"
             id="nav-content">
            <ul class="list-reset lg:flex flex-1 items-center">
                <li class="mr-3 ">
                    <a class="inline-block py-2 px-4 rounded text-white
                              transition-colors duration-500 ease-in-out
                              no-underline hover:text-black hover:bg-gray-400
                              hover:text-underline py-2 px-4"
                       href="/users/browse.php">Browse</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 rounded text-white
                              transition-colors duration-500 ease-in-out
                              no-underline hover:text-black hover:bg-gray-400
                              hover:text-underline py-2 px-4"
                       href="/users/add.php">Add</a>
                </li>
            </ul>

            <ul class="list-reset justify-end lg:flex flex-1 items-center">
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 rounded text-white
                              transition-colors duration-500 ease-in-out
                              no-underline hover:text-black hover:bg-gray-400
                              hover:text-underline py-2 px-4"
                       href="/about.php">About</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 rounded text-white
                              transition-colors duration-500 ease-in-out
                              no-underline hover:text-black hover:bg-gray-400
                              hover:text-underline py-2 px-4"
                       href="/contact.php">Contact</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 rounded text-white
                              transition-colors duration-500 ease-in-out
                              no-underline hover:text-black hover:bg-gray-400
                              hover:text-underline py-2 px-4"
                       href="/links.php">Links...</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 rounded text-white
                              transition-colors duration-500 ease-in-out
                              no-underline hover:text-black hover:bg-gray-400
                              hover:text-underline py-2 px-4"
                       href="/legal.php">Legal</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
