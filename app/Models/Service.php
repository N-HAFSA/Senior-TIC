<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name','ValuePerHr'];

    /**
     * Get the order that contain the service.
     */
 
    /*public function order()
    {
        return $this->belongsTo(Order::class,'id');
    }*/
}
