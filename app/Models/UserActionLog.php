<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class UserActionLog extends Model
{
    protected $hidden = array('_id');
    protected $appends = array('id');
    protected $collection = 'user_action_logs';
    protected $primaryKey = '_id';

    // private static function isApiOrConsoleRoutes()
    // {
    //     $url = Route::currentRouteAction();
    //     if (
    //         Str::contains($url, 'App\Http\Controllers\API\v1') !== false ||
    //         Str::contains($url, 'App\Http\Controllers\API\v2') !== false || (App::runningInConsole() == True)
    //     ) {
    //         // LOG DO NOT OCCUR
    //         return true;
    //     }
    //     return false;
    // }

    // private static function saveLog($model, $action, array $oldValue = null, array $newValue = null)
    // {
    //     if (self::isApiOrConsoleRoutes() == false) {
    //         $userActionLog = new UserActionLog();
    //         $userActionLog->action = $action;
    //         $userActionLog->oldValue = $oldValue;
    //         $userActionLog->newValue = $newValue;
    //         $userActionLog->user = isset(Auth::user()->id) ? Auth::user()->id : null;
    //         $userActionLog->model = $model;
    //         $userActionLog->save();
    //     }
    // }



    // public static function logUserUserAction($action, array $oldValue = null, array $newValue = null)
    // {
    //     $model = Config::get('constants.userActionLog.models.user');
    //     self::saveLog($model, $action, $oldValue, $newValue);
    // }
    // public static function logBrandUserAction($action, array $oldValue = null, array $newValue = null)
    // {
    //     $model = Config::get('constants.userActionLog.models.brands');
    //     self::saveLog($model, $action, $oldValue, $newValue);
    // }
    // public static function logMediaFileUserAction($action, array $oldValue = null, array $newValue = null)
    // {
    //     $model = Config::get('constants.userActionLog.models.mediaFiles');
    //     self::saveLog($model, $action, $oldValue, $newValue);
    // }

    // public static function logHuntUserAction($action, array $oldValue = null, array $newValue = null)
    // {
    //     $model = Config::get('constants.userActionLog.models.hunts');
    //     self::saveLog($model, $action, $oldValue, $newValue);
    // }
    // public static function logRaceUserAction($action, array $oldValue = null, array $newValue = null)
    // {
    //     $model = Config::get('constants.userActionLog.models.races');
    //     self::saveLog($model, $action, $oldValue, $newValue);
    // }
    // public static function logCheckpointUserAction($action, array $oldValue = null, array $newValue = null)
    // {
    //     $model = Config::get('constants.userActionLog.models.checkpoints');
    //     self::saveLog($model, $action, $oldValue, $newValue);
    // }
    // public static function logChallengeUserAction($action, array $oldValue = null, array $newValue = null)
    // {
    //     $model = Config::get('constants.userActionLog.models.challenges');
    //     self::saveLog($model, $action, $oldValue, $newValue);
    // }
    // public static function logNoteUserAction($action, array $oldValue = null, array $newValue = null)
    // {
    //     $model = Config::get('constants.userActionLog.models.notes');
    //     self::saveLog($model, $action, $oldValue, $newValue);
    // }
    // public static function logInstructionUserAction($action, array $oldValue = null, array $newValue = null)
    // {
    //     $model = Config::get('constants.userActionLog.models.instructions');
    //     self::saveLog($model, $action, $oldValue, $newValue);
    // }
    // public static function logChallengeLibraryUserAction($action, array $oldValue = null, array $newValue = null)
    // {
    //     $model = Config::get('constants.userActionLog.models.challengesLibrary');
    //     self::saveLog($model, $action, $oldValue, $newValue);
    // }
}
