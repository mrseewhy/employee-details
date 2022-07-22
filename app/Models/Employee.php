<?php

namespace App\Models;

use App\Models\Nickname;
use App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function nickname ()
    {
        return $this->hasOne(Nickname::class);
    }
   
    public function project ()
    {
        return $this->hasMany(Project::class);
    }
}
