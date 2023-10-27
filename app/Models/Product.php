<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property string name
 * @property string description
 * @property integer weight
 * @property integer unit_id
 */
class Product extends Model
{
    protected $fillable = ['name', 'description', 'weight', 'unit_id', 'supplier_id'];
    use HasFactory;

    public function units(): HasOne
    {
        return $this->HasOne(Unit::class);
    }

    public function productDetail(): HasOne
    {
        return $this->hasOne(ProductDetail::class);
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
}
