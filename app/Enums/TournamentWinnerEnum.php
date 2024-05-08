<?php

namespace App\Enums;
use App\Interfaces\BaseEnumInterface;

/**
 * Enum class for Tournament Winner.
 */
enum TournamentWinnerEnum: string implements BaseEnumInterface
{
    case FIRST = 'first';
    case SECOND = 'second';
    case THIRD = 'third';
    case FOURTH = 'fourth';
    case FIFTH = 'fifth';

    /**
     * Get the label associated with the enum value.
     *
     * @return string The label of the enum value.
     */
    public function label(): string
    {
        return match ($this) {
            self::FIRST => 'First Place',
            self::SECOND => 'Second Place',
            self::THIRD => 'Third Place',
            self::FOURTH => 'Fourth Place',
            self::FIFTH => 'Fifth Place',
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
        // Menentukan warna berdasarkan urutan tempat
        return match ($this) {
            self::FIRST => 'gold',
            self::SECOND => 'silver',
            self::THIRD => 'bronze',
            default => 'black',
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
            self::FIRST,
            self::SECOND,
            self::THIRD,
            self::FOURTH,
            self::FIFTH,
        ];
    }
}
