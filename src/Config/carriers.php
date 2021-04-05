<?php

return [
    'rajaongkir' => [
        'code'         => 'rajaongkir',
        'title'        => 'RajaOngkir',
        'description'  => 'RajaOngkir',
        'active'       => true,
        'default_rate' => null,
        'type'         => 'per_unit',
        'endpoint'     => 'https://api.rajaongkir.com/starter',
        'api_key'      => null,
        'class'        => 'Lunantu\RajaOngkir\Carriers\RajaOngkir',
    ],
];