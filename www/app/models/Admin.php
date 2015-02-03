<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Admin extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = ['username', 'password', 'nivoPristupa'];
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admins';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

  	/**
   	* Overrides the method to ignore the remember token.
   	*/
  	public function setAttribute($key, $value)
  	{
    	$isRememberTokenAttribute = $key == $this->getRememberTokenName();
    	if(!$isRememberTokenAttribute)
    	{
      		parent::setAttribute($key, $value);
    	}
  	}

}