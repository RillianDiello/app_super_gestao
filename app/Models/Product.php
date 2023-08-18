<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'weight', 'unit_id'];
    use HasFactory;

    public function units(): HasOne{
        return $this->HasOne(Unit::class);
    }
}
