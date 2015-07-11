<?php namespace TightenCo\Stage5\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler;

class PassThroughHandler extends Handler
{
    /**
     * Rethrow exceptions to pass through to tests.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        throw $e;
    }
}
