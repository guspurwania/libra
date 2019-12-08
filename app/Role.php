<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

use App\User;

class Role extends Model 
{

	// use SoftDeletes;

	public $table = "roles";

    protected $dates = ['deleted_at'];

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
        'name',
        'guard_name'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }

}