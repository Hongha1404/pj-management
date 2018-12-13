<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\SubjectInterface;
use App\Repositories\Eloquents\DbSubjectRepository;
use App\Repositories\Interfaces\GroupInterface;
use App\Repositories\Eloquents\DbGroupRepository;
use App\Repositories\Interfaces\ExerciseInterface;
use App\Repositories\Eloquents\DbExerciseRepository;
use App\Repositories\Interfaces\TaskInterface;
use App\Repositories\Eloquents\DbTaskRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SubjectInterface::class, DbSubjectRepository::class);
        $this->app->bind(GroupInterface::class, DbGroupRepository::class);
        $this->app->bind(ExerciseInterface::class, DbExerciseRepository::class);
        $this->app->bind(TaskInterface::class, DbTaskRepository::class);
    }
}
