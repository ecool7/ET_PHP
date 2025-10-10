#!/bin/bash

# Medical models
cat > resources/views/pages/models/medical-et-m10.blade.php << 'EOL'
@php
$model = [
    'name' => 'Medical ET-M10',
    'description' => '10-inch medical-grade display for patient monitoring',
    'category' => 'Medical',
    'screen_size' => '10',
    'resolution' => '1366x768',
    'brightness' => '800',
    'response_time' => '< 3ms',
    'specifications' => [
        'Screen Size' => '10.1"',
        'Resolution' => '1366 x 768 pixels',
        'Panel Type' => 'IPS Medical Grade LCD',
        'Brightness' => '800 nits',
        'Contrast Ratio' => '10000:1',
        'Response Time' => '< 3ms',
        'Color Gamut' => '100% sRGB',
        'Calibration' => 'DICOM Part 14 GSDF',
        'Operating Temperature' => '15°C to 35°C',
        'Storage Temperature' => '0°C to 50°C',
        'Humidity' => '30% - 80% RH',
        'FDA Approval' => 'Class II Medical Device',
        'CE Marking' => 'Medical Device Directive',
        'DICOM Compliance' => 'Part 14 GSDF',
        'ISO 13485' => 'Quality Management',
        'IEC 60601-1' => 'Medical Safety',
        'Power Consumption' => '15W',
        'Weight' => '1.5 kg',
        'Dimensions' => '250 x 180 x 45 mm',
        'Warranty' => '3 years'
    ],
    'related_products' => [
        ['name' => 'Medical ET-M15', 'description' => '15-inch medical display', 'screen_size' => '15', 'resolution' => '1920x1080', 'brightness' => '1000', 'url' => '/products/medical-et-m15'],
        ['name' => 'Medical ET-M21', 'description' => '21-inch medical display', 'screen_size' => '21', 'resolution' => '2560x1440', 'brightness' => '1200', 'url' => '/products/medical-et-m21'],
        ['name' => 'Medical ET-M27', 'description' => '27-inch medical display', 'screen_size' => '27', 'resolution' => '3840x2160', 'brightness' => '1500', 'url' => '/products/medical-et-m27']
    ]
];
@endphp
@extends('pages.models.template')
EOL

cat > resources/views/pages/models/medical-et-m21.blade.php << 'EOL'
@php
$model = [
    'name' => 'Medical ET-M21',
    'description' => '21-inch medical-grade display for diagnostic imaging',
    'category' => 'Medical',
    'screen_size' => '21',
    'resolution' => '2560x1440',
    'brightness' => '1200',
    'response_time' => '< 3ms',
    'specifications' => [
        'Screen Size' => '21.5"',
        'Resolution' => '2560 x 1440 pixels',
        'Panel Type' => 'IPS Medical Grade LCD',
        'Brightness' => '1200 nits',
        'Contrast Ratio' => '10000:1',
        'Response Time' => '< 3ms',
        'Color Gamut' => '100% sRGB / DCI-P3',
        'Calibration' => 'DICOM Part 14 GSDF',
        'Operating Temperature' => '15°C to 35°C',
        'Storage Temperature' => '0°C to 50°C',
        'Humidity' => '30% - 80% RH',
        'FDA Approval' => 'Class II Medical Device',
        'CE Marking' => 'Medical Device Directive',
        'DICOM Compliance' => 'Part 14 GSDF',
        'ISO 13485' => 'Quality Management',
        'IEC 60601-1' => 'Medical Safety',
        'Power Consumption' => '35W',
        'Weight' => '4.5 kg',
        'Dimensions' => '520 x 320 x 70 mm',
        'Warranty' => '3 years'
    ],
    'related_products' => [
        ['name' => 'Medical ET-M10', 'description' => '10-inch medical display', 'screen_size' => '10', 'resolution' => '1366x768', 'brightness' => '800', 'url' => '/products/medical-et-m10'],
        ['name' => 'Medical ET-M15', 'description' => '15-inch medical display', 'screen_size' => '15', 'resolution' => '1920x1080', 'brightness' => '1000', 'url' => '/products/medical-et-m15'],
        ['name' => 'Medical ET-M27', 'description' => '27-inch medical display', 'screen_size' => '27', 'resolution' => '3840x2160', 'brightness' => '1500', 'url' => '/products/medical-et-m27']
    ]
];
@endphp
@extends('pages.models.template')
EOL

