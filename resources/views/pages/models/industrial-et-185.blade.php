@php
$model = [
    'name' => 'TLE-C185B1000-CT-HD',
    'description' => '18.5" Industrial Touch Monitor with Ultra High Brightness',
    'category' => 'Industrial',
    'screen_size' => '18.5',
    'resolution' => '1920x1080',
    'brightness' => '1000',
    'response_time' => '30ms',
    'images' => [
        '/images/products/TLE-C185.png'
    ],
    'specifications' => [
        'Case/Frame Color' => 'Black',
        'Display Type' => 'Active matrix TFT LCD, LED backlight',
        'Diagonal Dimension' => '18.5" diagonal',
        'Aspect Ratio' => '16:9',
        'Active Area Dimensions' => '408.5mm(H) x 229.0mm(V)',
        'Display Size' => '457mm(W) x 281.5mm(H), Thickness: 48.5mm',
        'Resolution' => '1920 x 1080 @ 60Hz',
        'Display Colors' => '16.7M',
        'Brightness (Standard)' => '1000 cd/m²',
        'Response Time (Standard)' => '30ms',
        'View Angle (from center)' => 'L/R: 85/85; U/D: 85/85 (Typ.) (CR≥10)',
        'Contrast Ratio (Standard)' => '1200:1 (Typ.)',
        'Input Video Formats' => 'Analog VGA and digital DVI, HDMI',
        'Sweep Frequency' => 'Horizontal: 31.5-60.2kHz; vertical: 56.3-75kHz',
        'Touch Technology' => 'Projected capacitive',
        'Touch Chip' => 'weida',
        'Touch Points' => '1-10',
        'Touch Supply Voltage' => '5V',
        'Touch Interface' => 'USB',
        'Touch Support System' => 'Windows, Android, Linux',
        'Power' => 'External DC, input voltage DC: 12V',
        'Power Consumption (Standard)' => 'Display only: 25W(Typ.)',
        'Operating Temperature' => '-30°C~80°C',
        'Storage Temperature' => '-30°C~80°C',
        'Operating Humidity' => '20% to 80% (no condensation)',
        'Storage Humidity' => '10% to 90% (non-condensing)',
        'MTBF' => '50,000 hours',
        'Weight (Approx.)' => 'Net weight: 4.4 kg(Typ.); Shipping: 6.2 kg (reference)',
        'Warranty' => '1 year',
        'OSD' => 'Digital OSD',
        'User Controls' => 'OSD Button: Menu, Up, Down, Select, Power',
        'OSD Functions' => 'Contrast, Brightness, Horizontal / Vertical Bits Clock, phase, call default, language (English, German, Spanish, Japanese, French)',
        'OSD Remote Accessories' => 'Optional controls (front): Menu, Up, Down, Select, Power',
        'Mounting Options' => '100mm or 75mm VESA mounting, open bracket mounting',
        'Water and Dust Protection' => 'IP65(front)/IK08(front)',
        'FAN' => '2',
        'Agency Approvals' => 'FCC, CE, CB, China RoHS CQC'
    ],
    'related_products' => [
        ['name' => 'TLE-C101', 'description' => '10.1" Industrial All-in-One PC', 'screen_size' => '10.1', 'resolution' => '1280x800', 'brightness' => '330', 'url' => '/products/industrial-et-7'],
        ['name' => 'TLE-C150-CT-HD', 'description' => '15.0" Industrial Touch Monitor', 'screen_size' => '15.0', 'resolution' => '1024x768', 'brightness' => '350', 'url' => '/products/industrial-et-15'],
        ['name' => 'TLE-C170-CT-HD', 'description' => '17.0" Industrial Touch Monitor', 'screen_size' => '17.0', 'resolution' => '1280x1024', 'brightness' => '250', 'url' => '/products/industrial-et-17']
    ]
];
@endphp

@extends('pages.models.template')
