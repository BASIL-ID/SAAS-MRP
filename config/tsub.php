<?php

return [
    'support'   => [
        'scopes'    => ['management', 'tfin', 'twh', 'tsale', 'tproc', 'tcust', 'tmf'],
    ],
    'scopes'        => [
        'tsub.subscription.professional'    => 'Handle langganan pro',
        'tsub.subscription.exclusive'       => 'Handle langganan x',
        'tsub.bill.paid'                    => 'Melihat laporan tagihan lunas',
        'tsub.bill.unpaid'                  => 'Melihat laporan tagihan pending',
        'tsub.subscription.paid'            => 'Pelunasan tagihan manual',
        'tsub.setting.package'              => 'Mengatur paket langganan',
    ],
    'logo'          => 'https://basil.id/skin/assets/images/logo/logo-dark.png',
    'name'          => 'PT THUNDER LABS INDONESIA',
    'url'           => 'https://thunderlab.id',
    'email'         => 'hello@thunderlab.id',
    'whatsapp'      => '+62.896.7200.7400',
    'business'      => 'thunderlab',
    'address'       => 'VERNON BUILDING, Jln. Letjen Sutoyo No. 102A, Kota Malang, Jawa Timur, Indonesia 65141',
    'mode'          => 'local',
    // 'mode'          => 'tenant',
    'glossary'      => [
        'package'   => [
            'unpublished'   => 'Tidak ditampilkan',
            'published'     => 'Ditampilkan',
        ],
        'subscription'  => [
            'actived'    => 'Aktif',
            'inactived'  => 'Tidak aktif',
        ],
        'period'        => [
            'daily'     => 'Hari',
            'monthly'   => 'Bulan',
            'yearly'    => 'Tahun',
        ],
        'domain'        => [
            'management'=> 'Manajemen', 
            'tacl'      => 'Akses', 
            'twh'       => 'Persediaan', 
            'tmf'       => 'Produksi', 
            'tsale'     => 'Penjualan', 
            'tcust'     => 'Pelanggan',
            'tproc'     => 'Pembelian', 
            'tfin'      => 'Keuangan', 
            'tsub'      => 'Langganan',
        ],
    ],
    'opsi'              => [
        'membership'    => [
            'professional'  => 'Pro',
            'exclusive'     => 'X',
        ],
        'period'    => [
            'daily'     => 'Harian',
            'monthly'   => 'Bulanan',
            'yearly'    => 'Tahunan',
        ],
        'flag'      => [
            'feature'   => 'Fitur',
            'rent'      => 'Sewa',
            'support'   => 'Layanan Support',
            // 'penalty'   => 'Denda',
        ],
        'client'    => [
            //BASIL, TENANT, MANAGEMENT, MANAGERS, WEB, 01
            'STMDW01'       => 'Web Dashboard Management',
            //BASIL, TENANT, OPERATIONAL, GUDANG, WEB, 01
            'STOGW01'       => 'Web Tools Gudang',
            //BASIL, TENANT, OPERATIONAL, SALE, DESKTOP WINDOWS, 01
            'STOSW01'       => 'Windows Apps POS',
            //BASIL, TENANT, MANAGEMENT, TEAM, ANDROID, 01
            'STMTA01'       => 'Android Apps Team',
        ],
    ],
    'color'         => [
        'package'           => [
            'unpublished'   => 'warning',
            'published'     => 'primary',
            'archived'      => 'danger',
        ],
        'subscription'      => [
            'actived'       => 'primary',
            'inactived'     => 'danger',
        ],
    ],
    'setting'       => [
        'due_days'  => 7,
        'per_page'  => 80
    ],
    'title'         => [
        'bill'      => ['unpaid' => 'Tagihan Pending', 'paid' => 'Tagihan Lunas'],
    ],
];
