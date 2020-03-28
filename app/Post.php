<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $garded = [];

    /**
     * Get the user that owns the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the listing that owns the post.
     */
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }


    /**
     * The categories that belong to the post.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category');
    }

    
    /**
     * Get the comments for the post.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    
    /**
     * Get the reactions for the post.
     */
    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }
}
