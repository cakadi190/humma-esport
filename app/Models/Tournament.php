<?php

namespace App\Models;

use App\Enums\TournamentApprovalStatusEnum;
use App\Enums\TournamentTypeEnum;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Tournament Model Class
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $users_id
 * @property int $game_categories_id
 * @property string $name
 * @property string $bracket_link
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $registration_open
 * @property \Illuminate\Support\Carbon|null $registration_close
 * @property \Illuminate\Support\Carbon|null $event_start
 * @property int $registration_price
 * @property \Illuminate\Support\Carbon|null $event_end
 * @property string|null $rules
 * @property string|null $poster_image
 * @property string $pic_name
 * @property int $number_of_teams
 * @property string $pic_contact
 * @property string $pic_email
 * @property string $event_type
 * @property string $status
 * @property-read \App\Models\GameCategory $gameCategory
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\TournamentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereBracketLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereEventEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereEventStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereEventType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereGameCategoriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereNumberOfTeams($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament wherePicContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament wherePicEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament wherePicName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament wherePosterImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereRegistrationClose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereRegistrationOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereRegistrationPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereRules($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tournament whereUsersId($value)
 * @mixin \Eloquent
 */
class Tournament extends Model
{
    use HasFactory, HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id',
        'game_categories_id',
        'name',
        'bracket_link',
        'description',
        'registration_open',
        'registration_close',
        'event_start',
        'registration_price',
        'event_end',
        'rules',
        'poster_image',
        'pic_name',
        'number_of_teams',
        'pic_contact',
        'pic_email',
        'event_type',
        'status',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'registration_open' => 'datetime',
        'registration_close' => 'datetime',
        'event_start' => 'datetime',
        'event_end' => 'datetime',
    ];

    /**
     * Get the user that owns the tournament.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    /**
     * Get the game category that the tournament belongs to.
     */
    public function gameCategory()
    {
        return $this->belongsTo(GameCategory::class, 'game_categories_id');
    }

    /**
     * Getting tournament type
     *
     * @return Collection
     */
    public static function tournamentTypes(): Collection
    {
        return collect(TournamentTypeEnum::cases())->pluck('value');
    }

    /**
     * Get Tournament status
     *
     * @return TournamentApprovalStatusEnum
     */
    public function getStatus(): TournamentApprovalStatusEnum
    {
        return match ($this->status) {
            'approved' => TournamentApprovalStatusEnum::APPROVED,
            'pending' => TournamentApprovalStatusEnum::PENDING,
            'rejected' => TournamentApprovalStatusEnum::REJECTED,
            default => TournamentApprovalStatusEnum::PENDING,
        };
    }

    /**
     * Getting tournament type
     *
     * @return Collection
     */
    public static function tournamentStatus(): Collection
    {
        return collect(TournamentApprovalStatusEnum::cases())->pluck('value');
    }
}
