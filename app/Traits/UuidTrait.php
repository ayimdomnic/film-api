<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UuidTrait
{

	public function scopeByUuid($query, $uuid)
	{
		return $query->where('uuid', $uuid);
	}

	public static function bootUuidScopeTrait()
	{
		static::creating(function($model){
			if (empty($model->uuid)) {
				# code...
				$model->uuid = (string) Str::uuid();
			}
		})
	}
    
}
