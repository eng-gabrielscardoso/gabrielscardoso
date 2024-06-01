<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Filament Admin Users
    |--------------------------------------------------------------------------
    |
    | This is a dynamic values for the Filament Admin Users to surpass
    | unnecessary validation into users model.
    |
    */
    'admin_users' => [
        ...array_filter(
            explode(',', env('FILAMENT_ADMIN_USERS'))
        ),
    ],
];
