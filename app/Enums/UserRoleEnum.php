<?php

namespace App\Enums;
use App\Interfaces\BaseEnumInterface;

/**
 * Enum class for User Role.
 */
enum UserRoleEnum: string implements BaseEnumInterface
{
    case USER = 'user';
    case EO = 'eo';
    case ADMIN = 'admin';

    /**
     * Get the label associated with the enum value.
     *
     * @return string The label of the enum value.
     */
    public function label(): string
    {
        return match ($this) {
            self::USER => 'User',
            self::EO => 'Event Organizer',
            self::ADMIN => 'Administrator',
            default => '',
        };
    }

    /**
     * Get the color associated with the enum value.
     *
     * @return string The color of the enum value.
     */
    public function color(): string
    {
        return match ($this) {
            self::USER => 'blue',
            self::EO => 'green',
            self::ADMIN => 'red',
            default => '',
        };
    }

    /**
     * Get an array of all enum values.
     *
     * @return array An array of all enum values.
     */
    public static function values(): array
    {
        return [
            self::USER,
            self::EO,
            self::ADMIN,
        ];
    }
}
