<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member1 extends Model
{
    protected $fillable = 
    [
        'mem1', 'mem1Stat', 'mem1E', 'mem1ID', 'mem1Number', 'mem1GIT', 'mem1DOB', 'mem1Birth',
        'mem2', 'mem2Stat', 'mem2E', 'mem2ID', 'mem2Number', 'mem2GIT' , 'mem2DOB' , 'mem2Birth',
        'mem3' , 'mem3Stat', 'mem3E', 'mem3ID', 'mem3Number', 'mem3GIT', 'mem3DOB', 'mem3Birth'
    ];
    public function leaders()
    {
        return $this->hasMany('App\leaders');
    }
}
