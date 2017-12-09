<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class android_pass extends Model
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'android_pass';

/**
     * The primary key of table bus_details used by the model
     *
     * @var string
     */
    
    protected $primaryKey = 'pass_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'id_no', ' phn_no', 'email', 'password',
    ];
}
