<?php

use IlluminateAuthUserInterface;
use IlluminateAuthRemindersRemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

  protected $table = 'users';

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = array('password');

  //Add to the "fillable" array
   protected $fillable = array('email', 'password', 'name', 'admin');

  /**
   * Get the unique identifier for the user.
   *
   * @return mixed
   */
  public function getAuthIdentifier()
  {
    return $this->getKey();
  }

  /**
   * Get the password for the user.
   *
   * @return string
   */
  public function getAuthPassword()
  {
    return $this->password;
  }

  /**
   * Get the e-mail address where password reminders are sent.
   *
   * @return string
   */
  public function getReminderEmail()
  {
    return $this->email;
  }

}