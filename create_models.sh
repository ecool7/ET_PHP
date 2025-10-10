#!/bin/bash

# Industrial models
cat > resources/views/pages/models/industrial-et-10.blade.php << 'EOL'
@php
$model = [
    'name' => 'Industrial ET-10',
    'description' => '10-inch rugged industrial display with enhanced brightness',
    'category' => 'Industrial',
    'screen_size' => '10',
    'resolution' => '1024x600',
    'brightness' => '500',
    'response_time' => '< 5ms',
    'specifications' => [
        'Screen Size' => '10.1"',
        'Resolution' => '1024 x 600 pixels',
        'Panel Type' => 'TFT LCD',
        'Brightness' => '500 nits',
        'Contrast Ratio' => '1000:1',
        'Response Time' => '< 5ms',
        'Viewing Angle' => '178° (H/V)',
        'Touch Technology' => 'Resistive',
        'Operating Temperature' => '-20°C to +70°C',
        'Storage Temperature' => '-30°C to +80°C',
        'Humidity' => '10% - 90% RH',
        'Protection Rating' => 'IP65',
        'Vibration' => 'MIL-STD-810G',
        'Shock Resistance' => '50G / 11ms',
        'EMI/RFI' => 'FCC Class A',
        'Certifications' => 'CE / FCC / UL',
        'Power Consumption' => '8W',
        'Weight' => '1.2 kg',
        'Dimensions' => '250 x 180 x 50 mm'
    ],
    'related_products' => [
        ['name' => 'Industrial ET-7', 'description' => '7-inch industrial display', 'screen_size' => '7', 'resolution' => '800x480', 'brightness' => '400', 'url' => '/products/industrial-et-7'],
        ['name' => 'Industrial ET-15', 'description' => '15-inch industrial display', 'screen_size' => '15', 'resolution' => '1366x768', 'brightness' => '600', 'url' => '/products/industrial-et-15'],
        ['name' => 'Industrial ET-21', 'description' => '21-inch industrial display', 'screen_size' => '21', 'resolution' => '1920x1080', 'brightness' => '800', 'url' => '/products/industrial-et-21']
    ]
];
@endphp
@extends('pages.models.template')
EOL

cat > resources/views/pages/models/industrial-et-15.blade.php << 'EOL'
@php
$model = [
    'name' => 'Industrial ET-15',
    'description' => '15-inch rugged industrial display for control systems',
    'category' => 'Industrial',
    'screen_size' => '15',
    'resolution' => '1366x768',
    'brightness' => '600',
    'response_time' => '< 5ms',
    'specifications' => [
        'Screen Size' => '15.6"',
        'Resolution' => '1366 x 768 pixels',
        'Panel Type' => 'IPS TFT LCD',
        'Brightness' => '600 nits',
        'Contrast Ratio' => '1000:1',
        'Response Time' => '< 5ms',
        'Viewing Angle' => '178° (H/V)',
        'Touch Technology' => 'Capacitive',
        'Operating Temperature' => '-20°C to +70°C',
        'Storage Temperature' => '-30°C to +80°C',
        'Humidity' => '10% - 90% RH',
        'Protection Rating' => 'IP65',
        'Vibration' => 'MIL-STD-810G',
        'Shock Resistance' => '50G / 11ms',
        'EMI/RFI' => 'FCC Class A',
        'Certifications' => 'CE / FCC / UL',
        'Power Consumption' => '12W',
        'Weight' => '1.8 kg',
        'Dimensions' => '380 x 250 x 55 mm'
    ],
    'related_products' => [
        ['name' => 'Industrial ET-7', 'description' => '7-inch industrial display', 'screen_size' => '7', 'resolution' => '800x480', 'brightness' => '400', 'url' => '/products/industrial-et-7'],
        ['name' => 'Industrial ET-10', 'description' => '10-inch industrial display', 'screen_size' => '10', 'resolution' => '1024x600', 'brightness' => '500', 'url' => '/products/industrial-et-10'],
        ['name' => 'Industrial ET-21', 'description' => '21-inch industrial display', 'screen_size' => '21', 'resolution' => '1920x1080', 'brightness' => '800', 'url' => '/products/industrial-et-21']
    ]
];
@endphp
@extends('pages.models.template')
EOL

cat > resources/views/pages/models/industrial-et-21.blade.php << 'EOL'
@php
$model = [
    'name' => 'Industrial ET-21',
    'description' => '21-inch rugged industrial display for large control panels',
    'category' => 'Industrial',
    'screen_size' => '21',
    'resolution' => '1920x1080',
    'brightness' => '800',
    'response_time' => '< 5ms',
    'specifications' => [
        'Screen Size' => '21.5"',
        'Resolution' => '1920 x 1080 pixels',
        'Panel Type' => 'IPS TFT LCD',
        'Brightness' => '800 nits',
        'Contrast Ratio' => '1000:1',
        'Response Time' => '< 5ms',
        'Viewing Angle' => '178° (H/V)',
        'Touch Technology' => 'Capacitive Multi-touch',
        'Operating Temperature' => '-20°C to +70°C',
        'Storage Temperature' => '-30°C to +80°C',
        'Humidity' => '10% - 90% RH',
        'Protection Rating' => 'IP65',
        'Vibration' => 'MIL-STD-810G',
        'Shock Resistance' => '50G / 11ms',
        'EMI/RFI' => 'FCC Class A',
        'Certifications' => 'CE / FCC / UL',
        'Power Consumption' => '25W',
        'Weight' => '3.2 kg',
        'Dimensions' => '520 x 320 x 65 mm'
    ],
    'related_products' => [
        ['name' => 'Industrial ET-7', 'description' => '7-inch industrial display', 'screen_size' => '7', 'resolution' => '800x480', 'brightness' => '400', 'url' => '/products/industrial-et-7'],
        ['name' => 'Industrial ET-10', 'description' => '10-inch industrial display', 'screen_size' => '10', 'resolution' => '1024x600', 'brightness' => '500', 'url' => '/products/industrial-et-10'],
        ['name' => 'Industrial ET-15', 'description' => '15-inch industrial display', 'screen_size' => '15', 'resolution' => '1366x768', 'brightness' => '600', 'url' => '/products/industrial-et-15']
    ]
];
@endphp
@extends('pages.models.template')
EOL

echo "Industrial models created successfully!"
