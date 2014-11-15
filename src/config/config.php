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
     * Update this field on any user row to add/remove seats from that account
     *
     */
    'users_num_seats_field' => 'num_seats',

    /**
     * The name of the session key for a user's last login
     *
     */
    'login_time_session_key' => 'LOGIN_TIME',

];
