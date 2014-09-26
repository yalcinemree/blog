<?php namespace Blog\Articles;

use Illuminate\Support\ServiceProvider;

class ArticlesServiceProvider extends ServiceProvider {

    /**
     * Register the binding
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        $app->bind('Blog\Articles\ArticlesInterface', 'Blog\Articles\Articles');
    }

}