<?php

return [
    'scopes'    => [
        'tmf.checker.penjualan'     => 'Handle pesanan untuk penjualan',
        'tmf.checker.persediaan'    => 'Handle pesanan untuk persediaan',
        'tmf.checker.percobaan'     => 'Handle pesanan untuk percobaan',
        'tmf.report.usage'          => 'Melihat laporan penggunaan bahan',
        'tmf.report.correction'     => 'Melihat laporan koreksi penggunaan bahan',
        'tmf.report.processed'      => 'Melihat laporan performa pembuatan',
        'tmf.good.setting'          => 'Mengatur Menu',
        'tmf.resource.setting'      => 'Mengatur Bahan/Tenaga',
        'tmf.resource.listing'      => 'Mengatur Bahan/Tenaga Station',
        'tmf.checker.voided'        => 'Approval void Checker',
    ],
    'logo'      => 'https://thunderlab.id/storage/app/uploads/public/5f7/ae8/123/5f7ae81237a56599536208.png',
    'name'      => 'THUNDERLAB',
    'url'       => 'https://thunderlab.id',
    'email'     => 'hello@thunderlab.id',
    'whatsapp'  => '+62.895.8100.00500',
    'address'   => 'VERNON BUILDING, Jln. Letjen Sutoyo No. 102A, Kota Malang, Jawa Timur, Indonesia 65145',
    'glossary'  => [
        'good'      => [
            'unpublished'   => 'Tidak ditampilkan',
            'published'     => 'Ditampilkan',
        ],
        'resource'  => [
            'unpublished'   => 'Tidak ditampilkan',
            'published'     => 'Ditampilkan',
        ],
        'checker'   => [
            'requested'     => 'Inbox',
            'processed'     => 'Dalam Proses',
            'delivered'     => 'Selesai',
            'voided'        => 'Dibatalkan',
        ],
    ],
    'opsi'      => [
        'period'        => [
            'daily'     => 'Harian',
            'monthly'   => 'Bulanan',
            'yearly'    => 'Tahunan',
        ],
        'day'           => [
            '*'         => 'Hari',
            'sunday'    => 'Minggu',
            'monday'    => 'Senin',
            'tuesday'   => 'Selasa',
            'wednesday' => 'Rabu',
            'thursday'  => 'Kamis',
            'friday'    => 'Jumat',
            'saturday'  => 'Sabtu',
        ],
        'type'          => [
            'ingridient'    => 'Bahan',
            'package'       => 'Kemasan',
            'labor'         => 'Tenaga',
            'item'          => 'Stok',
        ],
        'station'           => [],
        'item_url'          => '/api/warehouse/item/submitted',
        'resource_url'      => '/api/manufacture/resource/submitted',
        'good_url'          => '/api/manufacture/good/submitted',
    ],
    'color' => [
        'good'              => [
            'unpublished'   => 'warning',
            'published'     => 'primary',
            'archived'      => 'danger',
        ],
        'resource'          => [
            'unpublished'   => 'warning',
            'published'     => 'primary',
            'archived'      => 'danger',
        ],
        'checker'           => [
            'requested'     => 'warning',
            'processed'     => 'warning',
            'delivered'     => 'primary',
            'voided'        => 'danger',
        ],
    ],
    'default'       => [
        'checker'   => ['factory' => 'nakoa', 'is_printed' => true],
    ],
    'setting'       => [
        'per_page'  => 80,
    ],
    'title'         => [
        'report'    => ['station' => 'Performa Station', 'usage' => 'Penggunaan Bahan', 'correction' => 'Koreksi Penggunaan Bahan'],
    ],
];
