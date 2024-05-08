<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Game Category Model
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property string $image
 * @property int $number_of_users
 * @method static \Database\Factories\GameCategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|GameCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|GameCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameCategory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameCategory whereNumberOfUsers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GameCategory extends Model
{
    use HasFactory, HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'number_of_users',
    ];
}
