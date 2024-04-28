<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public $timestamps = true;

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            if ($model->usesTimestamps()) {
                $model->{$model->getCreatedAtColumn()} = Carbon::now();
            }
        });

        static::updating(function (Model $model) {
            if ($model->usesTimestamps()) {
                $model->{$model->getUpdatedAtColumn()} = Carbon::now();
            }
        });
    }
}
