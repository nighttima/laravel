<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use HasFactory, Notifiable;
    protected $guard = 'admin';
    public $table = "admins";
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles() {
        return $this->belongsToMany(
            Roles::class,
            'admin_role',
            'admin_id',
            'role_id'
        );
    }
}

