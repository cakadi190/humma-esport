<?php

namespace App\Models;

use App\Enums\TeamRoleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $image
 * @property string $description
 * @property string $role
 * @property int $game_categories_id
 * @method static \Database\Factories\UserTeamFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|UserTeam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserTeam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserTeam query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserTeam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTeam whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTeam whereGameCategoriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTeam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTeam whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTeam whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTeam whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTeam whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class UserTeam extends Model
{
    use HasFactory;

    /**
     * Getting team role
     *
     * @return Collection
     */
    public static function teamRoles(): Collection
    {
        return collect(TeamRoleEnum::cases())->pluck('value');
    }
}
