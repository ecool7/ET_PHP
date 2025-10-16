@php
$model = [
    'name' => 'TLE-C101',
    'description' => '10.1" Industrial All-in-One PC with Intel Bay Trail-d chipset',
    'category' => 'Industrial',
    'screen_size' => '10.1',
    'resolution' => '1280x800',
    'brightness' => '330',
    'response_time' => '25ms',
    'image' => '/images/products/tle-c101.jpg',
    'specifications' => [
        'Case/Frame Color' => 'Black',
        'Machine Dimensions' => '263.8mm(W) x 178.8mm(H), Thickness: 45mm',
        'Display Type' => '10.1" Diagonal, Ratio 16:10, Active matrix TFT LCD, LED backlight',
        'Resolution' => '1280 x 800 @ 60Hz',
        'Active Area Dimensions' => '216.96mm(H) x 135.6mm(V)',
        'Display Colors' => '16.7M',
        'Brightness (Standard)' => '330 cd/m²',
        'Response Time (Standard)' => '25ms',
        'View Angle (from center)' => 'Horizontal (left/right): ±80° or total 160°; Vertical (up/down): ±80° or total 160°',
        'Contrast Ratio (Standard)' => '600:1 (Typ.)',
        'Touch Technology' => 'Projected capacitive',
        'Touch Chip' => 'weida, eeti, ilitek',
        'Touch Points' => '1-10',
        'Touch Supply Voltage' => '5V',
        'Touch Interface' => 'USB',
        'Touch Support System' => 'Windows, Android, Linux',
        'Motherboard' => 'Intel Bay Trail-d chipset with Celeron 2117U@1.8GHz; Intel Core series with Intel Core I3-U, Intel Core I5-U, Intel Core I7-U',
        'Graphics' => 'Onboard Intel HD graphics',
        'Sound Card' => 'Onboard Realtek ALC662HD audio decoding',
        'RAM' => 'Optional 2GB, 4GB',
        'SSD' => '32G, 64G, 128G, 256G',
        'HDD' => 'Optional addition of 500G, 1T HDD',
        'WiFi' => 'Built-in 802.11b/g/n wireless, external two 3DB omnidirectional antenna',
        'Speakers' => 'Built-in 2*3W speakers',
        'Extra Video Output' => '1 VGA: 1 HDMI',
        'USB Interface' => '4 USB TYPE-A',
        'Network Card' => '1 road onboard Realtek 8111e Gigabit',
        'Audio Interface' => '1*3.5mm Audio input',
        'RS232 Interface' => '4*RS232 (standard) interfaces',
        'Power' => 'External DC, input voltage DC: 12V',
        'Power Consumption (Standard)' => 'Depend on Motherboard and the minimum is 25W',
        'Supported OS' => 'Support Windows OS (suggest Windows 7 up); Linux; Android x86',
        'Operating Temperature' => '0°C to 60°C',
        'Storage Temperature' => '-20°C to 60°C',
        'Operating Humidity' => '20% to 80% (non-condensing)',
        'Storage Humidity' => '5% to 95% (non-condensing)',
        'Warranty' => '1 year',
        'Weight (Approx.)' => 'Net weight: 2.0 kg (Typ.); Shipping: 3.5 kg (reference)',
        'Mounting Options' => '100mm or 75mm VESA mounting, open bracket mounting',
        'Water and Dust Protection' => 'IP65(front)/IK08(front)',
        'Surface Treatment' => 'AG AR AF (Optional)',
        'Agency Approvals' => 'UL, cUL (Recognized), FCC, CE, CB, China RoHS CQC'
    ],
    'related_products' => [
        [
            'name' => 'Industrial ET-10',
            'description' => '10-inch industrial display',
            'screen_size' => '10',
            'resolution' => '1024x600',
            'brightness' => '500',
            'url' => '/products/industrial-et-10'
        ],
        [
            'name' => 'TLE-C150-CT-HD',
            'description' => '15.0" Industrial Touch Monitor',
            'screen_size' => '15.0',
            'resolution' => '1024x768',
            'brightness' => '350',
            'url' => '/products/industrial-et-15'
        ],
        [
            'name' => 'TLE-C156-CT-HD',
            'description' => '15.6" Industrial Touch Monitor',
            'screen_size' => '15.6',
            'resolution' => '1920x1080',
            'brightness' => '300',
            'url' => '/products/industrial-et-21'
        ]
    ]
];
@endphp

@extends('pages.models.template')
