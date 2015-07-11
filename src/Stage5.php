<?php namespace TightenCo\Stage5;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Foundation\Testing\ApplicationTrait as IlluminateApplicationTrait;
use TightenCo\Stage5\Exceptions\PassThroughHandler;

trait Stage5
{
    /**
     * Let exceptions pass through for better error messages in integration tests.
     *
     * @return $this
     */
    protected function withoutExceptionHandling()
    {
        $this->app->singleton(
            ExceptionHandler::class,
            PassThroughHandler::class
        );

        return $this;
    }
}

