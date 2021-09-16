<?php

namespace App\Exceptions;

use App\Http\Controllers\V1\ApiController;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    use ApiController;

    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (Throwable $e, $request) {
//            if ($e->getStatusCode() == "404") return response()->json(['des' => trans('msg.404')], 404);
//            if ($e->getStatusCode() == "403") return response()->json(['des' => trans('msg.403')], 403);
//            if ($e->getStatusCode() == "503") return response()->json(['des' => trans('msg.503')], 503);
//            if ($e->getStatusCode() == "500") return response()->json(['des' => trans('msg.500')], 500);
        });


    }
}
