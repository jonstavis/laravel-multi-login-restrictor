<?php namespace Yottaram\MultiLoginRestrictor\Models;

use Eloquent;
use Config;

class UserLogin extends Eloquent {

    protected $fillable = [ 'user_id', 'login_time' ];

    protected $table; 
    
    public function __construct(array $attributes = array()) 
    {
        parent::__construct($attributes);
        $this->table = Config::get('multi-login-restrictor::user_logins_table');
    }
}
