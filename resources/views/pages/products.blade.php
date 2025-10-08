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
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors">
                <div class="w-16 h-16 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Industrial Displays</h3>
                <p class="text-gray-600 mb-4">Rugged displays for harsh industrial environments</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 7" to 24" sizes</div>
                    <div class="text-sm text-gray-500">• IP65 protection</div>
                    <div class="text-sm text-gray-500">• Wide temperature range</div>
                    <div class="text-sm text-gray-500">• Shock resistant</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">
                    View Details
                </button>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors">
                <div class="w-16 h-16 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Medical Displays</h3>
                <p class="text-gray-600 mb-4">High-precision displays for medical equipment</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 10" to 32" sizes</div>
                    <div class="text-sm text-gray-500">• Medical grade certification</div>
                    <div class="text-sm text-gray-500">• High color accuracy</div>
                    <div class="text-sm text-gray-500">• DICOM compliance</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">
                    View Details
                </button>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors">
                <div class="w-16 h-16 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Automotive Displays</h3>
                <p class="text-gray-600 mb-4">Infotainment and instrument cluster displays</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 6" to 15" sizes</div>
                    <div class="text-sm text-gray-500">• Automotive grade</div>
                    <div class="text-sm text-gray-500">• Sunlight readable</div>
                    <div class="text-sm text-gray-500">• Temperature stable</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">
                    View Details
                </button>
            </div>
            
            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors">
                <div class="w-16 h-16 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Consumer Displays</h3>
                <p class="text-gray-600 mb-4">High-quality displays for consumer electronics</p>
                <div class="space-y-2 mb-4">
                    <div class="text-sm text-gray-500">• 5" to 27" sizes</div>
                    <div class="text-sm text-gray-500">• Ultra-thin design</div>
                    <div class="text-sm text-gray-500">• Energy efficient</div>
                    <div class="text-sm text-gray-500">• High resolution</div>
                </div>
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">
                    View Details
                </button>
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
