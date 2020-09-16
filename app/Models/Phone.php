<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
	protected $table = 'phone';

	public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}