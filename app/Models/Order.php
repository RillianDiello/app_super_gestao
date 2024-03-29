<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = ['client_id'];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_products')->withPivot('id','amount', 'created_at', 'updated_at');
    }
}
