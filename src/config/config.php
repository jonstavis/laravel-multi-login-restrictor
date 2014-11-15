<?php

return [

    /**
     * The name of the table containing user login information
     *
     */
    'user_logins_table' => 'user_logins',

    /**
     * The name of the existing application Users table
     *
     */
    'users_table' => 'users',

    /**
     * Field name that will store the number of multi logins or "seats" in the users table
     *
     */
    'users_num_seats_field' => 'num_seats',

    /**
     * The number of simultaneous logins allowed per user
     *
     */
    'simultaneous_logins' => 1,

    /**
     * The name of the session key for a user's last login
     *
     */
    'login_time_session_key' => 'LOGIN_TIME',

];
