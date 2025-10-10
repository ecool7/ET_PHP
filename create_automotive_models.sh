#!/bin/bash

# Automotive models
cat > resources/views/pages/models/automotive-et-a7.blade.php << 'EOL'
@php
$model = [
    'name' => 'Automotive ET-A7',
    'description' => '7-inch automotive display for instrument clusters',
    'category' => 'Automotive',
    'screen_size' => '7',
    'resolution' => '1024x600',
    'brightness' => '1200',
    'response_time' => '< 3ms',
    'specifications' => [
        'Screen Size' => '7.0"',
        'Resolution' => '1024 x 600 pixels',
        'Panel Type' => 'IPS TFT LCD',
        'Brightness' => '1200 nits',
        'Contrast Ratio' => '1000:1',
        'Response Time' => '< 3ms',
        'Touch Technology' => 'Capacitive Multi-touch',
        'Viewing Angle' => '178° (H/V)',
        'Operating Temperature' => '-40°C to +85°C',
        'Storage Temperature' => '-40°C to +90°C',
        'Vibration' => 'ISO 16750-3',
        'Shock' => 'ISO 16750-2',
        'EMC' => 'CISPR 25 / ISO 11452',
        'Automotive Grade' => 'AEC-Q100',
        'Sunlight Readable' => '100,000 lux',
        'Power Consumption' => '8W',
        'Weight' => '0.8 kg',
        'Dimensions' => '180 x 130 x 20 mm',
        'Warranty' => '5 years'
    ],
    'related_products' => [
        ['name' => 'Automotive ET-A10', 'description' => '10-inch automotive display', 'screen_size' => '10', 'resolution' => '1920x1080', 'brightness' => '1500', 'url' => '/products/automotive-et-a10'],
        ['name' => 'Automotive ET-A12', 'description' => '12-inch automotive display', 'screen_size' => '12', 'resolution' => '2560x1440', 'brightness' => '1800', 'url' => '/products/automotive-et-a12'],
        ['name' => 'Automotive ET-A15', 'description' => '15-inch automotive display', 'screen_size' => '15', 'resolution' => '3840x2160', 'brightness' => '2000', 'url' => '/products/automotive-et-a15']
    ]
];
@endphp
@extends('pages.models.template')
EOL

cat > resources/views/pages/models/automotive-et-a12.blade.php << 'EOL'
@php
$model = [
    'name' => 'Automotive ET-A12',
    'description' => '12-inch automotive display for infotainment systems',
    'category' => 'Automotive',
    'screen_size' => '12',
    'resolution' => '2560x1440',
    'brightness' => '1800',
    'response_time' => '< 3ms',
    'specifications' => [
        'Screen Size' => '12.3"',
        'Resolution' => '2560 x 1440 pixels',
        'Panel Type' => 'IPS TFT LCD',
        'Brightness' => '1800 nits',
        'Contrast Ratio' => '1000:1',
        'Response Time' => '< 3ms',
        'Touch Technology' => 'Capacitive Multi-touch',
        'Viewing Angle' => '178° (H/V)',
        'Operating Temperature' => '-40°C to +85°C',
        'Storage Temperature' => '-40°C to +90°C',
        'Vibration' => 'ISO 16750-3',
        'Shock' => 'ISO 16750-2',
        'EMC' => 'CISPR 25 / ISO 11452',
        'Automotive Grade' => 'AEC-Q100',
        'Sunlight Readable' => '100,000 lux',
        'Power Consumption' => '20W',
        'Weight' => '1.5 kg',
        'Dimensions' => '300 x 200 x 30 mm',
        'Warranty' => '5 years'
    ],
    'related_products' => [
        ['name' => 'Automotive ET-A7', 'description' => '7-inch automotive display', 'screen_size' => '7', 'resolution' => '1024x600', 'brightness' => '1200', 'url' => '/products/automotive-et-a7'],
        ['name' => 'Automotive ET-A10', 'description' => '10-inch automotive display', 'screen_size' => '10', 'resolution' => '1920x1080', 'brightness' => '1500', 'url' => '/products/automotive-et-a10'],
        ['name' => 'Automotive ET-A15', 'description' => '15-inch automotive display', 'screen_size' => '15', 'resolution' => '3840x2160', 'brightness' => '2000', 'url' => '/products/automotive-et-a15']
    ]
];
@endphp
@extends('pages.models.template')
EOL

cat > resources/views/pages/models/automotive-et-a15.blade.php << 'EOL'
@php
$model = [
    'name' => 'Automotive ET-A15',
    'description' => '15-inch automotive display for large infotainment systems',
    'category' => 'Automotive',
    'screen_size' => '15',
    'resolution' => '3840x2160',
    'brightness' => '2000',
    'response_time' => '< 3ms',
    'specifications' => [
        'Screen Size' => '15.6"',
        'Resolution' => '3840 x 2160 pixels (4K)',
        'Panel Type' => 'IPS TFT LCD',
        'Brightness' => '2000 nits',
        'Contrast Ratio' => '1000:1',
        'Response Time' => '< 3ms',
        'Touch Technology' => 'Capacitive Multi-touch',
        'Viewing Angle' => '178° (H/V)',
        'Operating Temperature' => '-40°C to +85°C',
        'Storage Temperature' => '-40°C to +90°C',
        'Vibration' => 'ISO 16750-3',
        'Shock' => 'ISO 16750-2',
        'EMC' => 'CISPR 25 / ISO 11452',
        'Automotive Grade' => 'AEC-Q100',
        'Sunlight Readable' => '100,000 lux',
        'Power Consumption' => '30W',
        'Weight' => '2.2 kg',
        'Dimensions' => '380 x 250 x 35 mm',
        'Warranty' => '5 years'
    ],
    'related_products' => [
        ['name' => 'Automotive ET-A7', 'description' => '7-inch automotive display', 'screen_size' => '7', 'resolution' => '1024x600', 'brightness' => '1200', 'url' => '/products/automotive-et-a7'],
        ['name' => 'Automotive ET-A10', 'description' => '10-inch automotive display', 'screen_size' => '10', 'resolution' => '1920x1080', 'brightness' => '1500', 'url' => '/products/automotive-et-a10'],
        ['name' => 'Automotive ET-A12', 'description' => '12-inch automotive display', 'screen_size' => '12', 'resolution' => '2560x1440', 'brightness' => '1800', 'url' => '/products/automotive-et-a12']
    ]
];
@endphp
@extends('pages.models.template')
EOL

echo "Automotive models created successfully!"
