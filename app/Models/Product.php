<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'buying_price',
        'selling_price',
        'quantity',
        'threshold',
        'expiry_date',
        'supplier_id',
    ];

    //protected $guarded = [id]; c'est une autre approche possible

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
