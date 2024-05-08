<?php

namespace App\Enums;
use App\Interfaces\BaseEnumInterface;

/**
 * Enum class for Team Role.
 */
enum TeamRoleEnum: string implements BaseEnumInterface
{
    case LEADER = 'leader';
    case MEMBER = 'member';

    /**
     * Get the label associated with the enum value.
     *
     * @return string The label of the enum value.
     */
    public function label(): string
    {
        return match ($this) {
            self::LEADER => 'Leader',
            self::MEMBER => 'Member',
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
            self::LEADER => 'primary',
            self::MEMBER => 'info',
            default => 'info',
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
            self::LEADER,
            self::MEMBER,
        ];
    }
}
