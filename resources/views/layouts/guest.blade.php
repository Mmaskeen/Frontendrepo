<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>

.custom-button {
    font-family: Nunito;
    font-size: 16px;
    font-weight: 700;
    line-height: 18px;
    letter-spacing: 1px;
    text-align: center;
    background: #404CB2;
    color: white; /* Ensure text color contrasts with background */
    padding: 10px 20px; /* Add padding for better appearance */
    border: none; /* Remove default border */
    border-radius: 5px; /* Optional: Add border radius for rounded corners */
}

.custom-button:hover {
    background: #333a99; /* Optional: Add a hover effect */
}

</style>
<body>
    <div class="font-sans antialiased" x-data="mainState" :class="{dark: isDarkMode}" x-cloak>
        <div class="flex flex-col min-h-screen text-gray-900 bg-gray-100 dark:bg-dark-bg dark:text-gray-200">
            {{ $slot }}

            <x-footer />
        </div>

        <div class="fixed top-10 right-10">
            <x-button type="button" iconOnly variant="secondary" srText="Toggle dark mode" @click="toggleTheme">
                <x-heroicon-o-moon x-show="!isDarkMode" aria-hidden="true" class="w-6 h-6" />
                <x-heroicon-o-sun x-show="isDarkMode" aria-hidden="true" class="w-6 h-6" />
            </x-button>
        </div>
    </div>

    </body>

</html>
