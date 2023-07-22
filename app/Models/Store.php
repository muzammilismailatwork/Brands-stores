<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public function brand()
    {
        return $this->hasOne(Brand::class,"id", "brand_id");
    }
}
