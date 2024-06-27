<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "Caspian jam") }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />

        <!-- Scripts -->
        @vite(['resources/css/app.css','resources/css/style.css',
        'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <!-- Page Heading -->
            @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif

            <!-- Page Content -->
            <main>
                <livewire:layout.navigation />
                <div class="container">
                    <!-- ========================= Main ==================== -->
                    <div class="main">
                        <div class="topbar">
                            <div class="toggle">
                                <ion-icon name="menu-outline"></ion-icon>
                            </div>

                            <div class="search">
                                <label>
                                    <input
                                        type="text"
                                        placeholder="Search here"
                                    />
                                    <ion-icon name="search-outline"></ion-icon>
                                </label>
                            </div>

                            <div class="user">
                                <img src="assets/imgs/customer01.jpg" alt="" />
                            </div>
                        </div>

                        <!-- ======================= Cards ================== -->
                        <div class="cardBox">
                            <div class="card">
                                <div>
                                    <div class="numbers">1,504</div>
                                    <div class="cardName">Daily Views</div>
                                </div>

                                <div class="iconBx">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>
                            </div>

                            <div class="card">
                                <div>
                                    <div class="numbers">80</div>
                                    <div class="cardName">Sales</div>
                                </div>

                                <div class="iconBx">
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                            </div>

                            <div class="card">
                                <div>
                                    <div class="numbers">284</div>
                                    <div class="cardName">Comments</div>
                                </div>

                                <div class="iconBx">
                                    <ion-icon
                                        name="chatbubbles-outline"
                                    ></ion-icon>
                                </div>
                            </div>

                            <div class="card">
                                <div>
                                    <div class="numbers">$7,842</div>
                                    <div class="cardName">Earning</div>
                                </div>

                                <div class="iconBx">
                                    <ion-icon name="cash-outline"></ion-icon>
                                </div>
                            </div>
                        </div>

                        <!-- ================ Order Details List ================= -->
                        <div>
                           {{$slot}}
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>

    <script
        type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
        nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
</html>
