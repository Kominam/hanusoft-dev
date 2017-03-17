<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('App\Contracts\Repositories\CategoryRepository',
            'App\Repositories\Eloquent\CategoryRepositoryEloquent');
        App::bind('App\Contracts\Repositories\CommentRepository',
            'App\Repositories\Eloquent\CommentRepositoryEloquent');
        App::bind('App\Contracts\Repositories\PhaseRepository',
            'App\Repositories\Eloquent\PhaseRepositoryEloquent');
        App::bind('App\Contracts\Repositories\PostRepository',
            'App\Repositories\Eloquent\PostRepositoryEloquent');
        App::bind('App\Contracts\Repositories\ProjectRepository',
            'App\Repositories\Eloquent\ProjectRepositoryEloquent');
        App::bind('App\Contracts\Repositories\ResourceRepository',
            'App\Repositories\Eloquent\ResourceRepositoryEloquent');
        App::bind('App\Contracts\Repositories\SkillRepository',
            'App\Repositories\Eloquent\SkillRepositoryEloquent');
        App::bind('App\Contracts\Repositories\TaskRepository',
            'App\Repositories\Eloquent\TaskRepositoryEloquent');
        App::bind('App\Contracts\Repositories\UserRepository',
            'App\Repositories\Eloquent\UserRepositoryEloquent');

    }
}
