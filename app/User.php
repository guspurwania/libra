<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\LearningSchedule;
use App\LearningUser;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'bot_token',
        'role_id',
        'email_verified_at',
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function learning_schedules(){
        return $this->hasMany(LearningSchedule::class);
    }

    public function learning_users(){
        return $this->hasMany(LearningUser::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
