<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $guarded = [];

// In Brand.php
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(BrandImage::class);
    }
    // In Brand.php (Model)
public function mainImage()
{
    return $this->hasOne(BrandImage::class); // assuming you have a BrandImage model for storing images
}

}
