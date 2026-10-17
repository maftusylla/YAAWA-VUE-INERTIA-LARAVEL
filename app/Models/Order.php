<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{

    protected $table ='orders';
    protected $fillable = [
            'reference',
            'checkout_tocken',
            'delevery_zone_id',
            'zone_name',
            'adresse',
            'fulfillment_mode',
            'note',
            'sub_total',
            'discount_percentage',
            'discount_amount',
            'total',
            'statut',
            'stock_applied',
            'stock_restored',
            'canceled_at',

    ];
    protected function casts(): array
    {
        return [
            'sub_total' => 'integer',
            'discount_percentage' => 'integer',
            'discount_amount' => 'integer',
            'total' => 'integer',
            'stock_applied' => 'boolean',
            'stock_restored' => 'boolean',
            'canceled_at' => 'datetime',
        ];
    }
    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }

    public function deliveryZone(): BelongsTo
    {
        return $this->belongsTo(DeliveryZone::class,'delevery_zone_id');
    }


}
