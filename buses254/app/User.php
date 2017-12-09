<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


/**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'bus_company';

/**
     * The primary key of table bus_company used by the model
     *
     * @var string
     */
    
    protected $primaryKey = 'company_id';

/**
     * Get the password for the user
     *
     * @return string 
     */
public function getAuthPassword()
{

    return $this->company_password;
}

/**
     * Method describing the relationship between bDetails and user model
     *
     * 
     */

    public function bCompany ()
    {
        return $this->hasMany('App\bDetails', 'company_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name','company_reg_id', 'owner_name' ,  'owner_national_IDno',  'company_office_location' , 'company_phone_no', 'company_email', 'company_password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'owner_national_IDno','company_password', 'remember_token',
    ];
}
