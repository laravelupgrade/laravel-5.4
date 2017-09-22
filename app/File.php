<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use Notifiable;

    protected $events = ['\App\Stuff\Class'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
