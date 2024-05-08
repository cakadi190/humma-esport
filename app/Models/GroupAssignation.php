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
 * @property int $user_teams_id
 * @property int $users_id
 * @method static \Database\Factories\GroupAssignationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|GroupAssignation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupAssignation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupAssignation query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupAssignation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupAssignation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupAssignation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupAssignation whereUserTeamsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupAssignation whereUsersId($value)
 * @mixin \Eloquent
 */
class GroupAssignation extends Model
{
    use HasFactory;
}
