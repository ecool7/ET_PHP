<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Element Touch' }} - Display Solutions</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header -->
    <header class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-gray-900 hover:text-gray-700 transition-colors">Element Touch</a>
                    <div class="ml-2 h-6 w-px bg-gray-300"></div>
                </div>
                
                <!-- Navigation -->
                <nav class="flex items-center space-x-8">
                    <a href="/overview" class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200 {{ request()->is('overview') ? 'text-gray-900 font-semibold' : '' }}">Overview</a>
                    <a href="/products" class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200 {{ request()->is('products') ? 'text-gray-900 font-semibold' : '' }}">Products</a>
                    <a href="/#about" class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">About us</a>
                    <a href="/#directions" class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">Directions</a>
                    <a href="/#contacts" class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">Contacts</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <p class="text-gray-300 leading-relaxed mb-8">
                        Since its inception, Element Touch has established itself as a trusted partner for businesses, 
                        delivering cutting-edge technology that delivers exceptional image quality, responsiveness, and durability. 
                        Our displays are used in a wide range of applications, from industrial equipment and medical devices 
                        to automotive electronics and consumer gadgets.
                    </p>
                </div>
                
                <div class="flex justify-end">
                    <div class="text-center">
                        <div class="flex items-center justify-center mb-4">
                            <h3 class="text-2xl font-bold text-white mr-3">Element Touch</h3>
                            <div class="relative">
                                <!-- Mini logo -->
                                <div class="w-8 h-6 border border-white absolute top-0 left-0"></div>
                                <div class="w-8 h-6 border border-white absolute top-1 left-1"></div>
                            </div>
                        </div>
                        <p class="text-gray-400 text-sm">Display Solutions</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Element Touch. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
