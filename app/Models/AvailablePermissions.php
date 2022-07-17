<?php


namespace App\Models;


class AvailablePermissions
{
    private function __construct() {}

    private $permissions = [
        [
            'display_name' => 'مدير',
            'hidden_name' => 'super-admin'
        ],
        [
            'display_name' => 'مدير مخزن',
            'hidden_name' => 'admin'
        ]
        
    ];

    static function getAvailablePermissions():array {
        return (new self())->permissions;
    }
}
