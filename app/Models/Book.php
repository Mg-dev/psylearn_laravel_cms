<?php

namespace App\Models;

use App\Models\AdditionBookInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function additionBookInfo() {
        return $this->hasOne(AdditionBookInfo::class);
    }
}
