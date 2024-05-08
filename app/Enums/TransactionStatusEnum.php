<?php

namespace App\Enums;
use App\Interfaces\BaseEnumInterface;

enum TransactionStatusEnum: string implements BaseEnumInterface
{
    case PENDING = 'pending';
    case SUCCESS = 'success';
    case FAILED = 'failed';
    case UNPAID = 'unpaid';
    case PAID = 'paid';
    case REFUND = 'refund';
    case EXPIRED = 'expired';

    /**
     * Get the label associated with the enum value.
     *
     * @return string The label of the enum value.
     */
    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'Menunggu',
            self::SUCCESS => 'Berhasil',
            self::FAILED => 'Gagal',
            self::UNPAID => 'Belum Dibayar',
            self::PAID => 'Dibayar',
            self::REFUND => 'Dikembalikan',
            self::EXPIRED => 'Kadaluarsa',
            default => 'Tertunda',
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
            self::PENDING => 'orange',
            self::SUCCESS => 'green',
            self::FAILED => 'red',
            self::UNPAID => 'blue',
            self::PAID => 'green',
            self::REFUND => 'purple',
            self::EXPIRED => 'gray',
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
            self::PENDING,
            self::SUCCESS,
            self::FAILED,
            self::UNPAID,
            self::PAID,
            self::REFUND,
            self::EXPIRED,
        ];
    }
}
