<?php

namespace App\Models;

use App\Notifications\EventNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegisteraion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'event_id','status','attended'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Events::class);
    }

    protected $casts = [
        'attended' => 'boolean',
    ];

    // protected static function booted()
    // {
    //     // dd('booted');
    //     static::created(function ($eventRegistration) {
    //         $eventRegistration->user->notify(new EventNotification($eventRegistration->event));
    //     });
    // }

}
