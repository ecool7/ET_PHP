@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">Products</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Comprehensive range of display solutions for every application
            </p>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Product Range</h2>
            <p class="text-xl text-gray-600">High-quality displays designed for specific industry needs</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='/products/industrial-et-7'">
                <div class="w-16 h-16 bg-gray-100 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative group carousel">
                    <img src="/images/products/tle-c101.svg" alt="TLE-C101" class="w-full h-full object-contain carousel-slide">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">TLE-C101</h3>
                <p class="text-gray-600 mb-4">10.1" Industrial All-in-One PC with Intel Bay Trail-d chipset</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 10.1" screen size</div>
                    <div class="text-sm text-gray-500">• 1280x800 resolution</div>
                    <div class="text-sm text-gray-500">• 330 nits brightness</div>
                    <div class="text-sm text-gray-500">• All-in-One PC</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">
                    View Details
                </button>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='/products/industrial-et-10'">
                <div class="w-16 h-16 bg-gray-100 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative group carousel">
                    <img src="/images/products/tle-l1012.svg" alt="TLE-L1012" class="w-full h-full object-contain carousel-slide">
                    <button type="button" class="hidden group-hover:flex absolute left-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">‹</button>
                    <button type="button" class="hidden group-hover:flex absolute right-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">›</button>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">TLE-L1012</h3>
                <p class="text-gray-600 mb-4">10.1" IP65 Open Frame PCAP Multitouch Touch Monitor</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 10.1" screen size</div>
                    <div class="text-sm text-gray-500">• 1280x800 resolution</div>
                    <div class="text-sm text-gray-500">• 400 nits brightness</div>
                    <div class="text-sm text-gray-500">• IP65 protection</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">
                    View Details
                </button>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='/products/industrial-et-15'">
                <div class="w-16 h-16 bg-gray-100 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative group carousel">
                    <img src="/images/products/industrial-et-15.svg" alt="TLE-C150-CT-HD" class="w-full h-full object-contain carousel-slide">
                    <button type="button" class="hidden group-hover:flex absolute left-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">‹</button>
                    <button type="button" class="hidden group-hover:flex absolute right-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">›</button>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">TLE-C150-CT-HD</h3>
                <p class="text-gray-600 mb-4">15.0" Industrial Touch Monitor with Digital OSD</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 15.0" screen size</div>
                    <div class="text-sm text-gray-500">• 1024x768 resolution</div>
                    <div class="text-sm text-gray-500">• 350 nits brightness</div>
                    <div class="text-sm text-gray-500">• Digital OSD</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">
                    View Details
                </button>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='/products/industrial-et-21'">
                <div class="w-16 h-16 bg-gray-100 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative group carousel">
                    <img src="/images/products/industrial-et-21.svg" alt="TLE-C156-CT-HD" class="w-full h-full object-contain carousel-slide">
                    <button type="button" class="hidden group-hover:flex absolute left-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">‹</button>
                    <button type="button" class="hidden group-hover:flex absolute right-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">›</button>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">TLE-C156-CT-HD</h3>
                <p class="text-gray-600 mb-4">15.6" Industrial Touch Monitor with High Brightness</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 15.6" screen size</div>
                    <div class="text-sm text-gray-500">• 1920x1080 resolution</div>
                    <div class="text-sm text-gray-500">• 300 nits brightness</div>
                    <div class="text-sm text-gray-500">• High brightness</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">
                    View Details
                </button>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='/products/industrial-et-17'">
                <div class="w-16 h-16 bg-gray-100 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative group carousel">
                    <img src="/images/products/industrial-et-17.svg" alt="TLE-C170-CT-HD" class="w-full h-full object-contain carousel-slide">
                    <button type="button" class="hidden group-hover:flex absolute left-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">‹</button>
                    <button type="button" class="hidden group-hover:flex absolute right-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">›</button>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">TLE-C170-CT-HD</h3>
                <p class="text-gray-600 mb-4">17.0" Industrial Touch Monitor with High Resolution</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 17.0" screen size</div>
                    <div class="text-sm text-gray-500">• 1280x1024 resolution</div>
                    <div class="text-sm text-gray-500">• 250 nits brightness</div>
                    <div class="text-sm text-gray-500">• 5:4 aspect ratio</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">
                    View Details
                </button>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='/products/industrial-et-185'">
                <div class="w-16 h-16 bg-gray-100 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative group carousel">
                    <img src="/images/products/industrial-et-185.svg" alt="TLE-C185B1000-CT-HD" class="w-full h-full object-contain carousel-slide">
                    <button type="button" class="hidden group-hover:flex absolute left-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">‹</button>
                    <button type="button" class="hidden group-hover:flex absolute right-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">›</button>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">TLE-C185B1000-CT-HD</h3>
                <p class="text-gray-600 mb-4">18.5" Industrial Touch Monitor with Ultra High Brightness</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 18.5" screen size</div>
                    <div class="text-sm text-gray-500">• 1920x1080 resolution</div>
                    <div class="text-sm text-gray-500">• 1000 nits brightness</div>
                    <div class="text-sm text-gray-500">• Ultra high brightness</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">
                    View Details
                </button>
            </div>

            <!-- New models -->
            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='/products/tle-c190-ct-hd'">
                <div class="w-16 h-16 bg-gray-100 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative group carousel">
                    <img src="/images/products/tle-c190-ct-hd.svg" alt="TLE-C190-CT-HD" class="w-full h-full object-contain carousel-slide">
                    <button type="button" class="hidden group-hover:flex absolute left-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">‹</button>
                    <button type="button" class="hidden group-hover:flex absolute right-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">›</button>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">TLE-C190-CT-HD</h3>
                <p class="text-gray-600 mb-4">19.0" Industrial Touch Monitor</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 19.0" screen size</div>
                    <div class="text-sm text-gray-500">• 1280x1024 resolution</div>
                    <div class="text-sm text-gray-500">• 250 nits brightness</div>
                    <div class="text-sm text-gray-500">• PCAP touch</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">View Details</button>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='/products/tle-c215-ct-hd'">
                <div class="w-16 h-16 bg-gray-100 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative group carousel">
                    <img src="/images/products/tle-c215-ct-hd.svg" alt="TLE-C215-CT-HD" class="w-full h-full object-contain carousel-slide">
                    <button type="button" class="hidden group-hover:flex absolute left-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">‹</button>
                    <button type="button" class="hidden group-hover:flex absolute right-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">›</button>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">TLE-C215-CT-HD</h3>
                <p class="text-gray-600 mb-4">21.5" Industrial Touch Monitor</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 21.5" screen size</div>
                    <div class="text-sm text-gray-500">• 1920x1080 resolution</div>
                    <div class="text-sm text-gray-500">• 250 nits brightness</div>
                    <div class="text-sm text-gray-500">• PCAP touch</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">View Details</button>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='/products/tle-c215b1000-ct-hd'">
                <div class="w-16 h-16 bg-gray-100 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative group carousel">
                    <img src="/images/products/tle-c215b1000-ct-hd.svg" alt="TLE-C215B1000-CT-HD" class="w-full h-full object-contain carousel-slide">
                    <button type="button" class="hidden group-hover:flex absolute left-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">‹</button>
                    <button type="button" class="hidden group-hover:flex absolute right-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">›</button>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">TLE-C215B1000-CT-HD</h3>
                <p class="text-gray-600 mb-4">21.5" High Brightness 1000 nits Touch Monitor</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 21.5" screen size</div>
                    <div class="text-sm text-gray-500">• 1920x1080 resolution</div>
                    <div class="text-sm text-gray-500">• 1000 nits brightness</div>
                    <div class="text-sm text-gray-500">• PCAP touch</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">View Details</button>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='/products/tle-l2382'">
                <div class="w-16 h-16 bg-gray-100 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative group carousel">
                    <img src="/images/products/tle-l2382.svg" alt="TLE-L2382" class="w-full h-full object-contain carousel-slide">
                    <button type="button" class="hidden group-hover:flex absolute left-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">‹</button>
                    <button type="button" class="hidden group-hover:flex absolute right-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">›</button>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">TLE-L2382</h3>
                <p class="text-gray-600 mb-4">23.8" IP65 Open Frame PCAP Multitouch Monitor</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 23.8" screen size</div>
                    <div class="text-sm text-gray-500">• 1920x1080 resolution</div>
                    <div class="text-sm text-gray-500">• 250 nits brightness</div>
                    <div class="text-sm text-gray-500">• IP65 front</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">View Details</button>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='/products/tle-l2762'">
                <div class="w-16 h-16 bg-gray-100 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative group carousel">
                    <img src="/images/products/tle-l2762.svg" alt="TLE-L2762" class="w-full h-full object-contain carousel-slide">
                    <button type="button" class="hidden group-hover:flex absolute left-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">‹</button>
                    <button type="button" class="hidden group-hover:flex absolute right-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">›</button>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">TLE-L2762</h3>
                <p class="text-gray-600 mb-4">27" IP65 Open Frame PCAP Multitouch Monitor</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 27" screen size</div>
                    <div class="text-sm text-gray-500">• 1920x1080 resolution</div>
                    <div class="text-sm text-gray-500">• 300 nits brightness</div>
                    <div class="text-sm text-gray-500">• IP65 front</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">View Details</button>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='/products/et-af185-tp'">
                <div class="w-16 h-16 bg-gray-100 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative group carousel">
                    <img src="/images/products/et-af185-tp.svg" alt="ET-AF185-TP" class="w-full h-full object-contain carousel-slide">
                    <button type="button" class="hidden group-hover:flex absolute left-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">‹</button>
                    <button type="button" class="hidden group-hover:flex absolute right-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">›</button>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">ET-AF185-TP</h3>
                <p class="text-gray-600 mb-4">18.5" Aluminum Alloy Open Frame Touch Monitor</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 18.5" screen size</div>
                    <div class="text-sm text-gray-500">• 1920x1080 resolution</div>
                    <div class="text-sm text-gray-500">• 250 nits brightness</div>
                    <div class="text-sm text-gray-500">• PCAP touch</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">View Details</button>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='/products/et-le1739'">
                <div class="w-16 h-16 bg-gray-100 rounded-lg mb-4 flex items-center justify-center overflow-hidden relative group carousel">
                    <img src="/images/products/et-le1739.svg" alt="ET-LE1739" class="w-full h-full object-contain carousel-slide">
                    <button type="button" class="hidden group-hover:flex absolute left-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">‹</button>
                    <button type="button" class="hidden group-hover:flex absolute right-1 top-1/2 -translate-y-1/2 w-6 h-6 items-center justify-center rounded bg-white/70 text-gray-800 text-xs">›</button>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">ET-LE1739</h3>
                <p class="text-gray-600 mb-4">17" Open Frame SAW IP65 Touch Monitor</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 17" screen size</div>
                    <div class="text-sm text-gray-500">• 1024x768 resolution</div>
                    <div class="text-sm text-gray-500">• 250 nits brightness</div>
                    <div class="text-sm text-gray-500">• SAW touch</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">View Details</button>
            </div>
        </div>
    </div>
