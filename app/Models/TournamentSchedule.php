<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $tournaments_id
 * @property string $title
 * @property string $start_date
 * @method static \Database\Factories\TournamentScheduleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentSchedule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentSchedule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentSchedule query()
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentSchedule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentSchedule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentSchedule whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentSchedule whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentSchedule whereTournamentsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TournamentSchedule whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TournamentSchedule extends Model
{
    use HasFactory;
}
