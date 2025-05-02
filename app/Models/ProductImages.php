<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ProductImages extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'image_path'];

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
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
