<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\User;
use App\LearningUser;

class LearningSchedule extends Model 
{

	use SoftDeletes;

	public $table = "learning_schedules";

    protected $dates = ['deleted_at'];

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
        'user_id',
        'code',
        'subject',
        'desc',
        'schedule_day',
        'schedule_time',
        'schedule_time_end',
        'enrollment_key',
        'class_room',
        'img'
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function learning_users(){
    	return $this->hasMany(LearningUser::class);
    }

}