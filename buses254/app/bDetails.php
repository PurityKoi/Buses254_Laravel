<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bDetails extends Model
{
    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'bus_details';

/**
     * The primary key of table bus_details used by the model
     *
     * @var string
     */
    
    protected $primaryKey = 'bus_id';

/**
     * Method describing the relationship between bDetails and User model
     *
     * 
     */

public function bus_company ()
    {
        return $this->belongsTo('App\User', 'company_id');
    }

/**
     * Method describing the relationship between bDetails and bSchedule model
     *
     * 
 */
    
public function bus_schedule()
{

    return $this->hasMany('App\bSchedule', 'bus_id');
}
    

/*protected $busid=App\bDetails::with(array('bDetails'=>function($query)
    {
        $query->select('company_id', 'bus_id', 'bus_no_plate');
    }

    )
    )->get();
*/


 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bus_no_plate', 'company_id', 'no_of_seats',
    ];

   }
