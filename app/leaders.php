<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leaders extends Model
{
    protected $fillable = 
    [
        'leadN', 'leadStat', 'leadE', 'leadID', 'leadNumber', 'leadGit', 'leadDOB', 'leadBirth'
    ];
}
