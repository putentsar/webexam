<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function isAdmin()
	{
		
		return $this->type === 1;
		
	}
		public function isManager()
	{
		
		return $this->type === 2;
		
	}
	   public function review()
  {
	  return $this->HasMany(Review::class);
  }
}
