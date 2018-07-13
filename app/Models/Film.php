<?php

namespace App\Models;

use App\Traits\HasComment;
use App\Traits\Sluggable;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    use SoftDeletes, UuidTrait, Sluggable, HasComment;

    protected $table = 'films';

    protected $fillable = [
        'name',
        'description',
        'release_date',
        'rating',
        'slug',
        'ticket_price',
        'country',
        'country',
        'genre',
        'photo',
    ];

    protected $dates = [
        'created_at',
        'deleted_at',
        'updated_at',
    ];
}
