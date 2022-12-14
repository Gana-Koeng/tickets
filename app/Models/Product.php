<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Product extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'name','lang','duration','genre','url','date', 'image','theater'
    ];

    public function schedule(){
        return $this->hasOne(Schedule::class);
    }
}