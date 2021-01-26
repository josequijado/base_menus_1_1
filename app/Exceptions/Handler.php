<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
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
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        $excClass = get_class($exception);
        if ($excClass == "Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException") { // Llamada a una ruta con un método no aceptado
            return redirect()->route('BM_index');
        } elseif ($excClass == "Vonage\Client\Exception\Request") { // Error en el envío de un SMS
            $request->session()->invalidate();
            return response()->view('BM.exceptions.nexmo');
        } elseif ($excClass == "Symfony\Component\HttpKernel\Exception\NotFoundHttpException") { // 404 (página no encontrada)
            return response()->view('BM.exceptions.404');
        } elseif ($excClass == "\Illuminate\Session\TokenMismatchException") { // 419 (fallo de token, normalmente por interrupción de sesión)
            return response()->view('BM.exceptions.419');
        } elseif ($excClass == "ErrorException") { // Objeto no identificado u otros genéricos.
            return response()->view('BM.exceptions.failure');
        }

        return parent::render($request, $exception);
    }
}
