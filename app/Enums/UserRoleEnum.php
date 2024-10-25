<?php

namespace App\Enums;

enum UserRoleEnum: string
{
    case ADMIN = 'admin';
    case MODERATOR = 'moderator';
    case USER = 'user';

    public function setAdminRole(): UserRoleEnum
    {
        return self::ADMIN;
    }

    public function setModeratorRole(): UserRoleEnum
    {
        return self::MODERATOR;
    }

    public function setUserRole(): UserRoleEnum
    {
        return self::USER;
    }
}
