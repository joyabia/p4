<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    //
    protected $fillable = [
    'firstName',
    'lastName',
    ];

    public function users()
{
    # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
    return $this->belongsToMany('\p4\User')->withTimestamps();
}
}
