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
 * @method static \Database\Factories\GroupToEventFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|GroupToEvent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupToEvent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupToEvent query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroupToEvent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupToEvent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroupToEvent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GroupToEvent extends Model
{
    use HasFactory;
}
