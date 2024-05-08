<?php

namespace App\Traits;

use Str;

trait HasSlug
{
    /**
     * Create Slug
     *
     * @return void
     */
    protected static function boot(): void
    {
        parent::boot();

        static::creating(fn($model) => $model->slug = Str::slug($model->title ? $model->title : $model->name));
        static::updating(fn($model) => $model->slug = Str::slug($model->title ? $model->title : $model->name));
    }
}
