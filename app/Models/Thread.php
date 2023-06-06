<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Thread extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'slug', 
        'category_id', 
        'content', 
        'user_id'
    ];

    public function discussion()
    {
        return $this->belongsTo(Category::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }

    public function save(array $options = [])
    {
        if (!$this->slug) {
            $this->slug = Str::slug($this->title);
        }
        parent::save($options);
    }

}
