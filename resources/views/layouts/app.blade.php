<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'K UI') }}</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="stylesheet" href='{{ asset('css/style.css') }}''>
    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="font-sans antialiased">
    <div x-data="mainState" :class="{ dark: isDarkMode }" @resize.window="handleWindowResize" x-cloak>
        <div class="min-h-screen text-gray-900 bg-gray-100 dark:bg-dark-bg dark:text-gray-200">
            <!-- Sidebar -->
            <x-sidebar.sidebar />
            <!-- Page Wrapper -->
            <div class="flex flex-col min-h-screen"
                :class="{
                    'lg:ml-64': isSidebarOpen,
                    'md:ml-16': !isSidebarOpen
                }"
                style="transition-property: margin; transition-duration: 150ms;">

                <!-- Navbar -->
                <x-navbar />

                <!-- Page Heading -->
                {{-- <header>
                    <div class="p-4 sm:p-6">
                        {{ $header }}
                    </div>
                </header> --}}

                <!-- Page Content -->
                <main class="px-4 sm:px-6 flex-1" >
                    {{ $slot }}
                    <div >
                        {{ $totalbalance }}
                    </div>
                    {{ $dashboard }}
                </main>
                <div class="bottom-nav d-flex justify-content-around">
                    <a href="{{ route('dashboard') }}" class="active">
                        <img src="https://img.icons8.com/ios-filled/50/000000/home.png" style="width: 24px;" />
                        <p>Dashboard</p>
                    </a>
                    <a href="{{ route('invest') }}" class="active">
                        <img src="https://img.icons8.com/ios-filled/50/000000/combo-chart.png" style="width: 24px;" />
                        <p>Invest</p>
                    </a>

                    <a href="{{ route('wallet') }}">
                        <img src="https://img.icons8.com/ios-filled/50/000000/wallet.png" style="width: 24px;" />
                        <p>Wallets</p>
                    </a>
                    <a href="#">
                        <img src="https://img.icons8.com/ios-filled/50/000000/user.png" style="width: 24px;" />
                        <p>My Profile</p>
                    </a>
                </div>

                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                <!-- Page Footer -->
                <x-footer />
            </div>
        </div>
    </div>
</body>

</html>
