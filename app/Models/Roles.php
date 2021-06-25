<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    public $table = "roles";
    protected $fillable = [
        'name',
    ];
    public function admins() {
        return $this->belongsToMany(
            Admin::class,
            'admin_role',
            'role_id',
            'admin_id'
        );
    }
}
