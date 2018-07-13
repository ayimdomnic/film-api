<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasComment
{
    public function commentableModel() : string
    {
        return config('comments.model');
    }

    public function comments(): MorphMany
    {
        return $this->morphMany($this->commentableModel(), 'commentable');
    }

    public function comment($data, Model $creator, Model $parent = null)
    {
        $commentableModel = $this->commentableModel();
        $comment = (new $commentableModel())->createComment($this, $data, $creator);
        if (!empty($parent)) {
            // code...
            $parent->appendNode($comment);
        }

        return $comment;
    }

    public function updateComment($id, $data, Model $parent = null)
    {
        $commentableModel = $this->commentableModel();
        $comment = (new $commentableModel())->updateComment($id, $data);
        if (!empty($parent)) {
            // code...
            $parent->appendNode($comment);
        }

        return $comment;
    }

    public function deleteComment($id) : bool
    {
        $commentableModel = $this->commentableModel();

        return (bool) (new $commentableModel())->deleteComment($id);
    }

    public function commentCount() : int
    {
        return $this->comments->count();
    }
}
