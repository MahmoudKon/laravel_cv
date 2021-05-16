<?php

return [
    'role_structure' => [
        'super_admin' => [
            'users'      => 'c,r,u,d',
            'general'    => 'c,r,u,d',
            'skills'     => 'c,r,u,d',
            'hobbies'    => 'c,r,u,d',
            'education'  => 'c,r,u,d',
            'experience' => 'c,r,u,d',
        ],
        'admin' => [
        ],
        'user' => [
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
