<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authorization Models
    |--------------------------------------------------------------------------
    */

    'models' => [

        /*
        |--------------------------------------------------------------------------
        | Permission Model
        |--------------------------------------------------------------------------
        |
        | When using the "HasRoles" trait from this package, we need to know which
        | Eloquent model should be used to retrieve your permissions. Of course, it
        | is often just the "Permission" model but you may use whatever you like.
        |
        | The model you want to use as a Permission model needs to implement the
        | `Spatie\Permission\Contracts\Permission` contract.
        |
        */
        'permission' => Spatie\Permission\Models\Permission::class,

        //'permission' => Backpack\PermissionManager\app\Models\Permission::class,

        /*
        |--------------------------------------------------------------------------
        | Role Model
        |--------------------------------------------------------------------------
        |
        | When using the "HasRoles" trait from this package, we need to know which
        | Eloquent model should be used to retrieve your roles. Of course, it
        | is often just the "Role" model but you may use whatever you like.
        |
        | The model you want to use as a Role model needs to implement the
        | `Spatie\Permission\Contracts\Role` contract.
        |
        */

        //'role' => Backpack\PermissionManager\app\Models\Role::class,
        'role' => Spatie\Permission\Models\Role::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Authorization Tables
    |--------------------------------------------------------------------------
    */

    'table_names' => [

        /*
        |--------------------------------------------------------------------------
        | Users Table
        |--------------------------------------------------------------------------
        |
        | The table that your application uses for users. This table's model will
        | be using the "HasRoles" and "HasPermissions" traits.
        |
        */
        'users' => 'users',

        /*
        |--------------------------------------------------------------------------
        | Roles Table
        |--------------------------------------------------------------------------
        |
        | When using the "HasRoles" trait from this package, we need to know which
        | table should be used to retrieve your roles. We have chosen a basic
        | default value but you may easily change it to any table you like.
        |
        */

        'roles' => 'roles',

        /*
        |--------------------------------------------------------------------------
        | Permissions Table
        |--------------------------------------------------------------------------
        |
        | When using the "HasRoles" trait from this package, we need to know which
        | table should be used to retrieve your permissions. We have chosen a basic
        | default value but you may easily change it to any table you like.
        |
        */

        'permissions' => 'permissions',

        /*
        |--------------------------------------------------------------------------
        | User Permissions Table
        |--------------------------------------------------------------------------
        |
        | When using the "HasRoles" trait from this package, we need to know which
        | table should be used to retrieve your users permissions. We have chosen a
        | basic default value but you may easily change it to any table you like.
        |
        */

        //'user_has_permissions' => 'permission_users',
        'user_has_permissions' => 'user_has_permissions',

        /*
        |--------------------------------------------------------------------------
        | User Roles Table
        |--------------------------------------------------------------------------
        |
        | When using the "HasRoles" trait from this package, we need to know which
        | table should be used to retrieve your users roles. We have chosen a
        | basic default value but you may easily change it to any table you like.
        |
        */

        //'user_has_roles' => 'role_users',
        'user_has_roles' => 'user_has_roles',

        /*
        |--------------------------------------------------------------------------
        | Role Permissions Table
        |--------------------------------------------------------------------------
        |
        | When using the "HasRoles" trait from this package, we need to know which
        | table should be used to retrieve your roles permissions. We have chosen a
        | basic default value but you may easily change it to any table you like.
        |
        */

        //'role_has_permissions' => 'permission_roles',
         'role_has_permissions' => 'role_has_permissions',

    ],


    //add more
     'foreign_keys' => [
        
        /*
         * The name of the foreign key to the users table.
         */
        'users' => 'user_id',
    ],

    /*
     *
     * By default we'll make an entry in the application log when the permissions
     * could not be loaded. Normally this only occurs while installing the packages.
     *
     * If for some reason you want to disable that logging, set this value to false.
     */

    'log_registration_exception' => true,

];
