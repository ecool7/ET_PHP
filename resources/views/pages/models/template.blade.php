@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">{{ $model['name'] }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">{{ $model['description'] }}</p>
        </div>
    </div>
</section>

<!-- Product Details Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Image -->
            <div>
                <div class="bg-gray-100 rounded-lg p-8 mb-6">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-200 rounded-lg flex items-center justify-center">
                        @if(isset($model['image']) && $model['image'])
                            <img src="{{ $model['image'] }}" alt="{{ $model['name'] }}" class="max-w-full max-h-full object-contain rounded-lg">
                        @else
                            <div class="text-center">
                                <div class="w-32 h-24 bg-gray-800 rounded-lg mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-16 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-700">{{ $model['name'] }}</h3>
                                <p class="text-sm text-gray-500">{{ $model['category'] }} Display</p>
                            </div>
                        @endif
                    </div>
                </div>
                
                <!-- Key Features -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gray-50 rounded-lg p-4 text-center">
                        <div class="text-2xl font-bold text-gray-900 mb-1">{{ $model['screen_size'] }}"</div>
                        <div class="text-sm text-gray-600">Screen Size</div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4 text-center">
                        <div class="text-2xl font-bold text-gray-900 mb-1">{{ $model['resolution'] }}</div>
                        <div class="text-sm text-gray-600">Resolution</div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4 text-center">
                        <div class="text-2xl font-bold text-gray-900 mb-1">{{ $model['brightness'] }} nits</div>
                        <div class="text-sm text-gray-600">Brightness</div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4 text-center">
                        <div class="text-2xl font-bold text-gray-900 mb-1">{{ $model['response_time'] }}</div>
                        <div class="text-sm text-gray-600">Response Time</div>
                    </div>
                </div>
            </div>
            
            <!-- Specifications Table -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Technical Specifications</h2>
                <div class="bg-gray-50 rounded-lg p-6">
                    <table class="w-full text-sm">
                        <tbody class="space-y-2">
                            @foreach($model['specifications'] as $spec => $value)
                            <tr class="border-b border-gray-200">
                                <td class="py-3 font-medium text-gray-700">{{ $spec }}</td>
                                <td class="py-3 text-gray-600">{{ $value }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Request Information</h2>
            <p class="text-xl text-gray-600">Get detailed information about {{ $model['name'] }}</p>
        </div>
        
        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-lg p-8 shadow-sm">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-800 focus:border-transparent" placeholder="Your first name">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-800 focus:border-transparent" placeholder="Your last name">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-800 focus:border-transparent" placeholder="your.email@company.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-800 focus:border-transparent" placeholder="+1 (555) 123-4567">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Company</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-800 focus:border-transparent" placeholder="Your company name">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Application</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-800 focus:border-transparent">
                            <option>Select application</option>
                            <option>Industrial Control</option>
                            <option>Medical Equipment</option>
                            <option>Automotive</option>
                            <option>Consumer Electronics</option>
                            <option>Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Quantity</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-800 focus:border-transparent">
                            <option>Select quantity</option>
                            <option>1-10 units</option>
                            <option>11-100 units</option>
                            <option>101-1000 units</option>
                            <option>1000+ units</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-800 focus:border-transparent resize-none" placeholder="Tell us about your specific requirements..."></textarea>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="newsletter" class="h-4 w-4 text-gray-800 focus:ring-gray-800 border-gray-300 rounded">
                        <label for="newsletter" class="ml-2 block text-sm text-gray-700">
                            Subscribe to our newsletter for product updates
                        </label>
                    </div>
                    
                    <button type="submit" class="w-full bg-gray-800 text-white py-3 px-6 rounded-lg font-semibold hover:bg-gray-700 transition-colors">
                        Request Information
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Related Products Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Related Products</h2>
            <p class="text-xl text-gray-600">Other displays in the {{ $model['category'] }} series</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($model['related_products'] as $related)
            <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors cursor-pointer" onclick="window.location.href='{{ $related['url'] }}'">
                <div class="w-16 h-16 bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $related['name'] }}</h3>
                <p class="text-gray-600 text-sm mb-4">{{ $related['description'] }}</p>
                <div class="text-sm text-gray-500 space-y-1">
                    <div>• {{ $related['screen_size'] }}" screen</div>
                    <div>• {{ $related['resolution'] }} resolution</div>
                    <div>• {{ $related['brightness'] }} nits brightness</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
// Form handling
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Show success message
    const notification = document.createElement('div');
    notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
    notification.textContent = 'Request sent successfully! We\'ll contact you soon.';
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
    
    // Reset form
    this.reset();
});
</script>
@endsection
