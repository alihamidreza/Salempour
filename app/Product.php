<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title' , 'body' , 'user_id' , 'tags' , 'images' , 'like'];

    protected $casts = [
      'images' => 'array',
    ];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

     /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->where('approved' , 1);
    }

    public function path()
    {
        return "products/".$this->slug;
    }

    public static function scopeSearch($query, $search)
    {
        if (isset($search) && !empty($search)) {
            $query->where('title' , 'LIKE' , '%' . $search['search'] . '%');
        }
    }
}
