<?php

use Yottaram\MultiLoginRestrictor\Models\UserLogin;

Route::filter('multi-login-restrict', function()
{
	if (Auth::guest()) return Redirect::guest('login');

    $user = Auth::user();

    $numSeats = $user->num_seats;

    $numLogins = UserLogin::where('user_id', $user->id)->count();

    if ($numSeats < $numLogins) 
    {
        $earliestLogin = UserLogin::where('user_id', $user->id)->orderBy('login_time')->first();
        $userLoginTime = Session::get(Config::get('multi-login-restrictor::login_time_session_key'));

        if ($userLoginTime->format('Y-m-d H:i:s') == $earliestLogin->login_time)
        {
            Log::info('Logging out user due to maximum seat limit reached.  User id: ' . $user->id);
            Auth::logout();

            return Redirect::guest('login');
        }
    }
});

