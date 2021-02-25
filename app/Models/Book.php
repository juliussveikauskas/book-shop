<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    const ACTIVE = 'active';
    const INACTIVE = 'inactive';
    const UNCONFIRMED = 'unconfirmed';

    protected $perPage = 10;

    protected $fillable = ['name', 'written_at', 'image', 'discount', 'rating', 'description', 'status', 'price', 'user_id'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_author', 'book_id', 'author_id');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genre', 'book_id', 'genre_id');
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function isNew()
    {
        return $this->created_at > date('Y-m-d', strtotime('-7 days'));
    }

    public function getDiscountedPriceAttribute()
    {
        return !empty($this->discount) ? round($this->price - ($this->price * ($this->discount / 100)), 2) : $this->price;
    }

    public function scopeActive()
    {
        return $this->where('status', self::ACTIVE);
    }

    public function getIsActiveAttribute()
    {
        return $this->status == self::ACTIVE ?? null;
    }

    public function getIsUnconfirmedAttribute()
    {
        return $this->status == self::UNCONFIRMED ?? null;
    }

    public function getImageUrlAttribute()
    {
        return !empty($this->image) ? asset('storage/' . $this->image) : asset('images/default.png');
    }
}
