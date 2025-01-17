<?php

return [
	'favicon'		=> 'https://basil.id/favicon.png',
	'logo'			=> 'https://basil.id/logo-basil.png',
	'logo-invert'	=> 'https://basil.id/logo-basil-white.png',
	'logo-black'    => 'https://basil.id/logo-basil-block.png',
	'name'			=> 'BASIL.ID by THUNDERLAB',
	'url'			=> 'https://basil.id',
	'email'			=> 'hello@basil.id',
	'whatsapp'		=> '+62.896.7200.7400',
	'address'		=> 'VERNON BUILDING, Jln. Letjen Sutoyo No. 102A, Kota Malang, Jawa Timur, Indonesia 65145',
	'db'			=> [
		'tacl' 		=> 'system', 
		'tsub' 		=> 'system',
		'tcust'		=> 'tenant',
		'tfin'		=> 'tenant',
		'tmf'		=> 'tenant',
		'tproc'		=> 'tenant',
		'tsale'		=> 'tenant',
		'twh'		=> 'tenant',
		'tswirl'	=> 'tenant',
	],
	'storage'		=> [
		'tacl' 		=> 'local', 
		'tsub' 		=> 'local',
		'tcust'		=> 'tenant',
		'tfin'		=> 'tenant',
		'tmf'		=> 'tenant',
		'tproc'		=> 'tenant',
		'tsale'		=> 'tenant',
		'twh'		=> 'tenant',
		'tswirl'	=> 'tenant',
	],
	'queue'			=> [
		'tacl' 		=> 'database', 
		'tsub' 		=> 'database',
		'tcust'		=> 'database',
		'tfin'		=> 'database',
		'tmf'		=> 'database',
		'tproc'		=> 'database',
		'tsale'		=> 'database',
		'twh'		=> 'database',
		'tswirl'	=> 'database',
	],
	'skin'	=> [
		'tacl' 		=> 'v1', 
		'tsub' 		=> 'v1',
		'tcust'		=> 'v1',
		'tfin'		=> 'v1',
		'tmf'		=> 'v1',
		'tproc'		=> 'v1',
		'tsale'		=> 'v1',
		'twh'		=> 'v1',
		'tswirl'	=> 'v1',
	],
    'blacklist'    	=> [
        'host'		=> [
        	'basil.id',
			'member.basil.id',
			'owner.basil.id',
			'thunder.basil.id',
			'tools.basil.id',
			'pos.basil.id',
        ],
    ],
    'whitelist'    	=> [
        'client'	=> [
        	'TMDW01',
        ],
    ],
	'bot'		    => [
		'name'	    => 'Silvia (Basil Virtual Assistant)',
		'email'	    => 'silvia@basil.id',
	],
	'scopes'	=> [
        'tswirl.database.reset'				=> 'Reset Database',
        'tswirl.conflict.stock_overlap'		=> 'Melihat stok rebutan',
	],
	'title'		=> [
		'conflict'			=> [
			'stock_overlap'	=> 'Stok Rebutan',
		]
	],
	'setting'	=> ['business'		=> 'vernon'],
];
