<?php

namespace Modules\ProvBase\Entities;

return  [
    'link' => 'ProvBase.index',
    'MenuItems' => [
        'Contracts' => [
            'link'	=> 'Contract.index',
            'icon'	=> 'fa-address-book-o',
            'class' => Contract::class,
        ],
        'Domains' => [
            'link' 	=> 'Domain.index',
            'icon'	=> 'fa-tag',
            'class' => Domain::class,
        ],
        'Modems' => [
            'link'	=> 'Modem.index',
            'icon'	=> 'fa-hdd-o',
            'class' => Modem::class,
        ],
        'Endpoints' => [
            'link'	=> 'Endpoint.index',
            'icon'	=> 'fa-map-marker',
            'class' => Endpoint::class,
        ],
        'Configfiles' => [
            'link'	=> 'Configfile.index',
            'icon'	=> 'fa-file-code-o',
            'class' => Configfile::class,
        ],
        'QoS' => [
            'link'	=> 'Qos.index',
            'icon'	=> 'fa-ticket',
            'class' => Qos::class,
        ],
        'NetGw' => [
            'link'	=> 'NetGw.index',
            'icon'	=> 'fa-server',
            'class' => NetGw::class,
        ],
        'Ip-Pools' => [
            'link'	=> 'IpPool.index',
            'icon'	=> 'fa-tags',
            'class' => IpPool::class,
        ],
    ],
];
