<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $table = 'books';
    public $timestamps = true;
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(BookCategory::class, 'category');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
