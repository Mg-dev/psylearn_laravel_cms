<?php

namespace App\Models;

use App\Models\Book;
use App\Models\AdditionBookInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publisher extends Model
{
    use HasFactory;

    public function books(){
        return $this->hasMany(Book::class);
    }


}