<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bSchedule extends Model
{
   /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'bus_schedule';

/**
     * The primary key of table bus_schedule used by the model
     *
     * @var string
     */
    
    protected $primaryKey = 'schedule_id';

/**
     * Method describing the relationship between bDetails and bSchedule model
     *
     * 
     */

    public function bus_details ()
    {
        return $this->belongsTo('App\bDetails', 'bus_id');
    }
    
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bus_id', 'county_of_departure', 'county_of_arrival', 'date_of_travel', 'time_of_travel',
    ];
}
