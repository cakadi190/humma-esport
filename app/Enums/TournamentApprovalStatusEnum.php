<?php

namespace App\Enums;

use App\Interfaces\BaseEnumInterface;

/**
 * Enum for Tournament Approval Status
 *
 * @author cakadi190 <cakadi190@gmail.com>
 * @return mixed
 */
enum TournamentApprovalStatusEnum: string implements BaseEnumInterface
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';

    /**
     * Getting label name for each type
     *
     * @return string
     */
    public function label(): string
    {
        return match($this) {
            self::PENDING => 'Menunggu',
            self::APPROVED => 'Diterima',
            self::REJECTED => 'Ditolak',
        };
    }

    /**
     * Returning array of case name
     *
     * @return array<TournamentApprovalStatusEnum, string>
     */
    public static function values(): array
    {
        return [
            self::PENDING => 'pending',
            self::APPROVED => 'approved',
            self::REJECTED => 'rejected',
        ];
    }

    /**
     * Getting bootstrap color for each type
     *
     * @return string
     */
    public function color(): string
    {
        return match($this) {
            self::PENDING => 'warning',
            self::APPROVED => 'success',
            self::REJECTED => 'danger',
        };
    }
}

