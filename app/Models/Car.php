<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // You can reset your table name this way
    // protected $table = 'cars';
    
    // You can reset your primary key this way
    // protected $primaryKey = 'id';

    // You can reset your timestamps this way
    // protected $timestamps = true;

    // hiding attributes
    // protected $hidden = ["updated_at"];

    // whitelist attributes
    // protected $visible = ["name", "id", "description","founded"];

    public function carmodels(){
        return $this->hasMany(CarModel::class);
    }
    public function headquater(){
        return $this->hasOne(HeadQuater::class);
    }
    public function engines(){
        return $this->hasManyThrough(
            Engine::class, 
            CarModel::class,
            'car_id', //Foreign key on CarModel
            'model_id', //Foreign key on Engine
        );
    }
    public function production_date(){
        // Here hasOneThrough has not worked so used has many through
        return $this->hasManyThrough(
            ProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }
     public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
