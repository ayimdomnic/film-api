<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	use SoftDeletes;

    protected $table = "comments";

    protected $guarded = [];

    public function hasChildren(): bool
    {
    	return $this->children()->count() > 0;
    }

    public function commentable() : MorphTo
    {
    	return $this->morphTo();
    }

    public function creator() : MorphTo
    {
    	return $this->morphTo('creator');
    }

    public function createComment(Model $commentable, $data, Model $creator) : self
    {
    	return $commentable->comments->create(array_merge($data, [
    		'creator_id' => $creator->getAuthIdentifier(),
    		'creator_type' => get_class($creator)
    	]));
    }

    public function updateComment($id, $data) : bool
    {
    	return (bool) static::find($id)->update($data);
    }

    public function deleteComment($id) : bool
    {
    	return (bool) static::find($id)->delete();
    }


}
