<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'email',
      'name',
      'comment',
      'parent_id',
      'approved',
      'point',
      'commentable_id',
      'commentable_type'
    ];

    /**
     * Get all of the owning commentable models.
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class , 'parent_id' , 'id');
    }
}
