<?php

namespace App\Enums;

enum UserRoleEnum
{
    case ADMIN;
    case MODERATOR;
    case USER;

    public function setRole(): string
    {
        return match ($this) {
            self::ADMIN => 'admin',
            self::MODERATOR => 'moderator',
            self::USER => 'user',
        };
    }
}
