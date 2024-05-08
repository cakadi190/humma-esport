<?php

namespace App\Models;

use App\Enums\TournamentWinnerEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $grade
 * @property int $tournaments_id
 * @property int $user_teams_id
 * @method static \Database\Factories\TournamentWinnerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentWinner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentWinner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentWinner query()
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentWinner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentWinner whereGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentWinner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentWinner whereTournamentsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentWinner whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentWinner whereUserTeamsId($value)
 * @mixin \Eloquent
 */
class TournamentWinner extends Model
{
    use HasFactory;

    /**
     * Getting tournament winners
     *
     * @return Collection
     */
    public static function winnerLevel(): Collection
    {
        return collect(TournamentWinnerEnum::cases())->pluck('value');
    }
}
