<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;
    public $table = 'book_category';
    protected $guarded = ['id'];

    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
