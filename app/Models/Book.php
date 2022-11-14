<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;


    
   protected $fillable = [
        'title',
        'description',
        'decription',
        'price',
        'available' 
   ];
   protected $guarded = [];

   public function store() {
    return $this->belongsTo(related:'App\Models\Store');
   }

   public function aurthors(){
    return $this->belongsToMany(related:'App\Models\Author');
   }


}