</section>

<!-- Product Categories Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Product Categories</h2>
            <p class="text-xl text-gray-600">Specialized displays for specific applications</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Touch Displays</h3>
                <p class="text-gray-600 mb-4">Capacitive and resistive touch technology for interactive applications.</p>
                <ul class="text-sm text-gray-500 space-y-1 mb-4">
                    <li>• Multi-touch support</li>
                    <li>• Glove-friendly operation</li>
                    <li>• Scratch-resistant surface</li>
                    <li>• Waterproof options</li>
                </ul>
                <div class="text-sm font-medium text-gray-900">Available sizes: 7" - 24"</div>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">High Brightness Displays</h3>
                <p class="text-gray-600 mb-4">Sunlight-readable displays for outdoor and bright environment applications.</p>
                <ul class="text-sm text-gray-500 space-y-1 mb-4">
                    <li>• Up to 2000 nits brightness</li>
                    <li>• Anti-glare coating</li>
                    <li>• Wide viewing angles</li>
                    <li>• Temperature compensation</li>
                </ul>
                <div class="text-sm font-medium text-gray-900">Available sizes: 10" - 32"</div>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Rugged Displays</h3>
                <p class="text-gray-600 mb-4">Military-grade displays designed for extreme environmental conditions.</p>
                <ul class="text-sm text-gray-500 space-y-1 mb-4">
                    <li>• IP67 protection rating</li>
                    <li>• MIL-STD-810G certified</li>
                    <li>• Vibration resistant</li>
                    <li>• EMI/RFI shielded</li>
                </ul>
                <div class="text-sm font-medium text-gray-900">Available sizes: 7" - 21"</div>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">OLED Displays</h3>
                <p class="text-gray-600 mb-4">Next-generation OLED technology with perfect blacks and infinite contrast.</p>
                <ul class="text-sm text-gray-500 space-y-1 mb-4">
                    <li>• Perfect black levels</li>
                    <li>• Ultra-fast response time</li>
                    <li>• Wide color gamut</li>
                    <li>• Energy efficient</li>
                </ul>
                <div class="text-sm font-medium text-gray-900">Available sizes: 5" - 15"</div>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Flexible Displays</h3>
                <p class="text-gray-600 mb-4">Bendable and foldable displays for innovative form factors.</p>
                <ul class="text-sm text-gray-500 space-y-1 mb-4">
                    <li>• Bendable design</li>
                    <li>• Ultra-thin profile</li>
                    <li>• Lightweight construction</li>
                    <li>• Custom shapes available</li>
                </ul>
                <div class="text-sm font-medium text-gray-900">Available sizes: 6" - 12"</div>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Transparent Displays</h3>
                <p class="text-gray-600 mb-4">See-through displays for augmented reality and innovative applications.</p>
                <ul class="text-sm text-gray-500 space-y-1 mb-4">
                    <li>• High transparency</li>
                    <li>• AR-ready technology</li>
                    <li>• Custom transparency levels</li>
                    <li>• Edge-lit design</li>
                </ul>
                <div class="text-sm font-medium text-gray-900">Available sizes: 8" - 20"</div>
            </div>
        </div>
    </div>
