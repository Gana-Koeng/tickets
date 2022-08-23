<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    use HasFactory;
    protected $fillable = [
        'theater','time1','time2','time3','time4'
    ];
    
    public function schedule(){
        return $this->hasOne(Schedule::class);
    }
}
