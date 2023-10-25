<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductDetail extends Model
{
    protected $table = 'products_details';
    protected $fillable = [
      'product_id',
      'length',
      'heigth',
      'width',
      'unit_id',
    ];
    use HasFactory;

    public function product(): BelongsTo {
        return  $this->belongsTo(Product::class);
    }
}
