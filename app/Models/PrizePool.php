<?php

namespace App\Models;

use App\Enums\PrizePoolTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $tournament_id
 * @property string $type
 * @property string $note
 * @method static \Database\Factories\PrizePoolFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PrizePool newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrizePool newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrizePool query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrizePool whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrizePool whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrizePool whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrizePool whereTournamentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrizePool whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrizePool whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PrizePool extends Model
{
    use HasFactory;

    /**
     * Getting tournament type
     *
     * @return Collection
     */
    public static function prizeTypes(): Collection
    {
        return collect(PrizePoolTypeEnum::cases())->pluck('value');
    }
}
