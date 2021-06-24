<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class
Information extends Model
{
    use HasFactory;
    public $table = "posts";
    protected $fillable = [
        'title',
        'text',
        'date',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function author() {
    }
    public  function tags() {
        return $this->belongsToMany(Tags::class, 'post_tag', 'post_id', 'tag_id');
    }
}
