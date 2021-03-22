<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
  
    protected $fillable = ['hours','tax','employe_id','service_id','Total'];

    /**
     * Get the service  associated to the order.
     */
   /* public function Service()
    {
        return $this->hasOne( Service::class);
    }
    /**
     * Get the employe who is going to execute the service.
     */
   /* public function Employe()
    {
        return $this->hasOne( Employe::class);
    }*/
}

