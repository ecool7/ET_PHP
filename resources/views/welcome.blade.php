<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Element Touch') }}</title>

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
                    <h1 class="text-2xl font-bold text-gray-900">Element Touch</h1>
                    <div class="ml-2 h-6 w-px bg-gray-300"></div>
                </div>
                
                <!-- Navigation -->
                <nav class="flex items-center space-x-8">
                    <a href="/overview" class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">Overview</a>
                    <a href="/products" class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">Products</a>
                    <a href="#about" class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">About us</a>
                    <a href="#directions" class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">Directions</a>
                    <a href="#contacts" class="text-gray-700 hover:text-gray-900 font-medium transition-colors duration-200">Contacts</a>
                </nav>
            </div>
        </div>
        </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Side - Text -->
                    <div>
                        <h2 class="text-5xl font-bold text-gray-900 mb-6">
                            Element Touch
                        </h2>
                        <p class="text-xl text-gray-600 mb-8 ml-4">
                            — a leading manufacturer of innovative display solutions
                        </p>
                        
                        <!-- Navigation Links -->
                        <div class="flex flex-wrap gap-4 mb-8">
                            <a href="/overview" class="px-6 py-3 text-sm font-medium rounded-lg transition-all duration-300 bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-900">
                                Overview
                            </a>
                            <a href="/products" class="px-6 py-3 text-sm font-medium rounded-lg transition-all duration-300 bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-gray-900">
                                Products
                            </a>
                        </div>
                    </div>
                    
                    <!-- Right Side - Logo Block -->
                    <div class="bg-gray-800 rounded-lg p-12 flex items-center justify-center min-h-96">
                        <div class="text-center">
                            <div class="flex items-center justify-center mb-6">
                                <h3 class="text-4xl font-bold text-white mr-4">Element Touch</h3>
                                <div class="relative">
                                    <!-- Overlapping rectangles logo -->
                                    <div class="w-16 h-12 border-2 border-white absolute top-0 left-0"></div>
                                    <div class="w-16 h-12 border-2 border-white absolute top-2 left-2"></div>
                                </div>
                            </div>
                            <p class="text-gray-300 text-lg">Display Solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tab Content Section -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- Overview Tab -->
                    <div id="overview" class="tab-panel active">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-gray-800 rounded-lg mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">High-Quality Displays</h3>
                                <p class="text-gray-600">Premium display technology with exceptional image quality and reliability.</p>
                            </div>
                            
                            <div class="text-center">
                                <div class="w-16 h-16 bg-gray-800 rounded-lg mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Fast Response</h3>
                                <p class="text-gray-600">Ultra-fast response times for seamless user interaction and smooth performance.</p>
                            </div>
                            
                            <div class="text-center">
                                <div class="w-16 h-16 bg-gray-800 rounded-lg mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Durable Design</h3>
                                <p class="text-gray-600">Robust construction designed to withstand demanding industrial environments.</p>
                            </div>
                        </div>
                        
                        <div class="mt-16 text-center">
                            <h3 class="text-3xl font-bold text-gray-900 mb-8">Our Display Portfolio</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                <div class="bg-gray-100 rounded-lg p-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Industrial Displays</h4>
                                    <p class="text-gray-600 text-sm">Rugged displays for manufacturing and automation</p>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Medical Displays</h4>
                                    <p class="text-gray-600 text-sm">High-precision displays for medical equipment</p>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Automotive Displays</h4>
                                    <p class="text-gray-600 text-sm">Advanced displays for vehicle systems</p>
                                </div>
                                <div class="bg-gray-100 rounded-lg p-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Consumer Displays</h4>
                                    <p class="text-gray-600 text-sm">High-quality displays for consumer electronics</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Technology Tab -->
                    <div id="technology" class="tab-panel">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                            <div>
                                <h3 class="text-3xl font-bold text-gray-900 mb-6">Advanced Display Technology</h3>
                                <div class="space-y-6">
                                    <div class="flex items-start space-x-4">
                                        <div class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                            <span class="text-white text-sm font-bold">1</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 mb-2">IPS Panel Technology</h4>
                                            <p class="text-gray-600">Superior color accuracy and wide viewing angles for consistent image quality from any angle.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start space-x-4">
                                        <div class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                            <span class="text-white text-sm font-bold">2</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 mb-2">Touch Technology</h4>
                                            <p class="text-gray-600">Capacitive and resistive touch options with multi-touch support for enhanced user interaction.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start space-x-4">
                                        <div class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                            <span class="text-white text-sm font-bold">3</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 mb-2">High Brightness</h4>
                                            <p class="text-gray-600">Up to 1000 nits brightness for excellent visibility in bright environments and outdoor applications.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-gray-800 rounded-lg p-8">
                                <h4 class="text-2xl font-bold text-white mb-6">Technical Specifications</h4>
                                <div class="space-y-4">
                                    <div class="flex justify-between text-white">
                                        <span>Resolution</span>
                                        <span>Up to 4K UHD</span>
                                    </div>
                                    <div class="flex justify-between text-white">
                                        <span>Response Time</span>
                                        <span>&lt; 5ms</span>
                                    </div>
                                    <div class="flex justify-between text-white">
                                        <span>Color Gamut</span>
                                        <span>100% sRGB</span>
                                    </div>
                                    <div class="flex justify-between text-white">
                                        <span>Operating Temperature</span>
                                        <span>-20°C to +70°C</span>
                                    </div>
                                    <div class="flex justify-between text-white">
                                        <span>Touch Points</span>
                                        <span>Up to 10 points</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Applications Tab -->
                    <div id="applications" class="tab-panel">
                        <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Industry Applications</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <div class="bg-gray-50 rounded-lg p-6">
                                <div class="w-12 h-12 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-3">Industrial Equipment</h4>
                                <p class="text-gray-600 mb-4">Control panels, HMI systems, and monitoring displays for manufacturing and automation.</p>
                                <ul class="text-sm text-gray-500 space-y-1">
                                    <li>• CNC Machine Controls</li>
                                    <li>• Process Monitoring</li>
                                    <li>• Quality Control Systems</li>
                                </ul>
                            </div>
                            
                            <div class="bg-gray-50 rounded-lg p-6">
                                <div class="w-12 h-12 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-3">Medical Devices</h4>
                                <p class="text-gray-600 mb-4">High-precision displays for diagnostic equipment and patient monitoring systems.</p>
                                <ul class="text-sm text-gray-500 space-y-1">
                                    <li>• Diagnostic Imaging</li>
                                    <li>• Patient Monitors</li>
                                    <li>• Surgical Equipment</li>
                    </ul>
                            </div>
                            
                            <div class="bg-gray-50 rounded-lg p-6">
                                <div class="w-12 h-12 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-3">Automotive Electronics</h4>
                                <p class="text-gray-600 mb-4">Infotainment systems, instrument clusters, and driver assistance displays.</p>
                                <ul class="text-sm text-gray-500 space-y-1">
                                    <li>• Dashboard Displays</li>
                                    <li>• Infotainment Systems</li>
                                    <li>• Rear View Cameras</li>
                    </ul>
                </div>
                        </div>
                    </div>

                    <!-- Solutions Tab -->
                    <div id="solutions" class="tab-panel">
                        <div class="text-center mb-12">
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">Complete Display Solutions</h3>
                            <p class="text-xl text-gray-600">From concept to production, we provide end-to-end display solutions</p>
                        </div>
                        
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                            <div class="space-y-8">
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Custom Development</h4>
                                        <p class="text-gray-600">Tailored display solutions designed specifically for your application requirements.</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Technical Support</h4>
                                        <p class="text-gray-600">Comprehensive technical support and documentation for seamless integration.</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Quality Assurance</h4>
                                        <p class="text-gray-600">Rigorous testing and quality control processes ensure reliable performance.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-gray-800 rounded-lg p-8">
                                <h4 class="text-2xl font-bold text-white mb-6">Get Started</h4>
                                <p class="text-gray-300 mb-6">Ready to discuss your display requirements? Contact our technical team for a consultation.</p>
                                <div class="space-y-4">
                                    <div class="flex items-center text-white">
                                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <span>info@elementtouch.com</span>
                                    </div>
                                </div>
                                <button class="mt-6 w-full bg-white text-gray-800 py-3 px-6 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                    Request Quote
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="about" class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">About Element Touch</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Leading the industry in innovative display solutions since our founding
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-6">Our Story</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Element Touch was founded with a vision to revolutionize display technology. 
                            We specialize in creating high-quality, responsive displays that meet the 
                            demanding requirements of industrial, medical, automotive, and consumer applications.
                        </p>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Our team of engineers and designers work tirelessly to push the boundaries 
                            of what's possible in display technology, ensuring our products deliver 
                            exceptional performance and reliability.
                        </p>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-gray-900 mb-2">15+</div>
                                <div class="text-gray-600">Years Experience</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-gray-900 mb-2">500+</div>
                                <div class="text-gray-600">Projects Completed</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-gray-900 mb-2">50+</div>
                                <div class="text-gray-600">Countries Served</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-gray-900 mb-2">99%</div>
                                <div class="text-gray-600">Client Satisfaction</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg p-8">
                        <h4 class="text-2xl font-bold text-white mb-6">Our Mission</h4>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            To provide cutting-edge display solutions that enhance user experience 
                            and drive innovation across industries.
                        </p>
                        <h5 class="text-lg font-semibold text-white mb-4">Core Values</h5>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-white rounded-full mr-3"></div>
                                Innovation and continuous improvement
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-white rounded-full mr-3"></div>
                                Quality and reliability in every product
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-white rounded-full mr-3"></div>
                                Customer-centric approach
                            </li>
                            <li class="flex items-center">
                                <div class="w-2 h-2 bg-white rounded-full mr-3"></div>
                                Environmental responsibility
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Directions Section -->
        <section id="directions" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Directions</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Strategic focus areas driving our innovation and growth
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors">
                        <div class="w-12 h-12 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Research & Development</h3>
                        <p class="text-gray-600 mb-4">
                            Continuous investment in cutting-edge display technologies and innovative solutions.
                        </p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li>• Next-gen OLED technology</li>
                            <li>• Advanced touch interfaces</li>
                            <li>• Energy-efficient displays</li>
                        </ul>
                    </div>
                    
                    <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors">
                        <div class="w-12 h-12 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Global Expansion</h3>
                        <p class="text-gray-600 mb-4">
                            Expanding our presence worldwide to serve customers in emerging markets.
                        </p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li>• Asia-Pacific markets</li>
                            <li>• European partnerships</li>
                            <li>• Local manufacturing</li>
                        </ul>
                    </div>
                    
                    <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors">
                        <div class="w-12 h-12 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Sustainability</h3>
                        <p class="text-gray-600 mb-4">
                            Committed to environmentally responsible manufacturing and sustainable practices.
                        </p>
                        <ul class="text-sm text-gray-500 space-y-1">
                            <li>• Eco-friendly materials</li>
                            <li>• Energy-efficient production</li>
                            <li>• Recycling programs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section id="products" class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Products</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Comprehensive range of display solutions for every application
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Industrial Displays</h3>
                        <p class="text-gray-600 text-sm mb-4">Rugged displays for harsh industrial environments</p>
                        <div class="text-xs text-gray-500 space-y-1">
                            <div>• 7" to 24" sizes</div>
                            <div>• IP65 protection</div>
                            <div>• Wide temperature range</div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Medical Displays</h3>
                        <p class="text-gray-600 text-sm mb-4">High-precision displays for medical equipment</p>
                        <div class="text-xs text-gray-500 space-y-1">
                            <div>• 10" to 32" sizes</div>
                            <div>• Medical grade certification</div>
                            <div>• High color accuracy</div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Automotive Displays</h3>
                        <p class="text-gray-600 text-sm mb-4">Infotainment and instrument cluster displays</p>
                        <div class="text-xs text-gray-500 space-y-1">
                            <div>• 6" to 15" sizes</div>
                            <div>• Automotive grade</div>
                            <div>• Sunlight readable</div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-16 h-16 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Consumer Displays</h3>
                        <p class="text-gray-600 text-sm mb-4">High-quality displays for consumer electronics</p>
                        <div class="text-xs text-gray-500 space-y-1">
                            <div>• 5" to 27" sizes</div>
                            <div>• Ultra-thin design</div>
                            <div>• Energy efficient</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contacts Section -->
        <section id="contacts" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Contact Us</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Get in touch with our team for custom display solutions
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-6">Get In Touch</h3>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                                    <p class="text-gray-600">info@elementtouch.com</p>
                                    <p class="text-gray-600">sales@elementtouch.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Address</h4>
                                    <p class="text-gray-600"> 715 Kangtai Group Building, <br>
                                                            No. 222 Kefa Road, Science & Technology Park,<br>
                                                            Nanshan District, Shenzhen</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg p-8">
                        <h4 class="text-2xl font-bold text-white mb-6">Send us a Message</h4>
                        <form class="space-y-4">
                            <div>
                                <input type="text" placeholder="Your Name" class="w-full px-4 py-3 rounded-lg bg-gray-700 text-white placeholder-gray-400 border border-gray-600 focus:border-white focus:outline-none">
                            </div>
                            <div>
                                <input type="email" placeholder="Your Email" class="w-full px-4 py-3 rounded-lg bg-gray-700 text-white placeholder-gray-400 border border-gray-600 focus:border-white focus:outline-none">
                            </div>
                            <div>
                                <input type="text" placeholder="Company" class="w-full px-4 py-3 rounded-lg bg-gray-700 text-white placeholder-gray-400 border border-gray-600 focus:border-white focus:outline-none">
                            </div>
                            <div>
                                <textarea placeholder="Your Message" rows="4" class="w-full px-4 py-3 rounded-lg bg-gray-700 text-white placeholder-gray-400 border border-gray-600 focus:border-white focus:outline-none resize-none"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-white text-gray-800 py-3 px-6 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
