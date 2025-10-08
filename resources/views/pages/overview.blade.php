@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">Overview</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Discover our comprehensive range of display solutions and innovative technologies
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
            <!-- Left Side - Text -->
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Element Touch
                </h2>
                <p class="text-xl text-gray-600 mb-8 ml-4">
                    — a leading manufacturer of innovative display solutions
                </p>
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

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Display Portfolio</h2>
            <p class="text-xl text-gray-600">High-quality displays for every application</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
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
</section>

<!-- Stats Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Achievements</h2>
            <p class="text-xl text-gray-600">Numbers that speak for our success</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold text-gray-900 mb-2">15+</div>
                <div class="text-gray-600">Years Experience</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-gray-900 mb-2">500+</div>
                <div class="text-gray-600">Projects Completed</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-gray-900 mb-2">50+</div>
                <div class="text-gray-600">Countries Served</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-gray-900 mb-2">99%</div>
                <div class="text-gray-600">Client Satisfaction</div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Advanced Display Technology</h2>
            <p class="text-xl text-gray-600">Cutting-edge technologies for superior performance</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-semibold text-gray-900 mb-6">Key Technologies</h3>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="text-white text-sm font-bold">1</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900 mb-2">IPS Panel Technology</h4>
                            <p class="text-gray-600">Superior color accuracy and wide viewing angles for consistent image quality from any angle.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="text-white text-sm font-bold">2</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900 mb-2">Touch Technology</h4>
                            <p class="text-gray-600">Capacitive and resistive touch options with multi-touch support for enhanced user interaction.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="text-white text-sm font-bold">3</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900 mb-2">High Brightness</h4>
                            <p class="text-gray-600">Up to 1000 nits brightness for excellent visibility in bright environments and outdoor applications.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="text-white text-sm font-bold">4</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900 mb-2">OLED Technology</h4>
                            <p class="text-gray-600">Next-generation OLED displays with perfect blacks, infinite contrast, and energy efficiency.</p>
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
                    <div class="flex justify-between text-white">
                        <span>Brightness</span>
                        <span>Up to 1000 nits</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Contrast Ratio</span>
                        <span>1000:1</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Viewing Angle</span>
                        <span>178°</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Applications Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Industry Applications</h2>
            <p class="text-xl text-gray-600">Tailored solutions for diverse industry needs</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Industrial Equipment</h3>
                <p class="text-gray-600 mb-4">Control panels, HMI systems, and monitoring displays for manufacturing and automation.</p>
                <ul class="text-sm text-gray-500 space-y-1">
                    <li>• CNC Machine Controls</li>
                    <li>• Process Monitoring</li>
                    <li>• Quality Control Systems</li>
                    <li>• Factory Automation</li>
                </ul>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Medical Devices</h3>
                <p class="text-gray-600 mb-4">High-precision displays for diagnostic equipment and patient monitoring systems.</p>
                <ul class="text-sm text-gray-500 space-y-1">
                    <li>• Diagnostic Imaging</li>
                    <li>• Patient Monitors</li>
                    <li>• Surgical Equipment</li>
                    <li>• Laboratory Instruments</li>
                </ul>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Automotive Electronics</h3>
                <p class="text-gray-600 mb-4">Infotainment systems, instrument clusters, and driver assistance displays.</p>
                <ul class="text-sm text-gray-500 space-y-1">
                    <li>• Dashboard Displays</li>
                    <li>• Infotainment Systems</li>
                    <li>• Rear View Cameras</li>
                    <li>• ADAS Displays</li>
                </ul>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Consumer Electronics</h3>
                <p class="text-gray-600 mb-4">High-quality displays for smartphones, tablets, and consumer gadgets.</p>
                <ul class="text-sm text-gray-500 space-y-1">
                    <li>• Smartphones</li>
                    <li>• Tablets</li>
                    <li>• Smart Watches</li>
                    <li>• Gaming Devices</li>
                </ul>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Retail & POS</h3>
                <p class="text-gray-600 mb-4">Point-of-sale systems and digital signage for retail environments.</p>
                <ul class="text-sm text-gray-500 space-y-1">
                    <li>• POS Terminals</li>
                    <li>• Digital Signage</li>
                    <li>• Kiosks</li>
                    <li>• Self-Checkout</li>
                </ul>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Education & Training</h3>
                <p class="text-gray-600 mb-4">Interactive displays for educational institutions and training facilities.</p>
                <ul class="text-sm text-gray-500 space-y-1">
                    <li>• Interactive Whiteboards</li>
                    <li>• Classroom Displays</li>
                    <li>• Training Simulators</li>
                    <li>• E-Learning Platforms</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Complete Display Solutions</h2>
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
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Custom Development</h3>
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
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Technical Support</h3>
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
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Quality Assurance</h3>
                        <p class="text-gray-600">Rigorous testing and quality control processes ensure reliable performance.</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Fast Delivery</h3>
                        <p class="text-gray-600">Quick turnaround times with flexible production schedules to meet your deadlines.</p>
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
                    <div class="flex items-center text-white">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>+1 (555) 123-4567</span>
                    </div>
                </div>
                <button class="mt-6 w-full bg-white text-gray-800 py-3 px-6 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    Request Quote
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Process</h2>
            <p class="text-xl text-gray-600">How we deliver your custom display solution</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-gray-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">1</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Consultation</h3>
                <p class="text-gray-600">We discuss your requirements and understand your specific needs.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-gray-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">2</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Design</h3>
                <p class="text-gray-600">Our engineers create custom solutions tailored to your application.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-gray-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">3</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Prototype</h3>
                <p class="text-gray-600">We build and test prototypes to ensure optimal performance.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-gray-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <span class="text-white text-xl font-bold">4</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Production</h3>
                <p class="text-gray-600">Full-scale production with quality control and timely delivery.</p>
            </div>
        </div>
    </div>
</section>
@endsection
