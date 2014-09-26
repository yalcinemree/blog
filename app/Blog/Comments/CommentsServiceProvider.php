<?php namespace Blog\Comments;

use Illuminate\Support\ServiceProvider;

class CommentsServiceProvider extends ServiceProvider {

    /**
     * Register the binding
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        $app->bind('Blog\Comments\CommentsInterface', 'Blog\Comments\Comments');
    }

}