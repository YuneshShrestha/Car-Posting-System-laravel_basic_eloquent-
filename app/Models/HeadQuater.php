<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeadQuater extends Model
{
    use HasFactory;
    public function cars(){
        return $this->belongsTo(Car::class);
    }
}
