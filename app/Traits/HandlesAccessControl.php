<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Config;


trait HandlesAccessControl
{

    public static function isSuperAdmin(User $user)
    {
        $allowedRoles = array();
        array_push($allowedRoles, Config::get('constants.roles.superAdmin.valueInDB'));
        return array_intersect($user->role, $allowedRoles);
    }

    public static function isTeamMember(User $user)
    {
        $allowedRoles = array();
        array_push($allowedRoles, Config::get('constants.roles.teamMember.valueInDB'));
        return array_intersect($user->role, $allowedRoles);
    }

}
