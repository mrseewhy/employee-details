<?php

namespace App\Models;

use App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nickname extends Model
{
    use HasFactory;
    // public function employee() {
    //     return $this->belongsTo('App\Employee');
    // }
    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
