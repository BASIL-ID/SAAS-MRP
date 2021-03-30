<?php

return [
    'scopes'    => [
        'tproc.transaction.pembelian' => 'Handle transaksi pembelian',
        'tproc.transaction.konsinyasi'=> 'Handle transaksi konsinyasi',
        'tproc.laporan.catalog'       => 'Melihat laporan trend produk',
        'tproc.laporan.customer'      => 'Melihat laporan pelanggan',
        'tproc.laporan.payment'       => 'Melihat laporan settlement penjualan',
        'tproc.catalog.setting'       => 'Mengatur produk',
        'tproc.catalog.listing'       => 'Mengatur catalog',
        'tproc.transaction.voided'    => 'Approval void transaksi',
    ],
    'logo'          => 'https://thunderlab.id/storage/app/uploads/public/5f7/ae8/123/5f7ae81237a56599536208.png',
    'name'          => 'THUNDERLAB',
    'url'           => 'https://thunderlab.id',
    'email'         => 'hello@thunderlab.id',
    'whatsapp'      => '+62.895.8100.00500',
    'address'       => 'VERNON BUILDING, Jln. Letjen Sutoyo No. 102A, Kota Malang, Jawa Timur, Indonesia 65145',
    // 'mode'          => 'local',
    'mode'          => 'tenant',
    'glossary'      => [
        'catalog'   => [
            'unpublished'   => 'Tidak ditampilkan',
            'published'     => 'Ditampilkan',
        ],
        'transaction'  => [
            'opened'    => 'Inbox',
            'processed' => 'Dalam Proses',
            'closed'    => 'Selesai',
            'voided'    => 'Dibatalkan',
        ],
    ],
    'opsi'  => [
        'period'    => [
            'daily'     => 'Harian',
            'monthly'   => 'Bulanan',
            'yearly'    => 'Tahunan',
        ],
        'day'       => [
            '*'         => 'Hari',
            'sunday'    => 'Minggu',
            'monday'    => 'Senin',
            'tuesday'   => 'Selasa',
            'wednesday' => 'Rabu',
            'thursday'  => 'Kamis',
            'friday'    => 'Jumat',
            'saturday'  => 'Sabtu',
        ],
        'mode'       => [
            'pos'           => 'POS',
        ],
        'branch'            => [],
        'flag'              => [
            'service'       => 'Jasa',
            'catalog'       => 'Katalog',
            'asset'         => 'Aset',
            // 'promo_catalog'     => 'Promo Produk',
            // 'promo_transaction' => 'Promo Transaksi',
            // 'deposit'           => 'Deposit',
            // 'tax'               => 'Pajak',
        ],
        'tax'               => [
            // 'ppn'           => 10,
            // 'pb1'           => 10,
        ],
        'service'           => [
            // 'service'       => 10,
        ],
        'can_print'         => [
            0               => 'Bermasalah',
            1               => 'Tidak Bermasalah',
        ],
        'method'            => [[
            'method'        => 'cash',
            'min_amount'    => 0,
        ],[
            'method'        => 'transfer',
            'min_amount'    => 0,
        ]],
        'item_model'        => 'Lacunose\\Warehouse\\Models\\Item',
        'item_url'          => '/api/warehouse/item/submitted',
        'catalog_url'       => '/api/warehouse/item/submitted',
    ],
    'color' => [
        'catalog'           => [
            'unpublished'   => 'warning',
            'published'     => 'primary',
            'archived'      => 'danger',
        ],
        'transaction'  => [
            'opened'    => 'warning',
            'processed' => 'warning',
            'closed'    => 'primary',
            'voided'    => 'danger',
        ],
    ],
    'default'       => [
        'order'     => ['warehouse' => 'nakoa', 'is_printed' => true],
    ],
    'setting'       => [
        'per_page'  => 80,
    ],
    'title'         => [
        'report'    => ['catalog' => 'Trend Produk', 'payment' => 'Settlement Penjualan', 'customer' => 'Pelanggan'],
    ],
];
