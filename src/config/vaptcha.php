<?php

return [
    // 启用的配置 如果只想单一使用 填入default即可
    'enable' => [
    ],

    // 根据填入的启用配置 对应添加对应的key
    'config' => [
    ]

    // example default
    // 'enable ' => ['default'],
    // 'config' => [
    //     'vid' => env('VAPTCHA_VID'),
    //     'key' => env('VAPTCHA_KEY'),
    // ]

    // example
    // 'enable' => [
    //     'ios',
    //     'web'
    // ],

    // // 根据填入的启用配置 对应添加对应的key
    // 'config' => [
    //     'web' => [
    //         'vid' => env('VAPTCHA_WEB_VID'),
    //         'key' => env('VAPTCHA_WEB_KEY')
    //     ],
    //     'ios' => [
    //         'vid' => env('VAPTCHA_IOS_VID'),
    //         'key' => env('VAPTCHA_IOS_KEY')
    //     ]
    // ]
];