<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{

    protected $table ='products';
    protected $fillable = [
            'category_id',
            'name',
            'description',
            'origin',
            'unit',
            'image',
            'price',
            'sale_price',
            'version',
            'active',
            'featured',


    ];
    protected $casts = [

            'price' => 'integer',
            'sale_price' => 'integer',
            'stock' => 'integer',
            'version' => 'integer',
            'active' => 'boolean',
            'featured' => 'boolean',


    ];
    public function categorie(): BelongsTo {

        return $this->belongsTo(Categorie::class, 'category_id');


    }
}
