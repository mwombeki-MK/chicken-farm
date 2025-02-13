<?php

if (!function_exists('has_permission')) {

    function has_permission(string $permission): bool
    {

        $userPermissions = session()->get('user_permissions') ?? [];

        return in_array($permission, $userPermissions);
    }
}
