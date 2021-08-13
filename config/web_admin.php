<?php

return [
    'modules' => [
        'renungan' => [
            'id' => 1,
            'name' => 'Renungan'
        ],
        'jadwal' => [
            'id' => 2,
            'name' => 'Jadwal'
        ],
        'berita' => [
            'id' => 3,
            'name' => 'Berita'
        ],
        'pengaturan' => [
            'id' => 4,
            'name' => 'Pengaturan'
        ]
        ],
    'roles' => [
        'admin' => [
            'id' => 1,
            'name' => 'Administator',
            'is_admin' => 1
        ],
        'editor' => [
            'id' => 2,
            'name' => 'Editor',
            'is_admin' => 0
        ],
        'publisher' => [
            'id' => 3,
            'name' => 'Publisher',
            'is_admin' => 0
        ]
    ]
];