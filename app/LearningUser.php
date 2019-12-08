<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

use App\User;
use App\LearningSchedule;

class LearningUser extends Model 
{

	// use SoftDeletes;

	public $table = "learning_users";

    protected $dates = ['deleted_at'];

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
        'user_id',
        'learning_schedule_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function learning_schedule(){
        return $this->belongsTo(LearningSchedule::class);
    }

}