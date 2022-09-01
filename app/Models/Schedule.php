<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable=[
        'movie_id',
        'theater_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'movie_id');
    }

    public function theater()
    {
        return $this->belongsTo(Theater::class);
    }
}
