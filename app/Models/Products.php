<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'category_id'];

    public function images()
    {
        return $this->hasMany(ProductImages::class, 'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::creating(function ($category) {
            $category->user_id = Auth::id();
        });
    }
}
