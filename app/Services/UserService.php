<?php

namespace App\Services;

class UserService
{
    public static function getDashboardRouteBasedOnUserRole($userRole)
    {
        if ($userRole === 'participant') {
            return 'participant.dashboard.index';
        } elseif ($userRole === 'organization') {
            return 'organization.dashboard.index';
        }
    }
}
