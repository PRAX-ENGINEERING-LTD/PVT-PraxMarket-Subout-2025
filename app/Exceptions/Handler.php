<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Google\Cloud\Logging\LoggingClient;
use Illuminate\Support\Facades\Config;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
         \Illuminate\Auth\AuthenticationException::class
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
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function report(Throwable $exception)
    {
        // $projectId = 'toober-gcp';
        // $logging = new LoggingClient([
        //     'pocFilePath' => putenv('GOOGLE_APPLICATION_CREDENTIALS=/home/w716891/Data/Git/google_cloud_service_account/toober-gcp-d46360d41054.json'),
        //     'projectId' => $projectId,
        // ]);
        // $logName = 'log-from-blr-devt';
        // $logger = $logging->logger($logName);
        // $entry = $logger->entry($exception->getMessage().' '.'at'.' '.$exception->getFile().':'.$exception->getLine());
        // $logger->write($entry);
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if($this->isHttpException($exception)){
            if (view()->exists('errors.'.$exception->getStatusCode()))
            {
                return response()->view('errors.'.$exception->getStatusCode(), [], $exception->getStatusCode());
            }
            if ($exception->getStatusCode() == 404) {
                return response()->view('errors.' . '404', [], 404);
            }
            if ($exception->getStatusCode() == 500) {
                return response()->view('errors.' . '500', [], 500);
            }
        }
        return parent::render($request, $exception);
    }
}
