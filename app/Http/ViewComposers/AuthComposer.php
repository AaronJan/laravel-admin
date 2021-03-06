<?php

namespace App\Http\ViewComposers;


use Illuminate\Contracts\View\View;
use Illuminate\Users\Repository as UserRepository;
use Auth;

class AuthComposer {

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('userInfo', Auth::user());
    }

}