</section>

<!-- Specifications Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Technical Specifications</h2>
            <p class="text-xl text-gray-600">Standard specifications across our product range</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="bg-gray-800 rounded-lg p-8">
                <h3 class="text-2xl font-bold text-white mb-6">Display Specifications</h3>
                <div class="space-y-4">
                    <div class="flex justify-between text-white">
                        <span>Panel Type</span>
                        <span>IPS / OLED / TFT</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Resolution</span>
                        <span>HD to 4K UHD</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Brightness</span>
                        <span>250 - 2000 nits</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Contrast Ratio</span>
                        <span>1000:1 - 100000:1</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Response Time</span>
                        <span>&lt; 1ms - 5ms</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Viewing Angle</span>
                        <span>178° (H/V)</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Color Gamut</span>
                        <span>100% sRGB / DCI-P3</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Touch Technology</span>
                        <span>Capacitive / Resistive</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800 rounded-lg p-8">
                <h3 class="text-2xl font-bold text-white mb-6">Environmental Specifications</h3>
                <div class="space-y-4">
                    <div class="flex justify-between text-white">
                        <span>Operating Temperature</span>
                        <span>-20°C to +70°C</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Storage Temperature</span>
                        <span>-30°C to +80°C</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Humidity</span>
                        <span>10% - 90% RH</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Protection Rating</span>
                        <span>IP65 / IP67</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Vibration</span>
                        <span>MIL-STD-810G</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Shock Resistance</span>
                        <span>50G / 11ms</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>EMI/RFI</span>
                        <span>FCC Class A/B</span>
                    </div>
                    <div class="flex justify-between text-white">
                        <span>Certifications</span>
                        <span>CE / FCC / UL</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Need a Custom Solution?</h2>
            <p class="text-xl text-gray-600">Contact our technical team for specialized display requirements</p>
        </div>
        
        <div class="bg-gray-800 rounded-lg p-8 max-w-2xl mx-auto">
            <h3 class="text-2xl font-bold text-white mb-6 text-center">Request Product Information</h3>
            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Your Name" class="w-full px-4 py-3 rounded-lg bg-gray-700 text-white placeholder-gray-400 border border-gray-600 focus:border-white focus:outline-none">
                    <input type="email" placeholder="Your Email" class="w-full px-4 py-3 rounded-lg bg-gray-700 text-white placeholder-gray-400 border border-gray-600 focus:border-white focus:outline-none">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Company" class="w-full px-4 py-3 rounded-lg bg-gray-700 text-white placeholder-gray-400 border border-gray-600 focus:border-white focus:outline-none">
                    <select class="w-full px-4 py-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:border-white focus:outline-none">
                        <option>Product Category</option>
                        <option>Industrial Displays</option>
                        <option>Medical Displays</option>
                        <option>Automotive Displays</option>
                        <option>Consumer Displays</option>
                        <option>Custom Solution</option>
                    </select>
                </div>
                <textarea placeholder="Your Requirements" rows="4" class="w-full px-4 py-3 rounded-lg bg-gray-700 text-white placeholder-gray-400 border border-gray-600 focus:border-white focus:outline-none resize-none"></textarea>
                <button type="submit" class="w-full bg-white text-gray-800 py-3 px-6 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    Request Information
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
