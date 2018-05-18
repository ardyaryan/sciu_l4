<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class UserProfile extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_profile';

    protected $fillable = ['user_id', 'city','country', 'first_access', 'last_access'];

    const USER_TYPE_ADMIN   = 1;
    const USER_TYPE_STUDENT = 2;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('updated_at', 'created_at');

}
