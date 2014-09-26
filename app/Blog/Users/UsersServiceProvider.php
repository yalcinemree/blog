<?php namespace Blog\Users;

use Illuminate\Support\ServiceProvider;

class UsersServiceProvider extends ServiceProvider {

    /**
     * Register the binding
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        $app->bind('Blog\Users\UsersInterface', 'Blog\Users\Users');
    }

}