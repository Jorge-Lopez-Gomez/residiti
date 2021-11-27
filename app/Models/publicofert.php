<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicofert extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'slug','descriptions', 'extract', 'price', 'image', 'visible', 'categoria_id'];
    public function publicofert(){
        return $this->belongsTo('App\Models\publicofert');
    }
}
