<?php

namespace App\Enums;
use App\Interfaces\BaseEnumInterface;

/**
 * Enum for Tournament Type
 *
 * @return string
 * @author cakadi190 <cakadi190@gmail.com>
 */
enum TournamentTypeEnum: string implements BaseEnumInterface
{
    case PAID = 'paid';
    case FREE = 'free';

    /**
     * Returning array of case name
     *
     * @return array<TournamentApprovalStatusEnum, string>
     */
    public static function values(): array
    {
        return [
            self::FREE => 'free',
            self::PAID => 'paid',
        ];
    }

    /**
     * Getting label name for each type
     *
     * @return string
     */
    public function label(): string
    {
        return match($this) {
            self::PAID => 'Berbayar',
            self::FREE => 'Gratis',
        };
    }

    /**
     * Getting bootstrap color for each type
     *
     * @return string
     */
    public function color(): string
    {
        return match($this) {
            self::PAID => 'primary',
            self::FREE => 'success',
        };
    }
}
