<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;
    public $table = "tags";
    protected $fillable = [
        'name',
    ];
    public function posts() {
        return $this->belongsToMany(Information::class, 'post_tag','tag_id','post_id');
    }
}
