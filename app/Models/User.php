<?php



namespace App\Models;


use App\Traits\UuidTrait;

use App\Traits\HasComment;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

	use Notifiable, SoftDeletes, UuidTrait, HasComment;

	protected $table = 'users';

	protected $fillable = [
		"name",
		"email",
		"password",
	];

	protected $hidden = [
		"password",
		"remember_token"
	];

	protected $dates = [
		"created_at",
		"updated_at",
		"deleted_at"
	];
	
}
