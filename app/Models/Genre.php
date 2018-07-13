<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UuidTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use SoftDeletes, UuidTrait;

    protected $table = "genres";

    protected $fillable = [ 
    	"name", 
    	"description"
    ];

    protected $dates = [
    	"created_at",
    	"deleted_at",
    	"updated_at"
    ];


   
}
