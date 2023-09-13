<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;


class Blog extends Model
{
    use HasFactory, HasTags;

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }
    
    public function tag() 
    {
        return $this->hasMany(TagPost::class);
    }
    
    protected $fillable = [ 
        'title', 
        'blogPicture',
        'content',
    ];
}
