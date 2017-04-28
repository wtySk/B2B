<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Client extends Model
{

    protected $table = 'oauth_clients';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'secret','redirect','personal_access_client','password_client'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
