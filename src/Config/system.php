<?php

return [
    [
        'key'    => 'sales.carriers.rajaongkir',
        'name'   => 'RajaOngkir',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'title',
                'title'         => 'admin::app.admin.system.title',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'description',
                'title'         => 'admin::app.admin.system.description',
                'type'          => 'textarea',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'endpoint',
                'title'         => 'Endpoint',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => false,
            ], [
                'name'          => 'api_key',
                'title'         => 'Api Key',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => false,
            ],[
                'name'       => 'type',
                'title'      => 'admin::app.admin.system.type',
                'type'       => 'select',
                'options'    => [
                    [
                        'title' => 'Per Unit',
                        'value' => 'per_unit',
                    ], [
                        'title' => 'Per Order',
                        'value' => 'per_order',
                    ]
                ],
                'validation' => 'required'
            ], [
                'name'          => 'default_rate',
                'title'         => 'Biaya Per Order',
                'type'          => 'number',
                'placeholder'   => 'Isi jika memilih Per Order, harga 0 jika tidak di isi.',
                'channel_based' => false,
                'locale_based'  => false,
            ], [
                'name'          => 'active',
                'title'         => 'admin::app.admin.system.status',
                'type'          => 'boolean',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ]
        ]
    ]
];
