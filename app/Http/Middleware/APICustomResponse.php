<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use App;

class APICustomResponse
{

    /**
      - Handle an incoming request.
     *
      - @param  \Illuminate\Http\Request  $request
      - @param  \Closure  $next
      - @param  string|null  $guard
      - @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if($request->post("language") != ""){
            App::setLocale($request->post("language"));
        }
        
        $response = $next($request);
        $original = $response->getOriginalcontent();

        if (($response->status() == '200') || ($response->status() == '201')) {

            $response->setContent(json_encode([
                'success' => true,
                'data' => $original,
                'error' => null
                ])
            );
        } else {
            $response->setContent(json_encode([
                'success' => false,
                'data' => null,
                'error' => $original
                ])
            );
        }

        return $response;
    }
}
