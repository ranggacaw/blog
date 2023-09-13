<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Conner\Tagging\Taggable;

class TagPost extends Model
{
    use HasFactory;
    
    use \Conner\Tagging\Taggable;
    
    protected $fillable = [ 
        'title', 
        'content' 
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