cat > resources/views/pages/models/medical-et-m27.blade.php << 'EOL'
@php
$model = [
    'name' => 'Medical ET-M27',
    'description' => '27-inch medical-grade display for advanced diagnostic imaging',
    'category' => 'Medical',
    'screen_size' => '27',
    'resolution' => '3840x2160',
    'brightness' => '1500',
    'response_time' => '< 3ms',
    'specifications' => [
        'Screen Size' => '27"',
        'Resolution' => '3840 x 2160 pixels (4K)',
        'Panel Type' => 'IPS Medical Grade LCD',
        'Brightness' => '1500 nits',
        'Contrast Ratio' => '10000:1',
        'Response Time' => '< 3ms',
        'Color Gamut' => '100% sRGB / DCI-P3',
        'Calibration' => 'DICOM Part 14 GSDF',
        'Operating Temperature' => '15°C to 35°C',
        'Storage Temperature' => '0°C to 50°C',
        'Humidity' => '30% - 80% RH',
        'FDA Approval' => 'Class II Medical Device',
        'CE Marking' => 'Medical Device Directive',
        'DICOM Compliance' => 'Part 14 GSDF',
        'ISO 13485' => 'Quality Management',
        'IEC 60601-1' => 'Medical Safety',
        'Power Consumption' => '50W',
        'Weight' => '6.8 kg',
        'Dimensions' => '650 x 400 x 80 mm',
        'Warranty' => '3 years'
    ],
    'related_products' => [
        ['name' => 'Medical ET-M10', 'description' => '10-inch medical display', 'screen_size' => '10', 'resolution' => '1366x768', 'brightness' => '800', 'url' => '/products/medical-et-m10'],
        ['name' => 'Medical ET-M15', 'description' => '15-inch medical display', 'screen_size' => '15', 'resolution' => '1920x1080', 'brightness' => '1000', 'url' => '/products/medical-et-m15'],
        ['name' => 'Medical ET-M21', 'description' => '21-inch medical display', 'screen_size' => '21', 'resolution' => '2560x1440', 'brightness' => '1200', 'url' => '/products/medical-et-m21']
    ]
];
@endphp
@extends('pages.models.template')
EOL

cat > resources/views/pages/models/medical-et-m32.blade.php << 'EOL'
@php
$model = [
    'name' => 'Medical ET-M32',
    'description' => '32-inch medical-grade display for large diagnostic workstations',
    'category' => 'Medical',
    'screen_size' => '32',
    'resolution' => '3840x2160',
    'brightness' => '2000',
    'response_time' => '< 3ms',
    'specifications' => [
        'Screen Size' => '32"',
        'Resolution' => '3840 x 2160 pixels (4K)',
        'Panel Type' => 'IPS Medical Grade LCD',
        'Brightness' => '2000 nits',
        'Contrast Ratio' => '10000:1',
        'Response Time' => '< 3ms',
        'Color Gamut' => '100% sRGB / DCI-P3',
        'Calibration' => 'DICOM Part 14 GSDF',
        'Operating Temperature' => '15°C to 35°C',
        'Storage Temperature' => '0°C to 50°C',
        'Humidity' => '30% - 80% RH',
        'FDA Approval' => 'Class II Medical Device',
        'CE Marking' => 'Medical Device Directive',
        'DICOM Compliance' => 'Part 14 GSDF',
        'ISO 13485' => 'Quality Management',
        'IEC 60601-1' => 'Medical Safety',
        'Power Consumption' => '80W',
        'Weight' => '12.5 kg',
        'Dimensions' => '750 x 450 x 100 mm',
        'Warranty' => '3 years'
    ],
    'related_products' => [
        ['name' => 'Medical ET-M15', 'description' => '15-inch medical display', 'screen_size' => '15', 'resolution' => '1920x1080', 'brightness' => '1000', 'url' => '/products/medical-et-m15'],
        ['name' => 'Medical ET-M21', 'description' => '21-inch medical display', 'screen_size' => '21', 'resolution' => '2560x1440', 'brightness' => '1200', 'url' => '/products/medical-et-m21'],
        ['name' => 'Medical ET-M27', 'description' => '27-inch medical display', 'screen_size' => '27', 'resolution' => '3840x2160', 'brightness' => '1500', 'url' => '/products/medical-et-m27']
    ]
];
@endphp
@extends('pages.models.template')
EOL

echo "Medical models created successfully!"
