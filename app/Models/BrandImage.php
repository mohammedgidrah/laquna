<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandImage extends Model
{
    use HasFactory;

    protected $table = 'brand_images';

    protected $fillable = [
        'brand_id', 'image_path',
    ];

    // Define the inverse relationship with Brand
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
