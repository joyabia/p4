<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    //
    protected $fillable = [
    'firstname',
    'lastname',
    'birthday'
    ];

/*
* It is possible that one kid is picked up by more than one caregiver. We need to track 
* signed the attendance
*/
    public function users()
{
    # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
    return $this->belongsToMany('\p4\User')->withTimestamps();
}

/*
 *Kids can be signed in and out multiple times in a day
 */
    public function attendancestatus()
{
    # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
    return $this->hasMany('\p4\Attendance');
}



public function getFullnameAttribute()
 {
 return $this->firstname . " " . $this->lastname;
 }

}
