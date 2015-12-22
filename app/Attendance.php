<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['kid_id', 'attendancestatus'];
    public function kid()
{
    # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
    return $this->belongsToMany('\p4\Kid')->withTimestamps();
}

}
