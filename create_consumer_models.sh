#!/bin/bash

# Consumer models
cat > resources/views/pages/models/consumer-et-c6.blade.php << 'EOL'
@php
$model = [
    'name' => 'Consumer ET-C6',
    'description' => '6-inch consumer display for smartphones and tablets',
    'category' => 'Consumer',
    'screen_size' => '6',
    'resolution' => '1280x720',
    'brightness' => '250',
    'response_time' => '< 1ms',
    'specifications' => [
        'Screen Size' => '6.0"',
        'Resolution' => '1280 x 720 pixels',
        'Panel Type' => 'IPS LCD',
        'Brightness' => '250 nits',
        'Contrast Ratio' => '1000:1',
        'Response Time' => '< 1ms',
        'Color Gamut' => '100% sRGB',
        'Touch Technology' => 'Capacitive Multi-touch',
        'Viewing Angle' => '178° (H/V)',
        'Operating Temperature' => '0°C to +50°C',
        'Storage Temperature' => '-20°C to +60°C',
        'Humidity' => '10% - 90% RH',
        'Power Consumption' => '3W',
        'Thickness' => '5mm',
        'Weight' => '0.2 kg',
        'Dimensions' => '140 x 80 x 5 mm',
        'Certifications' => 'CE / FCC / RoHS',
        'Warranty' => '2 years'
    ],
    'related_products' => [
        ['name' => 'Consumer ET-C10', 'description' => '10-inch consumer display', 'screen_size' => '10', 'resolution' => '1920x1080', 'brightness' => '280', 'url' => '/products/consumer-et-c10'],
        ['name' => 'Consumer ET-C15', 'description' => '15-inch consumer display', 'screen_size' => '15', 'resolution' => '1920x1080', 'brightness' => '300', 'url' => '/products/consumer-et-c15'],
        ['name' => 'Consumer ET-C24', 'description' => '24-inch consumer display', 'screen_size' => '24', 'resolution' => '3840x2160', 'brightness' => '350', 'url' => '/products/consumer-et-c24']
    ]
];
@endphp
@extends('pages.models.template')
EOL

cat > resources/views/pages/models/consumer-et-c10.blade.php << 'EOL'
@php
$model = [
    'name' => 'Consumer ET-C10',
    'description' => '10-inch consumer display for tablets and portable devices',
    'category' => 'Consumer',
    'screen_size' => '10',
    'resolution' => '1920x1080',
    'brightness' => '280',
    'response_time' => '< 1ms',
    'specifications' => [
        'Screen Size' => '10.1"',
        'Resolution' => '1920 x 1080 pixels',
        'Panel Type' => 'IPS LCD',
        'Brightness' => '280 nits',
        'Contrast Ratio' => '1000:1',
        'Response Time' => '< 1ms',
        'Color Gamut' => '100% sRGB',
        'Touch Technology' => 'Capacitive Multi-touch',
        'Viewing Angle' => '178° (H/V)',
        'Operating Temperature' => '0°C to +50°C',
        'Storage Temperature' => '-20°C to +60°C',
        'Humidity' => '10% - 90% RH',
        'Power Consumption' => '6W',
        'Thickness' => '6mm',
        'Weight' => '0.4 kg',
        'Dimensions' => '250 x 160 x 6 mm',
        'Certifications' => 'CE / FCC / RoHS',
        'Warranty' => '2 years'
    ],
    'related_products' => [
        ['name' => 'Consumer ET-C6', 'description' => '6-inch consumer display', 'screen_size' => '6', 'resolution' => '1280x720', 'brightness' => '250', 'url' => '/products/consumer-et-c6'],
        ['name' => 'Consumer ET-C15', 'description' => '15-inch consumer display', 'screen_size' => '15', 'resolution' => '1920x1080', 'brightness' => '300', 'url' => '/products/consumer-et-c15'],
        ['name' => 'Consumer ET-C24', 'description' => '24-inch consumer display', 'screen_size' => '24', 'resolution' => '3840x2160', 'brightness' => '350', 'url' => '/products/consumer-et-c24']
    ]
];
@endphp
@extends('pages.models.template')
EOL

cat > resources/views/pages/models/consumer-et-c24.blade.php << 'EOL'
@php
$model = [
    'name' => 'Consumer ET-C24',
    'description' => '24-inch consumer display for monitors and TVs',
    'category' => 'Consumer',
    'screen_size' => '24',
    'resolution' => '3840x2160',
    'brightness' => '350',
    'response_time' => '< 1ms',
    'specifications' => [
        'Screen Size' => '24"',
        'Resolution' => '3840 x 2160 pixels (4K)',
        'Panel Type' => 'IPS LCD',
        'Brightness' => '350 nits',
        'Contrast Ratio' => '1000:1',
        'Response Time' => '< 1ms',
        'Color Gamut' => '100% sRGB',
        'Touch Technology' => 'Capacitive Multi-touch',
        'Viewing Angle' => '178° (H/V)',
        'Operating Temperature' => '0°C to +50°C',
        'Storage Temperature' => '-20°C to +60°C',
        'Humidity' => '10% - 90% RH',
        'Power Consumption' => '25W',
        'Thickness' => '12mm',
        'Weight' => '3.5 kg',
        'Dimensions' => '550 x 350 x 12 mm',
        'Certifications' => 'CE / FCC / RoHS',
        'Warranty' => '2 years'
    ],
    'related_products' => [
        ['name' => 'Consumer ET-C6', 'description' => '6-inch consumer display', 'screen_size' => '6', 'resolution' => '1280x720', 'brightness' => '250', 'url' => '/products/consumer-et-c6'],
        ['name' => 'Consumer ET-C10', 'description' => '10-inch consumer display', 'screen_size' => '10', 'resolution' => '1920x1080', 'brightness' => '280', 'url' => '/products/consumer-et-c10'],
        ['name' => 'Consumer ET-C15', 'description' => '15-inch consumer display', 'screen_size' => '15', 'resolution' => '1920x1080', 'brightness' => '300', 'url' => '/products/consumer-et-c15']
    ]
];
@endphp
@extends('pages.models.template')
EOL

echo "Consumer models created successfully!"
