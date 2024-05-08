<?php

namespace App\Enums;
use App\Interfaces\BaseEnumInterface;

/**
 * Enum class for Prize Pool Type.
 */
enum PrizePoolTypeEnum: string implements BaseEnumInterface
{
    case MONEY = 'money';
    case TROPHY = 'trophy';
    case MEDAL = 'medals';
    case CERT = 'cert';

    /**
     * Get the label associated with the enum value.
     *
     * @return string The label of the enum value.
     */
    public function label(): string
    {
        return match ($this) {
            self::MONEY => 'Uang',
            self::TROPHY => 'Trofi',
            self::MEDAL => 'Medali',
            self::CERT => 'Sertifikat',
            default => 'Uang',
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
            self::MONEY => 'success',
            self::TROPHY => 'warning',
            self::MEDAL => 'silver',
            self::CERT => 'primary',
            default => 'primary',
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
            self::MONEY,
            self::TROPHY,
            self::MEDAL,
            self::CERT,
        ];
    }
}
