<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DeliveryZone extends Model
{
    protected $table ='delivery_zones';
    protected $fillable = [
            'name',
            'fee'


    ];
        public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'delevery_zone_id');
    }

}
