<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Hunt;
use App\Models\Brand;
use App\Models\MediaFile;
use App\Models\Note;
use App\Models\Race;
use App\Models\Instruction;
use App\Models\Challenge;
use App\Models\ChallengeLibrary;
use App\Models\Checkpoint;
use App\Observers\UserObserver;
use App\Observers\BrandObserver;
use App\Observers\ChallengeLibraryObserver;
use App\Observers\MediaFileObserver;
use App\Observers\HuntObserver;
use App\Observers\NoteObserver;
use App\Observers\RaceObserver;
use App\Observers\InstructionObserver;
use App\Observers\ChallengeObserver;
use App\Observers\CheckpointObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{

    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        User::observe(UserObserver::class);
        Brand::observe(BrandObserver::class);
        MediaFile::observe(MediaFileObserver::class);
        Hunt::observe(HuntObserver::class);
        Race::observe(RaceObserver::class);
        Note::observe(NoteObserver::class);
        Checkpoint::observe(CheckpointObserver::class);
        Challenge::observe(ChallengeObserver::class);
        Instruction::observe(InstructionObserver::class);
        ChallengeLibrary::observe(ChallengeLibraryObserver::class);

    }
}
