<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['name', 'stock'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {

            do {
                $uuid = strtoupper(Str::random(4));
            } while (self::where('id', $uuid)->exists());

            $model->id = $uuid;
        });
    }
}
