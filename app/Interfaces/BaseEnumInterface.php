<?php

namespace App\Interfaces;

interface BaseEnumInterface
{
    public function label(): string;
    public function color(): string;
    public static function values(): array;
}
