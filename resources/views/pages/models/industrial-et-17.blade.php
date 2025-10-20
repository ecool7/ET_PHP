@php
$model = [
    'name' => 'TLE-C170-CT-HD',
    'description' => '17.0" Industrial Touch Monitor with High Resolution',
    'category' => 'Industrial',
    'screen_size' => '17.0',
    'resolution' => '1280x1024',
    'brightness' => '250',
    'response_time' => '5ms',
    'images' => [
        '/images/products/TLE-C170-CT-HD.png'
    ],
    'specifications' => [
        'Case/Frame Color' => 'Black',
        'Display Type' => 'Active matrix TFT LCD, LED backlight',
        'Diagonal Dimension' => '17.0 inches',
        'Aspect Ratio' => '5:4',
        'Active Area Dimensions' => '337.92mm (Horizontal) x 270.34mm (Vertical)',
        'Display Size' => '385mm (Width) x 317mm (Height), Thickness: 47mm',
        'Resolution' => '1280 x 1024 @ 60Hz',
        'Display Colors' => '16.7 Million',
        'Brightness (Standard)' => '250 cd/m²',
        'Response Time (Standard)' => '5ms',
        'View Angle (from center)' => 'Left/Right: 85/85; Up/Down: 80/80 (Typical) (Contrast Ratio ≥ 10)',
        'Contrast Ratio (Standard)' => '1000:1 (Typical)',
        'Input Video Formats' => 'Analog VGA and digital DVI (optional HDMI, DisplayPort)',
        'Input Video Signal Connector' => 'Female head DE-15 connector, female head DVI-D, Dual Link connector, female head HDMI connector',
        'Sweep Frequency' => 'Horizontal: 31.5 - 60.2 kHz; Vertical: 56.3 - 75 Hz',
        'Touch Technology' => 'Projected capacitive',
        'Touch Chip' => 'weida, eeti, ilitek',
        'Touch Points' => '1-10',
        'Touch Supply Voltage' => '5V',
        'Touch Interface' => 'USB',
        'Touch Support System' => 'Windows, Android, Linux',
        'Power' => 'External DC, input voltage DC: 12V',
        'Power Consumption (Standard)' => 'Display only: 13.5W (Typical)',
        'Operating Temperature' => '0°C to 60°C',
        'Storage Temperature' => '-20°C to 60°C',
        'Operating Humidity' => '20% to 80% (no condensation)',
        'Storage Humidity' => '10% to 90% (non-condensing)',
        'MTBF' => '50,000 hours',
        'Weight (Approx.)' => 'Net weight: 4 kg (Typical); Shipping: 5.5 kg (reference)',
        'Warranty' => '1 year',
        'OSD' => 'Digital OSD',
        'User Controls' => 'OSD Button: Menu, Up, Down, Select, Power',
        'OSD Functions' => 'Contrast, Brightness, Horizontal / Vertical Bits Clock, phase, call default, language (English, German, Spanish, Japanese, French)',
        'OSD Remote Accessories' => 'Optional controls (front): Menu, Up, Down, Select, Power',
        'Mounting Options' => '100mm or 75mm VESA mounting, open bracket mounting',
        'Water and Dust Protection' => 'IP65 (front) / IK08 (front)',
        'Surface Treatment' => 'AG AR AF (Optional)',
        'Agency Approvals' => 'UL, cUL (Recognized), FCC, CE, CB, China RoHS CQC'
    ],
    'related_products' => [
        ['name' => 'TLE-C101', 'description' => '10.1" Industrial All-in-One PC', 'screen_size' => '10.1', 'resolution' => '1280x800', 'brightness' => '330', 'url' => '/products/industrial-et-7'],
        ['name' => 'TLE-C150-CT-HD', 'description' => '15.0" Industrial Touch Monitor', 'screen_size' => '15.0', 'resolution' => '1024x768', 'brightness' => '350', 'url' => '/products/industrial-et-15'],
        ['name' => 'TLE-C156-CT-HD', 'description' => '15.6" Industrial Touch Monitor', 'screen_size' => '15.6', 'resolution' => '1920x1080', 'brightness' => '300', 'url' => '/products/industrial-et-21']
    ]
];
@endphp

@extends('pages.models.template')
